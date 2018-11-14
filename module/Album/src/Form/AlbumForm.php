<?php

namespace Album\Form;

use Zend\Form\Form;

class AlbumForm extends Form
{
    public function __construct($name = null)
    {

//        $this->setAttribute('method', 'GET');
        // We will ignore the name provided to the constructor
        parent::__construct('album');

        $this->add([
            'name' => 'action_reason_id',
            'type' => 'hidden',

        ]);
        $this->add([
            'name' => 'action_id',
            'type' => 'text',
            'options' => [
                'label' => 'Action Id',
            ],
        ]);
        $this->add([
            'name' => 'action_name',
            'type' => 'text',
            'options' => [
                'label' => 'Action Name',
            ],
        ]);
        $this->add([
            'name' => 'action_description',
            'type' => 'text',
            'options' => [
                'label' => 'Action Description',
            ],
        ]);
        $this->add([
            'name' => 'reason_id',
            'type' => 'text',
            'options' => [
                'label' => 'Reason Id',
            ],
        ]);
        $this->add([
            'name' => 'reason_name',
            'type' => 'text',
            'options' => [
                'label' => 'Reason Name',
            ],
        ]);
        $this->add([
            'name' => 'reason_description',
            'type' => 'text',
            'options' => [
                'label' => 'Reason Description',
            ],
        ]);
        $this->add([
            'name' => 'action_reason_begin',
            'type' => 'text',
            'options' => [
                'label' => 'Action Reason Begin',
            ],
        ]);
        $this->add([
            'name' => 'action_reason_end',
            'type' => 'text',
            'options' => [
                'label' => 'Action Reason End',
            ],
        ]);
        $this->add([
            'name' => 'action_reason_create_id',
            'type' => 'text',
            'options' => [
                'label' => 'Action Reason Create Id',
            ],
        ]);
        $this->add([
            'name' => 'action_reason_create_user',
            'type' => 'text',
            'options' => [
                'label' => 'Action Reason Create User',
            ],
        ]);
        $this->add([
            'name' => 'action_reason_create_date',
            'type' => 'text',
            'options' => [
                'label' => 'Action Reason Create User',
            ],
        ]);
        $this->add([
            'name' => 'action_reason_modify_id',
            'type' => 'text',
            'options' => [
                'label' => 'Action Reason Modify Id',
            ],
        ]);
        $this->add([
            'name' => 'action_reason_modify_user',
            'type' => 'text',
            'options' => [
                'label' => 'Action Reason Modify User',
            ],
        ]);
        $this->add([
            'name' => 'action_reason_modify_date',
            'type' => 'text',
            'options' => [
                'label' => 'Action Reason Modify User',
            ],
        ]);

        $this->add([
            'name' => 'submit',
            'type' => 'submit',
            'attributes' => [
                'value' => 'Go',
                'action_reason_id' => 'submitbutton',
            ],
        ]);
    }
}