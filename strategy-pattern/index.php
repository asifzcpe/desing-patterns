<?php
require_once 'vendor/autoload.php';

use Asif\StrategyPattern\Shipping;

$shipping = new Shipping('International');
echo $shipping->calculateShippingCost();
echo "</br>";
echo $shipping->getEstimatedDeliveryDate();
