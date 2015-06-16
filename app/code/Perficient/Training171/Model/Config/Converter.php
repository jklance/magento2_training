<?php
namespace Perficient\Training171\Model\Config;

class Converter implements \Magento\Framework\Config\ConverterInterface {

    public function convert($source)
    {
        $output = [];

        foreach ($source->getElementsByTagName('mynode') as $node) {
            $output[] = $node->textContent;
        }

        return $output;
    }
}