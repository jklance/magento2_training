<?php
namespace Perficient\Training254\Controller\Action;

class Index extends \Magento\Framework\App\Action\Action {

    public function execute() {
        $this->_redirect('catalog/category/view/id/4');  // Redirect to what's new!
    }
}