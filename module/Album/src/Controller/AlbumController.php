<?php

namespace Album\Controller;

header('Access-Control-Allow-Origin: *');

use Album\Model\AlbumTable;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Album\Form\AlbumForm;
use Album\Model\Album;
use Zend\View\Model\JsonModel;

class AlbumController extends AbstractActionController
{
    private $table;

    public function __construct(AlbumTable $table)
    {
        $this->table = $table;
    }

    public function indexAction()
    {
        return new ViewModel([
            'albums' => $this->table->fetchAll(),
        ]);
    }

    public function addAction()
    {

        $form = new AlbumForm();
        $form->get('submit')->setValue('Add');

        $request = $this->getRequest();

        if (!$request->isPost()) {
            return ['form' => $form];
        }

        $album = new Album();
        $form->setInputFilter($album->getInputFilter());
        $form->setData($request->getPost());


        if (!$form->isValid()) {
            return ['form' => $form];
        }
        $album->exchangeArray($form->getData());
        $this->table->saveAlbum($album);
        return $this->redirect()->toRoute('album');
    }

    public function editAction()
    {
        // TO DO
        $action_reason_id = (int)$this->params()->fromRoute('id', 0);
        if (0 === $action_reason_id) {
            return $this->redirect()->toRoute('album', ['action' => 'add']);
        }
        // Retrieve the album with the specified id. Doing so raises
        // an exception if the album is not found, which should result
        // in redirecting to the landing page.
        try {
            $album = $this->table->getAlbum($action_reason_id);
        } catch (\Exception $e) {
            return $this->redirect()->toRoute('album', ['action' => 'index']);
        }


        $form = new AlbumForm();
        $form->bind($album);
        $form->get('submit')->setAttribute('value', 'Edit');

        $request = $this->getRequest();
        $viewData = ['action_reason_id' => $action_reason_id, 'form' => $form];

        if (!$request->isPost()) {
            return $viewData;
        }
        echo "miś";
        die();
        $form->setInputFilter($album->getInputFilter());
        $form->setData($request->getPost());

        if (!$form->isValid()) {
            return $viewData;
        }

        $this->table->saveAlbum($album);

        // Redirect to album list
        return $this->redirect()->toRoute('album', ['action' => 'index']);
    }

    public function deleteAction()
    {

        // TO DO
        $action_reason_id = (int)$this->params()->fromRoute('action_reason_id', 0);
        if (!$action_reason_id) {
            return $this->redirect()->toRoute('album');
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
            $del = $request->getPost('del', 'No');

            if ($del == 'Yes') {
                $id = (int)$request->getPost('action_reason_id');
                $this->table->deleteAlbum($action_reason_id);
            }

            // Redirect to list of albums
            return $this->redirect()->toRoute('album');
        }

        return [
            'action_reason_id' => $action_reason_id,
            'album' => $this->table->getAlbum($action_reason_id),
        ];
    }

    public function jsonAction()
    {
        $results = $this->table->fetchAll();

        $response = [
            'success' => true,
            'data' => [],
            'count' => (string)(count($results)),
        ];
        $response['data'] = $results->toArray();

        return new JsonModel($response);
    }
}