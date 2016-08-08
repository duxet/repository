<?php

/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 10/01/16
 * Time: 18:13.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace NilPortugues\Foundation\Domain\Model\Repository\Contracts;

interface Fields
{
    public function __construct(array $fields = []);

    public function add(string $field);

    public function get(): array;

    public static function null() : self;

    public function isNull(): bool;
}
