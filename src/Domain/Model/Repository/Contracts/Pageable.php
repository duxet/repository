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

interface Pageable
{
    public function __construct(
        $pageNumber,
        $pageSize,
        Sort $sort = null,
        Filter $filter = null,
        Fields $fields = null,
        Fields $distinctFields = null
    );

    public function offset() : int;

    public function pageNumber() : int;

    public function sortings() : Sort;

    public function next() : Pageable;

    public function pageSize() : int;

    public function previousOrFirst() : Pageable;

    public function hasPrevious() : bool;

    public function first() : Pageable;

    public function filters() : Filter;

    public function fields() : Fields;

    public function distinctFields() : Fields;
}
