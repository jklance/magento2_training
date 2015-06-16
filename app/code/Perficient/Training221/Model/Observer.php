<?php
namespace Perficient\Training221\Model;

class Observer {
    private $_logger = null;

    public function __construct(\Psr\Log\LoggerInterface $logger) {
        $this->_logger = $logger;
    }

    public function logResponseObject(\Magento\Framework\Event\Observer $observer) {
        return ; // This is way too log spammy to leave enabled
        $response = $observer->getEvent()->getData('response');
        $output = $response->getBody();
        //$class = get_class($response);
        //$methods = get_class_methods($class);
        $this->_logger->info(">>>>>> Response object \n" . $output . "\n Response object <<<<<<");
    }
}