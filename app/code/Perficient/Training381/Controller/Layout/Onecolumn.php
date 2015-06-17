<?php
namespace Perficient\Training381\Controller\Layout;

class Onecolumn extends \Magento\Framework\App\Action\Action {

    private $_resultPage;

    public function __construct(\Magento\Framework\App\Action\Context $context,
                                \Magento\Framework\View\Result\Page $resultPage )
    {
        $this->_resultPage = $resultPage;
        parent::__construct($context);
    }

    public function execute() {

        $this->_resultPage->initLayout();
        return $this->_resultPage;
    }
}