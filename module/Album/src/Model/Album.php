<?php

namespace Album\Model;

use DomainException;
use Zend\Filter\StringTrim;
use Zend\Filter\StripTags;
use Zend\Filter\ToInt;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;
use Zend\Validator\StringLength;

class Album implements InputFilterAwareInterface

{
    public $action_reason_id;
    public $action_id;
    public $action_name;
    public $action_description;
    public $reason_id;
    public $reason_name;
    public $reason_description;
    public $action_reason_begin;
    public $action_reason_end;
    public $action_reason_create_id;
    public $action_reason_create_user;
    public $action_reason_create_date;
    public $action_reason_modify_id;
    public $action_reason_modify_user;
    public $action_reason_modify_date;


//    public $id;
//    public $artist;
//    public $title;
//

    private $inputFilter;

    public function exchangeArray(array $data)
    {
        $this->action_reason_id = !empty($data['action_reason_id']) ? $data['action_reason_id'] : null;
        $this->action_id = !empty($data['action_id']) ? $data['action_id'] : null;
        $this->action_name = !empty($data['action_name']) ? $data['action_name'] : null;
        $this->action_description = !empty($data['action_description']) ? $data['action_description'] : null;
        $this->reason_id = !empty($data['reason_id']) ? $data['reason_id'] : null;
        $this->reason_name = !empty($data['reason_name']) ? $data['reason_name'] : null;
        $this->reason_description = !empty($data['reason_description']) ? $data['reason_description'] : null;
        $this->action_reason_begin = !empty($data['action_reason_begin']) ? $data['action_reason_begin'] : null;
        $this->action_reason_end = !empty($data['action_reason_end']) ? $data['action_reason_end'] : null;
        $this->action_reason_create_id = !empty($data['action_reason_create_id']) ? $data['action_reason_create_id'] : null;
        $this->action_reason_create_user = !empty($data['action_reason_create_user']) ? $data['action_reason_create_user'] : null;
        $this->action_reason_create_date = !empty($data['action_reason_create_date']) ? $data['action_reason_create_date'] : null;
        $this->action_reason_modify_id = !empty($data['action_reason_modify_id']) ? $data['action_reason_modify_id'] : null;
        $this->action_reason_modify_user = !empty($data['action_reason_modify_user']) ? $data['action_reason_modify_user'] : null;
        $this->action_reason_modify_date = !empty($data['action_reason_modify_date']) ? $data['action_reason_modify_date'] : null;
    }
//    public function exchangeArray(array $data)
//    {
//        $this->id     = !empty($data['id']) ? $data['id'] : null;
//        $this->artist = !empty($data['artist']) ? $data['artist'] : null;
//        $this->title  = !empty($data['title']) ? $data['title'] : null;
//    }
    public function setInputFilter(InputFilterInterface $inputFilter)
    {
        throw new DomainException(sprintf(
            '%s does not allow injection of an alternate input filter',
            __CLASS__
        ));
    }

    public function getArrayCopy()
    {
        return [

            'action_reason_id' => $this->action_reason_id,
            'action_id' => $this->action_id,
            'action_name' => $this->action_name,
            'action_description' => $this->action_description,
            'reason_id' => $this->reason_id,
            'reason_name' => $this->reason_name,
            'reason_description' => $this->reason_description,
            'action_reason_begin' => $this->action_reason_begin,
            'action_reason_end' => $this->action_reason_end,
            'action_reason_create_id' => $this->action_reason_create_id,
            'action_reason_create_user' => $this->action_reason_create_user,
            'action_reason_create_date' => $this->action_reason_create_date,
            'action_reason_modify_id' => $this->action_reason_modify_id,
            'action_reason_modify_user' => $this->action_reason_modify_user,
            'action_reason_modify_date' => $this->action_reason_modify_date,
        ];
    }

    public function getInputFilter()
    {
        if ($this->inputFilter) {
            return $this->inputFilter;
        }

        $inputFilter = new InputFilter();
        $inputFilter->add([
            'name' => 'action_reason_id',
            'required' => true,
            'filters' => [
                ['name' => ToInt::class],
            ],

        ]);
        $inputFilter->add([
            'name' => 'action_id',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => StringLength::class,
                    'options' => [
                        'encoding' => 'UTF-8',
                        'min' => 1,
                        'max' => 100,
                    ],
                ],
            ],
        ]);
        $inputFilter->add([
            'name' => 'action_name',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => StringLength::class,
                    'options' => [
                        'encoding' => 'UTF-8',
                        'min' => 1,
                        'max' => 100,
                    ],
                ],
            ],
        ]);
        $inputFilter->add([
            'name' => 'action_description',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => StringLength::class,
                    'options' => [
                        'encoding' => 'UTF-8',
                        'min' => 1,
                        'max' => 100,
                    ],
                ],
            ],
        ]);
        $inputFilter->add([
            'name' => 'action_description',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => StringLength::class,
                    'options' => [
                        'encoding' => 'UTF-8',
                        'min' => 1,
                        'max' => 100,
                    ],
                ],
            ],
        ]);
        $inputFilter->add([
            'name' => 'reason_id',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => StringLength::class,
                    'options' => [
                        'encoding' => 'UTF-8',
                        'min' => 1,
                        'max' => 100,
                    ],
                ],
            ],
        ]);
        $inputFilter->add([
            'name' => 'reason_name',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => StringLength::class,
                    'options' => [
                        'encoding' => 'UTF-8',
                        'min' => 1,
                        'max' => 100,
                    ],
                ],
            ],
        ]);
        $inputFilter->add([
            'name' => 'reason_description',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => StringLength::class,
                    'options' => [
                        'encoding' => 'UTF-8',
                        'min' => 1,
                        'max' => 100,
                    ],
                ],
            ],
        ]);
        $inputFilter->add([
            'name' => 'action_reason_begin',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => StringLength::class,
                    'options' => [
                        'encoding' => 'UTF-8',
                        'min' => 1,
                        'max' => 100,
                    ],
                ],
            ],
        ]);
        $inputFilter->add([
            'name' => 'action_reason_end',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => StringLength::class,
                    'options' => [
                        'encoding' => 'UTF-8',
                        'min' => 1,
                        'max' => 100,
                    ],
                ],
            ],
        ]);
        $inputFilter->add([
            'name' => 'action_reason_create_id',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => StringLength::class,
                    'options' => [
                        'encoding' => 'UTF-8',
                        'min' => 1,
                        'max' => 100,
                    ],
                ],
            ],
        ]);
        $inputFilter->add([
            'name' => 'action_reason_create_user',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => StringLength::class,
                    'options' => [
                        'encoding' => 'UTF-8',
                        'min' => 1,
                        'max' => 100,
                    ],
                ],
            ],
        ]);
        $inputFilter->add([
            'name' => 'action_reason_create_date',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => StringLength::class,
                    'options' => [
                        'encoding' => 'UTF-8',
                        'min' => 1,
                        'max' => 100,
                    ],
                ],
            ],
        ]);
        $inputFilter->add([
            'name' => 'action_reason_modify_id',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => StringLength::class,
                    'options' => [
                        'encoding' => 'UTF-8',
                        'min' => 1,
                        'max' => 100,
                    ],
                ],
            ],
        ]);
        $inputFilter->add([
            'name' => 'action_reason_modify_user',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => StringLength::class,
                    'options' => [
                        'encoding' => 'UTF-8',
                        'min' => 1,
                        'max' => 100,
                    ],
                ],
            ],
        ]);
        $inputFilter->add([
            'name' => 'action_reason_modify_date',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => StringLength::class,
                    'options' => [
                        'encoding' => 'UTF-8',
                        'min' => 1,
                        'max' => 100,
                    ],
                ],
            ],
        ]);

        $this->inputFilter = $inputFilter;
        return $this->inputFilter;
    }
}