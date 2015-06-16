<?php
/* This is used if the plugin is enabled in di.xml */

namespace Perficient\Training181\Model;

class Product {

    public function afterGetPrice(\Magento\Catalog\Model\Product $product, $result) {
        return 5.00;
    }
}