<?php

namespace Album\Controller;

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
        // Grab the paginator from the AlbumTable:
        $paginator = $this->table->fetchAll(true);

        // Set the current page to what has been passed in query string,
        // or to 1 if none is set, or the page is invalid:
        $page = (int) $this->params()->fromQuery('page', 1);
        $page = ($page < 1) ? 1 : $page;
        $paginator->setCurrentPageNumber($page);

        // Set the number of items per page to 10:
        $paginator->setItemCountPerPage(10);

        return new ViewModel(['paginator' => $paginator]);
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

        $action_reason_id = (int)$this->params()->fromRoute('id', 0);
        if (0 === $action_reason_id) {
            return $this->redirect()->toRoute('album', ['action' => 'add']);
        }

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

        if (! $request->isPost()) {
            return $viewData;
        }
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
        $action_reason_id = (int)$this->params()->fromRoute('id', 0);
        if (!$action_reason_id) {
            return $this->redirect()->toRoute('album');
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
            $del = $request->getPost('del', 'No');

            if ($del == 'Yes') {
                $action_reason_id = (int)$request->getPost('action_reason_id');
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