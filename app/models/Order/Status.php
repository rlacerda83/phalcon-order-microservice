<?php

namespace Models\Order;

use Phalcon\Mvc\Model;
use Models\Order;
use Models\Status as StatusModel;

class Status extends Model
{

    const TABLE = 'Models\Order\Status';

    /**
     * @var int
     */
    protected $id;

    /**
     * @var Order
     */
    protected $order;

    /**
     * @var StatusModel
     */
    protected $status;

    /**
     * @var string
     */
    protected $createdAt;

    /**
     * @var string
     */
    protected $observation;

    public function initialize()
    {
        $this->belongsTo('order_id', 'Models\Order', 'id');
        $this->hasOne('status_id', 'Models\Status', 'id');
    }

    /**
     * @return int
     */
    public function getId()
    {
        return (int) $this->id;
    }

    /**
     * @return Order
     */
    public function getOrder()
    {
        return $this->getRelated('Models\Order');
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
        $this->createdAt = (string) $createdAt;
    }

    /**
     * @return string
     */
    public function getObservation()
    {
        return (string) $this->observation;
    }

    /**
     * @param $observation
     */
    public function setObservation($observation)
    {
        $this->observation = (string) $observation;
    }

    /**
     * @return StatusModel
     */
    public function getStatus()
    {
        return $this->getRelated('Models\Status');
    }

    /**
     * @param $status
     */
    public function setStatus(StatusModel $status)
    {
        $this->status = $status;
    }

}