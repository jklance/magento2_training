<?php
namespace Perficient\Training171\Model\Config;

class SchemaLocator implements \Magento\Framework\Config\SchemaLocatorInterface {

    protected $_schema = null;
    protected $_perFileSchema = null;

    public function __construct(\Magento\Framework\Module\Dir\Reader $moduleReader)
    {
        $etcDir = $moduleReader->getModuleDir('etc', 'Perficient_Training171');
        $this->_schema = $etcDir . '/test.xsd';
        $this->_perFileSchema = $etcDir . '/test.xsd';
    }

    public function getSchema()
    {
        return $this->_schema;
    }

    public function getPerFileSchema()
    {
        return $this->_perFileSchema;
    }
}
