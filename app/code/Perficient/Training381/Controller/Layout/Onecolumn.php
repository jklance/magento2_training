<?php
namespace Perficient\Training381\Controller\Layout;

class Onecolumn extends \Magento\Framework\App\Action\Action {

    private $_resultPage;
    private $_model;
    private $_collection;

    public function __construct(\Magento\Framework\App\Action\Context $context,
                                \Magento\Framework\View\Result\Page $resultPage )
    {
        $this->_resultPage = $resultPage;
        parent::__construct($context);
    }

    public function execute() {
        // Add a model & resource
        $this->_model = $this->_objectManager->get('Magento\Catalog\Model\Product');
        $this->_model->load(2045);
        $output = $this->_model->getSku() . "<br />";

        // Add a collection
        $this->_collection = $this->_objectManager->create('Magento\Cms\Model\Resource\Block\Collection');
        $this->_collection->addOrder('title', \Magento\Cms\Model\Resource\Block\Collection::SORT_ORDER_ASC);
        $this->_collection->addFieldToFilter('title', array('like' => '%left%'));

        foreach ($this->_collection as $cmsBlock) {
            $output .= $cmsBlock->getTitle() . "<br />";
        }

        $this->_resultPage->initLayout();
        $this->getResponse()->appendBody($output);
        return $this->_resultPage;
    }
}