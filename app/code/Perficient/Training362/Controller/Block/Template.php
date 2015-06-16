<?php
namespace Perficient\Training362\Controller\Block;

class Template extends \Magento\Framework\App\Action\Action {
    public function execute() {
        $block = $this->_view->getLayout()->createBlock('Perficient\Training362\Block\Template');
        $block->setTemplate('test.phtml');
        $this->getResponse()->appendBody($block->toHtml());
    }
}