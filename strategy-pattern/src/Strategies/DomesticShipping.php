<?php

namespace Asif\StrategyPattern\Strategies;
use Asif\StrategyPattern\Interfaces\ShippingStrategy;
class DomesticShipping implements ShippingStrategy
{
    public function calculateShippingCost()
    {
        // Here we can implement our main business logic
        echo 'Domestic shipping cost is 5.00BDT'; 
    }

    public function getEstimatedDeliveryDate()
    {
        // Here we can implement our main business logic
        echo 'Domestic shipping estimated delivery date 2022-04-01'; 
    }
}
