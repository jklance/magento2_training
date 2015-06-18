<?php
namespace Perficient\Training541\Model;

class Products {

    private $_productRepositoryInterface;
    private $_searchCriteriaBuilder;
    private $_filterBuilder;
    private $_sortOrderBuilder;

    public function __construct(\Magento\Catalog\Api\ProductRepositoryInterface $productRepositoryInterface,
                                \Magento\Framework\Api\SearchCriteriaBuilder    $searchCriteriaBuilder,
                                \Magento\Framework\Api\FilterBuilder            $filterBuilder,
                                \Magento\Framework\Api\SortOrderBuilder         $sortOrderBuilder)
    {
        $this->_productRepositoryInterface  = $productRepositoryInterface;
        $this->_searchCriteriaBuilder       = $searchCriteriaBuilder;
        $this->_filterBuilder               = $filterBuilder;
        $this->_sortOrderBuilder            = $sortOrderBuilder;
    }

    public function getProducts() {
        $filters[] = $this->_filterBuilder
            ->setField('name')->setConditionType('like')->setValue('%short%')
        ->create();
        $this->_searchCriteriaBuilder->addFilter($filters);

        $filters[] = $this->_filterBuilder
            ->setField('price')->setConditionType('lt')->setValue('50')
        ->create();
        $this->_searchCriteriaBuilder->addFilter($filters);

        $sort = $this->_sortOrderBuilder
            ->setField('name')
            ->setDirection(\Magento\Framework\Api\SearchCriteriaInterface::SORT_DESC)
        ->create();
        $this->_searchCriteriaBuilder->addSortOrder($sort);

        $this->_searchCriteriaBuilder->setPageSize(6);
        $this->_searchCriteriaBuilder->setCurrentPage(1);

        $searchCriteria = $this->_searchCriteriaBuilder->create();
        $searchResults = $this->_productRepositoryInterface->getList($searchCriteria);

        return $searchResults->getItems();
    }

}