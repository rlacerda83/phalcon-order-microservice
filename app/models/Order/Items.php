<?php

namespace Models\Order;

use Phalcon\Mvc\Model;
use Models\Order;

class Items extends Model
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var Order
     */
    protected $order;

    protected $sku;


    /**
     * @var string
     */
    protected $createdAt;

    /**
     * @var string
     */
    protected $updatedAt;

    /**
     * @var int
     */
    protected $quantity;

    /**
     * @var float
     */
    protected $price;

    /**
     * @var float
     */
    protected $totalPrice;

    /**
     * @var string
     */
    protected $observations;


    public function initialize()
    {
        $this->belongsTo('order_id', 'Models\Order', 'id');
    }

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
     * @return int
     */
    public function getQuantity()
    {
        return (int) $this->quantity;
    }

    /**
     * @param $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = (int) $quantity;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return (float) $this->price;
    }

    /**
     * @param $price
     */
    public function setPrice($price)
    {
        $this->price = (float) $price;
    }

    /**
     * @return float
     */
    public function getTotalPrice()
    {
        return (float) $this->totalPrice;
    }

    /**
     * @param $totalPrice
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = (float) $totalPrice;
    }


}