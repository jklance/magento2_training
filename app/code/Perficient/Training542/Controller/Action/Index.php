<?php
namespace Perficient\Training542\Controller\Action;

class Index extends \Magento\Framework\App\Action\Action {

    public function execute() {
        $customerConfig = $this->_objectManager->get('Perficient\Training542\Model\Customers');
        $customerList = $customerConfig->getCustomers();

        echo "<ol>";
        foreach ($customerList as $customer) {
            echo "<li>";
            echo $customer->getFirstname() . " " . $customer->getLastname() . " - " . $customer->getEmail();
            echo "</li>";
        }
        echo "</ol>";
    }
}