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

namespace Cozmot\CustomVariableApi\Model\Api;

use Cozmot\CustomVariableApi\Api\RaptorInterface;
use Cozmot\CustomVariableApi\Helper\Data;

class Raptor implements RaptorInterface
{
    private $helper;
    public function __construct(Data $helper)
     {
         $this->helper = $helper;
     }
    public function getCustomVariable($storeVariable)
    {
        if($storeVariable) {
            $data = $this->helper->getVariableValue($storeVariable);
            return $data;
        }else{
            $variableData = 'Enter Variable Value';
            return explode(',', $variableData);
        }
    }
}
