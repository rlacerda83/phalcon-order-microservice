<?php

namespace Models\Order;

use Phalcon\Mvc\Model;
use Models\Order;

class Delivery extends Model
{

    const TABLE = 'Models\Order\Delivery';

    /**
     * @var int
     */
    protected $id;

    /**
     * @var Order
     */
    protected $order;

    /**
     * @var string
     */
    protected $address;

    /**
     * @var string
     */
    protected $addressComplement;

    /**
     * @var string
     */
    protected $postalCode;

    /**
     * @var string
     */
    protected $neighborhood;

    /**
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var string
     */
    protected $country;

    /**
     * @var string
     */
    protected $deliveryMethod;

    /**
     * @var string
     */
    protected $deliveryService;

    /**
     * @var float
     */
    protected $price;

    /**
     * @var string
     */
    protected $trackingCoke;


    public function initialize()
    {
        $this->belongsTo('order_id', 'Models\Order', 'id');
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
    public function getAddress()
    {
        return (string) $this->address;
    }

    /**
     * @param $address
     */
    public function setAddress($address)
    {
        $this->address = (string) $address;
    }

    /**
     * @return string
     */
    public function getAddressComplement()
    {
        return (string) $this->addressComplement;
    }

    /**
     * @param $addressComplement
     */
    public function setAddressComplement($addressComplement)
    {
        $this->addressComplement = (string) $addressComplement;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return (string) $this->postalCode;
    }

    /**
     * @param $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = (string) $postalCode;
    }

    /**
     * @return string
     */
    public function getNeighborhood()
    {
        return (string) $this->neighborhood;
    }

    /**
     * @param $neighborhood
     */
    public function setNeighborhood($neighborhood)
    {
        $this->neighborhood = (string) $neighborhood;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return (string) $this->city;
    }

    /**
     * @param $city
     */
    public function setCity($city)
    {
        $this->city = (string) $city;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return (string) $this->state;
    }

    /**
     * @param $state
     */
    public function setState($state)
    {
        $this->state = (string) $state;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return (string) $this->country;
    }

    /**
     * @param $country
     */
    public function setCoutry($country)
    {
        $this->country = (string) $country;
    }

    /**
     * @return string
     */
    public function getDeliveryMethod()
    {
        return (string) $this->deliveryMethod;
    }

    /**
     * @param $deliveryMethod
     */
    public function setDeliveryMethod($deliveryMethod)
    {
        $this->deliveryMethod = (string) $deliveryMethod;
    }

    /**
     * @return string
     */
    public function getDeliveryService()
    {
        return (string) $this->deliveryService;
    }

    /**
     * @param $deliveryService
     */
    public function setDeliveryService($deliveryService)
    {
        $this->deliveryService = (string) $deliveryService;
    }

    /**
     * @return string
     */
    public function getTrackingCode()
    {
        return (string) $this->trackingCoke;
    }

    /**
     * @param $trackingCode
     */
    public function setTrackingCode($trackingCode)
    {
        $this->trackingCoke = (string) $trackingCode;
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

}