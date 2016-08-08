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

interface Filter
{
    const MUST = 0;
    const MUST_NOT = 1;
    const SHOULD = 2;

    public function filters() : array;

    public function must() : BaseFilter;

    public function mustNot() : BaseFilter;

    public function should() : BaseFilter;

    public function clear() : self;

    public static function null() : self;

    public function isNull() : bool;
}
