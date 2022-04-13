<?php

namespace Astrio\Sample1\Block;

class LearningTemplate extends \Magento\Framework\View\Element\Template
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
    public function sayHello()
    {
        return __('Hello Magento2');
    }
}