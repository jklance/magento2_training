<?php
namespace Perficient\Training231\App;

class FrontController extends \Magento\Framework\App\FrontController {

    private $_logger = null;
    protected $_routerList = null;

    public function __construct(\Magento\Framework\App\RouterList $routerList, \PSR\Log\LoggerInterface $logger) {
        $this->_logger = $logger;
        $this->_routerList = $routerList;
    }

    public function dispatch(\Magento\Framework\App\RequestInterface $requestInterface) {
        $output = ">>>>>> Router List \n";
        foreach ($this->_routerList as $router) {
            $output .= get_class($router) . "\n";
        }
        $output .= "\n Router List <<<<<<";

        $this->_logger->info($output);

        return parent::dispatch($requestInterface);
    }
}