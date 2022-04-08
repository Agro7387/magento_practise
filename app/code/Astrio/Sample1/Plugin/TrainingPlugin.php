<?php

namespace Astrio\Sample1\Plugin;

use Magento\Framework\App\Config\ScopeConfigInterface;

class TrainingPlugin
{
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface;
     */
    public $scopeConfig;
    public $is_increace;
    public $allowance;

    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
    {
        $checkAllowence = $this->checkAllowance();
        if ($checkAllowence) {
            $allowance = $this->getAllowance();
            $result += $allowance;
        }
        return $result;
    }

    public function getAllowance()
    {
        return $this->scopeConfig->getValue('astrio_sample/price_settings/price_allowance', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);;
    }

    public function checkAllowance()
    {
        return $this->scopeConfig->getValue('astrio_sample/price_settings/price_allowance_yesno', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);;
    }
}