<?php
namespace Perficient\Training441\Setup;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface {

    public function install(\Magento\Framework\Setup\SchemaSetupInterface $setup,
                            \Magento\Framework\Setup\ModuleContextInterface $context)
    {
        $setup->startSetup();

        $table = $setup->getConnection()
            ->newTable($setup->getTable('perficient_training441_entity'))
            ->addColumn('trainingId', \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER, null, array(
                'unsigned' => true,
                'primary'  => true,
                ), 'ID of the tuple')
            ->addColumn('data', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 255, array(
                'nullable' => true
                ), 'The actual data')
            ->addIndex($setup->getIdxName('perficient_training441_entity', array('trainingId')),
                array('trainingId'))
            ->setComment('Training table');

        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}