<?php

namespace Astrio\Sample1\Controller\Adminhtml\TrainingAdmin;

class LearningAdmin extends \Magento\Backend\App\Action
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
            'place' => 'Admin panel'
        ];

        return $result->setData($data);
    }
}