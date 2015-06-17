<?php
namespace Perficient\Training441\Setup;

class UpgradeData implements \Magento\Framework\Setup\UpgradeDataInterface {

    public function upgrade(\Magento\Framework\Setup\ModuleDataSetupInterface $setup,
                            \Magento\Framework\Setup\ModuleContextInterface $context)
    {
        $setup->startSetup();

        $setup->getConnection()->beginTransaction()->insert(
            'perficient_training441_entity', array(
                'trainingId' => 1,
                'data'       => 'this is data',
                'lastUpdated'   => '2015-06-17 11:36:00',
            )
        );

        $setup->getConnection()->commit();

        $setup->endSetup();
    }
}