<?php

namespace Asif\StrategyPattern\Interfaces;

interface ShippingStrategy
{
    public function calculateShippingCost();

    public function getEstimatedDeliveryDate();
}
