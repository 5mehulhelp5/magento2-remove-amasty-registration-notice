<?php
/**
 * Copyright (c) 2025. Volodymyr Hryvinskyi. All rights reserved.
 * Author: Volodymyr Hryvinskyi <volodymyr@hryvinskyi.com>
 * GitHub: https://github.com/hryvinskyi
 */

declare(strict_types=1);

namespace Hryvinskyi\RemoveAmastyRegistrationNotice\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class LicenseRegistration implements ArgumentInterface
{
    /**
     * This is used to remove the Amasty registration notice
     *
     * @return array|null
     */
    public function getMessage(): null|array
    {
        return null;
    }
}