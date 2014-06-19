<?php

/**
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014 Elcodi.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author Aldo Chiecchia <zimage@tiscali.it>
 */

namespace Elcodi\CouponBundle\Entity\Interfaces;

use Elcodi\CoreBundle\Entity\Interfaces\DateTimeInterface;
use Elcodi\CoreBundle\Entity\Interfaces\EnabledInterface;
use Elcodi\CurrencyBundle\Entity\Interfaces\MoneyInterface;

/**
 * CouponInterface
 */
interface CouponInterface extends DateTimeInterface, EnabledInterface
{
    /**
     * Set code
     *
     * @param string $code Code
     *
     * @return CouponInterface self Object
     */
    public function setCode($code);

    /**
     * Get code
     *
     * @return string Code
     */
    public function getCode();

    /**
     * Set name coupon name
     *
     * @param string $name
     *
     * @return CouponInterface self Object
     */
    public function setName($name);

    /**
     * Get name
     *
     * @return string
     */
    public function getName();

    /**
     * Set type
     *
     * @param int $type Type
     *
     * @return CouponInterface self Object
     */
    public function setType($type);

    /**
     * Get type
     *
     * @return int Type
     */
    public function getType();

    /**
     * Sets Enforcement
     *
     * @param int $enforcement Enforcement
     *
     * @return CouponInterface Self object
     */
    public function setEnforcement($enforcement);

    /**
     * Get Enforcement
     *
     * @return int Enforcement
     */
    public function getEnforcement();

    /**
     * Set price
     *
     * @param MoneyInterface $amount Price
     *
     * @return CouponInterface self Object
     */
    public function setPrice(MoneyInterface $amount);

    /**
     * Get price
     *
     * @return MoneyInterface Price
     */
    public function getPrice();

    /**
     * Set discount
     *
     * @param int $discount Discount
     *
     * @return CouponInterface self Object
     */
    public function setDiscount($discount);

    /**
     * Get discount
     *
     * @return int discount
     */
    public function getDiscount();

    /**
     * Set absolute price
     *
     * @param MoneyInterface $amount Absolute Price
     *
     * @return CouponInterface self Object
     */
    public function setAbsolutePrice(MoneyInterface $amount);

    /**
     * Get absolute price
     *
     * @return MoneyInterface Absolute Price
     */
    public function getAbsolutePrice();

    /**
     * Set count
     *
     * @param integer $count
     *
     * @return CouponInterface self Object
     */
    public function setCount($count);

    /**
     * Get count
     *
     * @return integer
     */
    public function getCount();

    /**
     * Set used
     *
     * @param integer $used
     *
     * @return CouponInterface self Object
     */
    public function setUsed($used);

    /**
     * Get used
     *
     * @return integer Number this coupon has been used
     */
    public function getUsed();

    /**
     * Set priority
     *
     * @param integer $priority
     *
     * @return CouponInterface self Object
     */
    public function setPriority($priority);

    /**
     * Get priority
     *
     * @return integer Number this coupon has been priority
     */
    public function getPriority();

    /**
     * Set the minimum purchase amount that enables this coupon
     *
     * @param float $minimumPurchaseAmount
     *
     * @return CouponInterface self Object
     */
    public function setMinimumPurchaseAmount($minimumPurchaseAmount);

    /**
     * Get the minimum purchase amount that enabled this coupon
     *
     * @return float
     */
    public function getMinimumPurchaseAmount();

    /**
     * Increment used variable by one, and disables it if there are no more
     * available units
     *
     * @return CouponInterface self Object
     */
    public function incrementUsages();
}
