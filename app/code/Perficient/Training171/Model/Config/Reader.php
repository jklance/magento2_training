<?php
namespace Perficient\Training171\Model\Config;

class Reader extends \Magento\Framework\Config\Reader\Filesystem {

    protected $_idAttributes = [];

    public function __construct( \Magento\Framework\Config\FileResolverInterface $fileResolver,
                                 \Perficient\Training171\Model\Config\Converter $converter,
                                 \Perficient\Training171\Model\Config\SchemaLocator $schemaLocator,
                                 \Magento\Framework\Config\ValidationStateInterface $validationState,
                                 $fileName = 'test.xml',
                                 $idAttributes = [],
                                 $domDocumentClass = 'Magento\Framework\Config\Dom',
                                 $defaultScope = 'global'
    ){
        parent::__construct(
            $fileResolver,
            $converter,
            $schemaLocator,
            $validationState,
            $fileName,
            $idAttributes,
            $domDocumentClass,
            $defaultScope
        ); }
}