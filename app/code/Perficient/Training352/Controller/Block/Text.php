<?php
namespace Perficient\Training352\Controller\Block;

class Text extends \Magento\Framework\App\Action\Action {

    public function execute() {
        $block = $this->_view->getLayout()->createBlock('Magento\Framework\View\Element\Text');
        $block->setText("Text added via a block");
        $this->getResponse()->appendBody($block->toHtml());
}
}