<?php

namespace Asif\StrategyPattern;

class Shipping
{
    private $strategy;
    public function __construct($shippingType)
    {
        $strategyClass = 'Asif\\StrategyPattern\\Strategies\\' . ucfirst($shippingType) . 'Shipping';

        if (!class_exists($strategyClass)) {
            throw new \InvalidArgumentException('Invalid shipping type');
        }
        
        $this->strategy = new $strategyClass();
    }

    public function calculateShippingCost()
    {
        return $this->strategy->calculateShippingCost();
    }

    public function getEstimatedDeliveryDate()
    {
        return $this->strategy->getEstimatedDeliveryDate();
    }
}
