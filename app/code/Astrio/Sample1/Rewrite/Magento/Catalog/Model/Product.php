<?php

namespace Astrio\Sample1\Rewrite\Magento\Catalog\Model;

class Product extends \Magento\Catalog\Model\Product
{
    public function getName()
    {
        return 'test';
    }
}