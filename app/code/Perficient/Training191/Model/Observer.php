<?php
namespace Perficient\Training191\Model;

class Observer {
    private $_logger = null;

    public function __construct(\Psr\Log\LoggerInterface $logger) {
        $this->_logger = $logger;
    }

    public function logRequestObject(\Magento\Framework\Event\Observer $observer) {
        $request = $observer->getEvent()->getData('request');
        $output = $request->getRequestUri();
        $this->_logger->info(">>>>>> Request object \n" . $output . "\n Request object <<<<<<");
    }
}