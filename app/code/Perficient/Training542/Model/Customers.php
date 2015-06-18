<?php
namespace Perficient\Training542\Model;

class Customers {

    private $_customerRepositoryInterface;
    private $_searchCriteriaBuilder;
    private $_filterBuilder;
    private $_filterGroupBuilder;

    public function __construct(
        \Magento\Customer\Api\CustomerRepositoryInterface  $customerRepositoryInterface,
        \Magento\Framework\Api\SearchCriteriaBuilder       $searchCriteriaBuilder,
        \Magento\Framework\Api\Search\FilterGroupBuilder   $filterGroupBuilder,
        \Magento\Framework\Api\FilterBuilder               $filterBuilder
    ) {
        $this->_customerRepositoryInterface  = $customerRepositoryInterface;
        $this->_searchCriteriaBuilder        = $searchCriteriaBuilder;
        $this->_filterGroupBuilder           = $filterGroupBuilder;
        $this->_filterBuilder                = $filterBuilder;
    }

    public function getCustomers() {
        $this->_addCustomerFilters();

        $searchCriteria = $this->_searchCriteriaBuilder->create();
        $searchResults = $this->_customerRepositoryInterface->getList($searchCriteria);

        return $searchResults->getItems();
    }

    private function _addCustomerFilters() {
        $filter = $this->_filterBuilder
            ->setField('email')->setConditionType('like')->setValue('%mail.com%')
            ->create();
        $this->_filterGroupBuilder->addFilter($filter);

        $filter = $this->_filterBuilder
            ->setField('firstname')->setConditionType('like')->setValue('%Jer%')
            ->create();
        $this->_filterGroupBuilder->addFilter($filter);

        $filterGroup[] = $this->_filterGroupBuilder->create();
        $this->_searchCriteriaBuilder->setFilterGroups($filterGroup);
    }

}