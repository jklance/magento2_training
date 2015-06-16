<?php
namespace Perficient\Training363\Block\Product\View;

class Description extends \Magento\Framework\View\Element\Template {

    public function beforeToHtml(\Magento\Catalog\Block\Product\View\Description $originalBlock) {
        $originalBlock->setTemplate('Perficient_Training363::description.phtml');
    }
}