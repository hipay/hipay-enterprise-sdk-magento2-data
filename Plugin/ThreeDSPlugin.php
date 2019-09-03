<?php
/**
 * HiPay Fullservice Magento Data
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Apache 2.0 Licence
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * @author      HiPay <support.tpp@hipay.com>
 * @copyright   Copyright (c) 2019 - HiPay
 * @license     https://github.com/hipay/hipay-fullservice-sdk-magento2-data/blob/master/LICENSE.md
 * @link    https://github.com/hipay/hipay-fullservice-sdk-magento2-data
 */

namespace HiPay\FullserviceMagentoData\Plugin;

use \HiPay\FullserviceMagento\Model\Request\Order as Order;

/**
 * HiPay Plugin
 *
 * Used to customize threeDS data field
 *
 * @package HiPay\FullserviceMagentoData
 * @author      HiPay <support.tpp@hipay.com>
 * @copyright   Copyright (c) 2019 - HiPay
 * @license     https://github.com/hipay/hipay-fullservice-sdk-magento2-data/blob/master/LICENSE.md
 * @link    https://github.com/hipay/hipay-fullservice-sdk-magento2-data
 */
class ThreeDSPlugin
{

    /**
     * @param \HiPay\FullserviceMagento\Model\Request\Order $orderFormatter
     * @param \HiPay\Fullservice\Gateway\Request\Order\OrderRequest $orderRequest
     */
    public function afterMapRequest(Order $orderFormatter, $orderRequest)
    {

        return $orderRequest;
    }
}
