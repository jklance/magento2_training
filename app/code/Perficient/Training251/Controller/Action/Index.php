<?php
namespace Perficient\Training251\Controller\Action;

class Index extends \Magento\Framework\App\Action\Action {

    public function execute() {
        $response = $this->getResponse();
        $response->appendBody("Hello World");
    }
}