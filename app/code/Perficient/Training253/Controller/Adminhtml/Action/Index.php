<?php
namespace Perficient\Training253\Controller\Adminhtml\Action;

class Index extends \Magento\Backend\App\Action {

    public function execute()
    {
        $this->getResponse()->appendBody("You found the secret admin place...good for you!");
    }

    protected function _isAllowed()
    {
        $secret = $this->getRequest()->getParam('secret');
        return isset($secret) && (int)$secret==1;
    }
}