<?php

namespace Astrio\Sample1\Controller\TrainingFrontend;

class Learning extends \Magento\Framework\App\Action\Action
{
    protected $resultJsonFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory)
    {
        $this->resultJsonFactory = $resultJsonFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $result = $this->resultJsonFactory->create();
        $data = [
            'message' => 'Learning Magento2 Controllers and routes',
            'place' => 'Storefront'
        ];

        return $result->setData($data);
    }
}