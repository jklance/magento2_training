<?php
namespace Perficient\Training473\Setup;

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
            'jer_approved',
            [
                'type' => 'varchar',
                'label' => 'Jer Approved?',
                'global' => \Magento\Catalog\Model\Resource\Eav\Attribute::SCOPE_GLOBAL,
                'visible' => true,
                'required' => false,
                'user_defined' => false,
                'searchable' => false,
                'filterable' => false,
                'comparable' => false,
                'visible_on_front' => true,
                'unique' => false,
                'apply_to' => '',
                'used_in_product_listing' => true,

                'backend' => '\Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
                'input' => 'multiselect',
                'option' => array (
                    'value' => array(
                        'yes' => array('Yes'),
                        'no' => array('No'),
                    )
                ),
            ]
        );

    }
}