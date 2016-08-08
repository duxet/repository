<?php

/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 6/01/16
 * Time: 18:37.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace NilPortugues\Foundation\Domain\Model\Repository\Contracts;

interface Sort
{
    /**
     * Creates a new Sort instance using the given Order.
     */
    public function __construct(array $properties = [], Order $order = null);

    /**
     * Returns a new Sort consisting of the orders of the current Sort combined with the given ones.
     */
    public function andSort(Sort $sort) : Sort;

    public function orders() : array;

    public function equals(Sort $sort) : bool;

    /**
     * Returns the order registered for the given property.
     */
    public function orderFor(string $propertyName) : Order;

    public function setOrderFor(string $propertyName, Order $order);

    /**
     * @throws \InvalidArgumentException
     */
    public function property(string $propertyName) : Order;

    /**
     * Creates a null Value Object.
     */
    public static function null() : self;

    public function isNull() : bool;
}
