<?php

namespace Models\Order;

use Phalcon\Mvc\Model;
use Models\Order;

class Cart extends Model
{

    const TABLE = 'Models\Cart';

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $items;

    /**
     * @var string
     */
    protected $createdAt;

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
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param $code
     */
    public function setCode($code)
    {
        $this->code = $code;
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
    public function getItems()
    {
        return (string) $this->items;
    }

    /**
     * @param $items
     */
    public function setItems($items)
    {
        $this->items = (string) $items;
    }

}