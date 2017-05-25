<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\TestFramework\Config;

/**
 * Config validation state interface.
 */
interface ValidationStateInterface
{
    /**
     * Retrieve current validation state
     *
     * @return boolean
     */
    public function isValidationRequired();
}
