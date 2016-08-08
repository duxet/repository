<?php

/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 6/16/15
 * Time: 2:05 AM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace NilPortugues\Foundation\Domain\Model\Repository\Contracts;

/**
 * Class Repository.
 */
interface Repository
{
    /**
     * Returns the total amount of elements in the repository given the restrictions provided by the Filter object.
     */
    public function count(Filter $filter = null): int;

    /**
     * Returns whether an entity with the given id exists.
     */
    public function exists(string $id): bool;
}
