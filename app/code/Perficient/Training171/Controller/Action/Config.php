<?php
namespace Perficient\Training171\Controller\Action;

class Config extends \Magento\Framework\App\Action\Action {
    public function execute() {
        $testConfig = $this->_objectManager->get('Perficient\Training171\Model\Config\ConfigInterface');
        $myNodeInfo = $testConfig->getMyNodeInfo();

        if (is_array($myNodeInfo)) {
            foreach($myNodeInfo as $str) { $this->getResponse()->appendBody($str . "<br />");
            }
        }
    }
}