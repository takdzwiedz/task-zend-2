<?php
namespace Album\Model;

use RuntimeException;
use Zend\Db\TableGateway\TableGatewayInterface;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\Sql\Select;
use Zend\Paginator\Adapter\DbSelect;
use Zend\Paginator\Paginator;

class AlbumTable
{
    private $tableGateway;

    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll($paginated = false)
    {
        if ($paginated) {
            return $this->fetchPaginatedResults();
        }

        return $this->tableGateway->select();
    }
    private function fetchPaginatedResults()
    {
        // Create a new Select object for the table:
        $select = new Select($this->tableGateway->getTable());

        // Create a new result set based on the Album entity:
        $resultSetPrototype = new ResultSet();
        $resultSetPrototype->setArrayObjectPrototype(new Album());

        // Create a new pagination adapter object:
        $paginatorAdapter = new DbSelect(
        // our configured select object:
            $select,
            // the adapter to run it against:
            $this->tableGateway->getAdapter(),
            // the result set to hydrate:
            $resultSetPrototype
        );

        $paginator = new Paginator($paginatorAdapter);
        return $paginator;
    }
    public function getAlbum($action_reason_id)
    {
        $action_reason_id = (int) $action_reason_id;
        $rowset = $this->tableGateway->select(['action_reason_id' => $action_reason_id]);
        $row = $rowset->current();
        if (! $row) {
            throw new RuntimeException(sprintf(
                'Could not find row with identifier %d',
                $action_reason_id
            ));
        }
        return $row;
    }

    public function saveAlbum(Album $album)
    {
        $data = [
            'action_id' => $album->action_id,
            'action_name' => $album->action_name,
            'action_description' => $album->action_description,
            'reason_id' => $album->reason_id,
            'reason_name' => $album->reason_name,
            'reason_description' => $album->reason_description,
            'action_reason_begin' => $album->action_reason_begin,
            'action_reason_end' => $album->action_reason_end,
            'action_reason_create_id' => $album->action_reason_create_id,
            'action_reason_create_user' => $album->action_reason_create_user,
            'action_reason_create_date' => $album->action_reason_create_date,
            'action_reason_modify_id' => $album->action_reason_modify_id,
            'action_reason_modify_user' => $album->action_reason_modify_user,
            'action_reason_modify_date' => $album->action_reason_modify_date,

        ];

        $action_reason_id = (int) $album->action_reason_id;

        if ($action_reason_id === 0) {
            $this->tableGateway->insert($data);
            return;
        }

        if (! $this->getAlbum($action_reason_id)) {
            throw new RuntimeException(sprintf(
                'Cannot update album with identifier %d; does not exist',
                $action_reason_id
            ));
        }

        $this->tableGateway->update($data, ['action_reason_id' => $action_reason_id]);
    }

    public function deleteAlbum($action_reason_id)
    {
        $this->tableGateway->delete(['action_reason_id' => (int) $action_reason_id]);
    }
}