<?php

namespace Models;

use Phalcon\Mvc\Model;

class Status extends Model
{
    const TABLE = 'Models\Status';

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @return int
     */
    public function getId()
    {
    	return (int) $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
    	return (string) $this->name;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
    	$this->name = $name;
    }

}