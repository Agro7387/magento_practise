<?php

namespace Astrio\Sample1\Controller\TrainingFrontend;

use Magento\Framework\UrlInterface;


class Learning implements \Magento\Framework\App\ActionInterface
{
    protected $resultJsonFactory;
    protected $urlInterface;

    public function __construct(
        \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory,
        UrlInterface $urlInterface
        )
    {
        $this->resultJsonFactory = $resultJsonFactory;
        $this->urlInterface = $urlInterface;
    }

    public function execute()
    {
        $result = $this->resultJsonFactory->create();
        $data = [
            'message' => 'Learning Magento2 Controllers and routes',
            'url' =>  $this->urlInterface->getUrl('training_frontend/TrainingFrontend/learning')
        ];

        return $result->setData($data);
    }
}