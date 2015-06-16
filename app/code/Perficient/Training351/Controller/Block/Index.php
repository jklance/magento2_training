<?php
namespace Perficient\Training351\Controller\Block;

class Index extends \Magento\Framework\App\Action\Action {

    public function execute() {
        $layout = $this->_view->getLayout();
        $block = $layout->createBlock('Perficient\Training351\Block\Test');
        $this->getResponse()->appendBody($block->toHtml());
    }
}