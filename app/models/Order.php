<?php

namespace Models;

use Phalcon\Mvc\Model;

class Order extends Model
{
    /**
     * @var int
     */
    protected $id;


    protected $client;

    /**
     * @var string
     */
    protected $createdAt;

    /**
     * @var string
     */
    protected $updatedAt;

    /**
     * @var string
     */
    protected $observations;


    public function initialize()
    {
        $this->hasMany('id', 'Models\Order\Items', 'order_id');
    }

    public function getId()
    {
    	return (int) $this->id;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
    	return (string) $this->createdAt;
    }

    /**
     * @param $createdAt
     */
    public function setCreatedAt($createdAt)
    {
    	$this->createdAt = $createdAt;
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return (string) $this->updatedAt;
    }

    /**
     * @param $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return string
     */
    public function getObservations()
    {
        return (string) $this->observations;
    }

    /**
     * @param $observations
     */
    public function setObservations($observations)
    {
        $this->observations = $observations;
    }
}