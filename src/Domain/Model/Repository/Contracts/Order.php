<?php

/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 6/01/16
 * Time: 18:25.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace NilPortugues\Foundation\Domain\Model\Repository\Contracts;

interface Order
{
    const ASCENDING = 'ASC';
    const DESCENDING = 'DESC';

    public function isDescending() : bool;

    public function isAscending() : bool;

    public function direction() : string;

    public function __toString() : string;

    /**
     * Compares the current object with a second object.
     * It will compare its type and and its properties values.
     */
    public function equals(Order $object) : bool;

    /**
     * Creates a null Value Object.
     */
    public static function null() : self;

    public function isNull() : bool;
}
