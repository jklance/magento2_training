<?php
namespace Perficient\Training353\Block\Product\View;

class Description extends \Magento\Framework\View\Element\Template {

    public function beforeToHtml(\Magento\Catalog\Block\Product\View\Description $originalBlock) {
        $originalBlock->getProduct()->setDescription('This is a new description for the product');
    }
}