<?php
namespace Perficient\Training472\Setup;

class InstallData implements \Magento\Framework\Setup\InstallDataInterface {

    private $_eavSetupFactory;

    public function __construct(\Magento\Eav\Setup\EavSetupFactory $eavSetupFactory)
    {
        $this->_eavSetupFactory = $eavSetupFactory;
    }

    public function install(\Magento\Framework\Setup\ModuleDataSetupInterface $setup,
                            \Magento\Framework\Setup\ModuleContextInterface $context)
    {
        $eavSetup = $this->_eavSetupFactory->create(array('setup' => $setup));

        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'jers_review',
            [
                'type' => 'varchar',
                'backend' => 'text',
                'frontend' => '',
                'label' => 'Review by Jer',
                'input' => '',
                'class' => '',
                'source' => '',
                'global' => \Magento\Catalog\Model\Resource\Eav\Attribute::SCOPE_GLOBAL,
                'visible' => true,
                'required' => false,
                'user_defined' => false,
                'default' => 0,
                'searchable' => false,
                'filterable' => false,
                'comparable' => false,
                'visible_on_front' => true,
                'used_in_product_listing' => true,
                'unique' => false,
                'apply_to' => '',
            ]
        );


    }
}