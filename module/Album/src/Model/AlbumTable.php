<?php
namespace Album\Model;

use RuntimeException;
use Zend\Db\TableGateway\TableGatewayInterface;

class AlbumTable
{
    private $tableGateway;

    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        return $this->tableGateway->select();
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