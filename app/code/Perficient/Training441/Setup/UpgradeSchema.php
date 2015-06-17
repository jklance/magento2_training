<?php
namespace Perficient\Training441\Setup;

class UpgradeSchema implements \Magento\Framework\Setup\UpgradeSchemaInterface {

    public function upgrade(\Magento\Framework\Setup\SchemaSetupInterface $setup,
                            \Magento\Framework\Setup\ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '0.0.2') < 0) {
            $this->upgrade002($setup);
        }



        $setup->endSetup();
    }

    private function upgrade002(\Magento\Framework\Setup\SchemaSetupInterface $setup)
    {
        $newTable = array(
            'type'      => \Magento\Framework\DB\Ddl\Table::TYPE_DATETIME,
            'length'    => null,
            'nullable'  => false,
            'comment'   => 'Date of last update',
        );

        $setup->getConnection()->addColumn('perficient_training441_entity', 'lastUpdated', $newTable);
    }
}