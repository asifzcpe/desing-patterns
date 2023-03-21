<?php

namespace Asif\StrategyPattern\Strategies;
use Asif\StrategyPattern\Interfaces\ShippingStrategy;
class StandardShipping implements ShippingStrategy
{
    public function calculateShippingCost()
    {
        // Here we can implement our main business logic
        echo 'Standard shipping cost is 20BDT'; 
    }

    public function getEstimatedDeliveryDate()
    {
        // Here we can implement our main business logic
        echo 'Standard shipping estimated delivery date 2022-06-01'; 
    }
}
