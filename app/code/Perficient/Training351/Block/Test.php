<?php
namespace Perficient\Training351\Block;

class Test extends \Magento\Framework\View\Element\AbstractBlock {

    protected function _toHtml() {
        return "<h1>This text was inserted using _toHtml</h1>";
    }
}
