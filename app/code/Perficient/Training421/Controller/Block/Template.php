<?php
namespace Perficient\Training421\Controller\Block;

class Template extends \Magento\Framework\App\Action\Action {
    public function execute() {
        $block = $this->_view->getLayout()->createBlock('Perficient\Training421\Block\Template');
        $block->setTemplate('test.phtml');
        $this->getResponse()->appendBody($block->toHtml());

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

        $this->getResponse()->appendBody($output);

    }
}