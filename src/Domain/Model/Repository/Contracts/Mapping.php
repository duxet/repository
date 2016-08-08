<?php

/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 7/02/16
 * Time: 17:01.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace NilPortugues\Foundation\Domain\Model\Repository\Contracts;

interface Mapping
{
    /**
     * Returns the name of the collection or table.
     */
    public function name() : string;

    /**
     * Keys are object properties without property defined in identity().
     * Values its equivalents in the data store.
     */
    public function map() : array;

    /**
     * Name of the identity field in storage.
     */
    public function identity() : string;

    /**
     * @param array $data
     */
    public function fromArray(array $data);

    /**
     * The automatic generated strategy used will be the data-store's if set to true.
     */
    public function autoGenerateId() : bool;
}
