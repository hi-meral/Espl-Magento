<?php
/*
 * Name : Cart Price
 * Use : Add addition amount to actual product price when being added into cart
 * Developer : Miral Maradia
 * Create Date : 30 Sep, 2020
*/
namespace MyPlugin\CartPrice\Plugins;

class Cart
{
    protected $logger;
    public function __construct(\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    public function aroundAddProduct(\Magento\Checkout\Model\Cart $subject, \Closure $proceed, $productInfo, $requestInfo=null)
    {
        //$this->logger->debug("Test Log 1 oct");
        $additionalCost = 50;
        $productInfo['price'] = $productInfo['price'] + $additionalCost;
        $result = $proceed($productInfo, $requestInfo);
        return $result;
    }
}