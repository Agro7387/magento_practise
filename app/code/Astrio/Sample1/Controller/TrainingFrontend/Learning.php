<?php

namespace Astrio\Sample1\Controller\TrainingFrontend;

use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;

class Learning extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;

    public function __construct(
        Context $context,
        PageFactory $pageFactory
        )
    {
        parent::__construct($context);
        $this->_pageFactory = $pageFactory;
    }

    public function execute()
    {
        return $this->_pageFactory->create();
    }
}