<?php
namespace models;

use kernel\Model;

/**
 * Name Model
 * @package models
 */
class Name extends Model
{

    /**
     * Simple model data
     * @var array
     */
    protected $data = array(
        'Имя #1',
        'Имя #2'
    );

    /**
     * Getter
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

}