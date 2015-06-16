<?php
/* This is used if the preference is enabled in di.xml */

namespace Perficient\Training181\Model;

class Pricefixer extends \Magento\Catalog\Model\Product {

    public function getPrice() {
        return 5.00;
    }
}