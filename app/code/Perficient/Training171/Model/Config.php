<?php
namespace Perficient\Training171\Model;

class Config extends \Magento\Framework\Config\Data implements \Perficient\Training171\Model\Config\ConfigInterface
{
    public function __construct( \Perficient\Training171\Model\Config\Reader $reader,
                                 \Magento\Framework\Config\CacheInterface $cache,
                                 $cacheId = 'perficient_training171_config')
    {
        parent::__construct($reader, $cache, $cacheId);
    }

    public function getMyNodeInfo() {
        return $this->get();
    }
}
