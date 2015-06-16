<?php
namespace Perficient\Training233\Controller;

class NoRouteHandler implements \Magento\Framework\App\Router\NoRouteHandlerInterface {

    public function process(\Magento\Framework\App\RequestInterface $request) {
        $request->setModuleName('cms')->setControllerName('index')->setActionName('index');
    }
}
