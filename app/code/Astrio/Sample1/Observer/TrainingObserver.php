<?php

namespace Astrio\Sample1\Observer;

use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class TrainingObserver implements ObserverInterface
{
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;

    /**
     * @param \Magento\Captcha\Model\ResourceModel\LogFactory $resLogFactory
     */
    public function __construct(
        LoggerInterface $logger
    ) {
        $this->logger = $logger;
    }

    /**
     * Reset Attempts For Frontend
     *
     * @param \Magento\Framework\Event\Observer $observer
     * @return path info
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $request = $observer->getData('request');
        $path = $request->getPathInfo();
        return $this->logger->info($path);
    }
}
