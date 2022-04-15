<?php

namespace Astrio\Sample1\Block;

class LearningBlock extends \Magento\Framework\View\Element\AbstractBlock
{
    protected $_url;

	public function __construct(
        \Magento\Framework\View\Element\Template\Context $context
        )
	{
		parent::__construct($context);
	}

    /**
     * render block Html
     * 
     * @return string
     */
    protected function _toHtml()
    {
        return __('method _toHtml');
    }
}