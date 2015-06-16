<?php
namespace Perficient\Training232\Controller;

class Router implements \Magento\Framework\App\RouterInterface {

    public function __construct(\Magento\Framework\App\ActionFactory $actionFactory) {
        $this->actionFactory = $actionFactory;
    }

    public function match(\Magento\Framework\App\RequestInterface $requestInterface) {
        $pathInfo = trim($requestInterface->getPathInfo(), '/');

        if (substr($pathInfo, 0, 12) == "exercise171-") {
            $newPath = str_replace('-', '/', $pathInfo);
            $requestInterface->setPathInfo($newPath);
            return $this->actionFactory->create('Magento\Framework\App\Action\Forward', ['request' => $requestInterface]);
        }
    }
}