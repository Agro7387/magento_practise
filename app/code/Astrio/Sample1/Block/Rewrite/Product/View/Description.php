<?php
 
namespace Astrio\Sample1\Block\Rewrite\Product\View;
 
class Description extends \Magento\Catalog\Block\Product\View\Description
{
    protected function _beforeToHtml()
    {
        $this->getProduct()->setData('description', 'TestDescription');
    }
}