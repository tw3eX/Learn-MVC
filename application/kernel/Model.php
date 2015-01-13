<?php
namespace kernel;
/**
 * Abstract Model Class
 * @package kernel
 */
abstract class Model
{
    /**
     * Simple model data
     * @var
     */
    protected $data;

    /**
     * Getter
     * @return mixed
     */
    abstract public function getData();
}