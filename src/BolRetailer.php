<?php

namespace Appstract\BolRetailer;

use Picqer\BolRetailer\Offer;
use Picqer\BolRetailer\Order;
use Picqer\BolRetailer\ProcessStatus;
use Picqer\BolRetailer\ReturnItem;
use Picqer\BolRetailer\Shipment;

class BolRetailer
{
    /**
     * @return \Picqer\Offer
     */
    public function offer()
    {
        return new Offer();
    }

    /**
     * @return \Picqer\Order
     */
    public function order()
    {
        return new Order();
    }

    /**
     * @return \Picqer\ProcessStatus
     */
    public function processStatus()
    {
        return new ProcessStatus();
    }

    /**
     * @return \Picqer\Offer
     */
    public function returnItem()
    {
        return new ReturnItem();
    }

    /**
     * @return \Picqer\Shipment
     */
    public function shipment()
    {
        return new Shipment();
    }
}