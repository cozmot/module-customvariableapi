<?php
/**
 * Cozmot
 *
 * NOTICE OF LICENSE
 * This source file is subject to the cozmot.com license that is
 * available through the world-wide-web at this URL:
 * https://cozmot.com/end-user-license-agreement
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Commerce
 * @package     Module
 * @copyright   Copyright (c) Cozmot (https://cozmot.com/)
 * @license     https://cozmot.com/end-user-license-agreement
 *
 */

namespace Cozmot\CustomVariableApi\Helper;

use Magento\Customer\Model\Session as CustomerSession;
use Magento\Framework\Json\EncoderInterface;
use Magento\Framework\View\LayoutFactory;
/**
 * Class Data
 * @package Cozmot\CustomVariableApi\Helper
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    protected $variable;

    /**
     * Data constructor.
     * @param \Magento\Framework\App\Helper\Context $context
     * @param CustomerSession $customerSession
     * @param LayoutFactory $layoutFactory
     * @param EncoderInterface $jsonEncoder
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Variable\Model\Variable $variable
    ) {
        parent::__construct($context);
        $this->variable = $variable;
    }
    public function getVariableValue($storeVariable) {
        $variableData = $this->variable->loadByCode($storeVariable);
        if($variableData->getPlainValue()) {
            $response = explode(',', $variableData->getPlainValue());
            return $response;
        }else{
            $variableData = 'Variable does not exist';
            return explode(',', $variableData);
        }
    }
}
