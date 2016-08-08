<?php

/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 6/15/15
 * Time: 11:06 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace NilPortugues\Foundation\Domain\Model\Repository\Contracts;

interface ReadRepository extends Repository
{
    /**
     * Retrieves an entity by its id.
     */
    public function find(string $id, Fields $fields = null);

    /**
     * Returns all instances of the type.
     */
    public function findBy(Filter $filter = null, Sort $sort = null, Fields $fields = null): array;

    /**
     * Returns all instances of the type meeting $distinctFields values.
     */
    public function findByDistinct(Fields $distinctFields, Filter $filter = null, Sort $sort = null): array;
}
