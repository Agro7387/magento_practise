<?php

namespace Astrio\Sample1\Controller\Product;

class Test implements \Magento\Framework\App\ActionInterface
{
    protected $resultJson;
    protected $urlInterface;

    public function __construct(
        \Magento\Framework\Controller\Result\Json $resultJson,
        \Magento\Framework\UrlInterface $urlInterface
        )
    {
        $this->resultJson = $resultJson;
        $this->urlInterface = $urlInterface;
    }

    public function execute()
    {
        $data = [
            'message' => 'Learning Magento2 Controllers and routes',
            'url' =>  $this->urlInterface->getUrl('catalog/product/test')
        ];

        return $this->resultJson->setData($data);
    }
}