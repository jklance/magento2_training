<?php
namespace Perficient\Training541\Controller\Action;

class Index extends \Magento\Framework\App\Action\Action {

    public function execute() {
        $productConfig = $this->_objectManager->get('Perficient\Training541\Model\Products');
        $productList = $productConfig->getProducts();

        echo "<ol>";
        foreach ($productList as $product) {
            echo "<li>";
            echo $product->getPrice() . " - " . $product->getSku() . " - " . $product->getName();
            echo "</li>";
        }
        echo "</ol>";
    }
}