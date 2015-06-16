<?php
namespace Perficient\Training252\Controller\Product;

class View extends \Magento\Framework\App\Action\Action {
    public function execute() {
        //echo "This happens instead of the page load!";
    }
    public function beforeExecute() {
        //echo "BEFORE<BR>"; exit;
    }
    public function afterExecute(\Magento\Catalog\Controller\Product\View $controller, $result) {
       // echo "AFTER"; exit;
    }
}
