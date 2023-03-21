<?php

namespace Asif\StrategyPattern\Strategies;
use Asif\StrategyPattern\Interfaces\ShippingStrategy;
class InternationalShipping implements ShippingStrategy
{
    public function calculateShippingCost()
    {
        // Here we can implement our main business logic
        echo 'International shipping cost is 250.00BDT'; 
    }

    public function getEstimatedDeliveryDate()
    {
        // Here we can implement our main business logic
        echo 'International shipping estimated delivery date 2022-07-01'; 
    }
}
