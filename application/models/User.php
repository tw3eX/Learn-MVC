<?php
namespace models;

use kernel\Model;

/**
 * User Model
 * @package models
 */
class User extends Model
{

    /**
     * Simple model data
     * @var array
     */
    protected $data = array(
        'Пользователь #1',
        'Пользователь #2'
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