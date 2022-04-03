<?php

namespace Astrio\Sample1\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\HTTP\PhpEnvironment\Request;
use Psr\Log\LoggerInterface;

class TrainingObserver implements ObserverInterface
{
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;

    /**
     * @var \Magento\Framework\HTTP\PhpEnvironment\Request
     */
    private $request;

    /**
     * @param \Magento\Captcha\Model\ResourceModel\LogFactory $resLogFactory
     */
    public function __construct(
        LoggerInterface $logger,
        Request $request
    ) {
        $this->request = $request;
        $this->logger = $logger;
    }

    /**
     * Reset Attempts For Frontend
     *
     * @param \Magento\Framework\Event\Observer $observer
     * @return \Magento\Captcha\Observer\ResetAttemptForFrontendObserver
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $path = $this->request->getPathInfo();
        return $this->logger->info($path);
    }
}
