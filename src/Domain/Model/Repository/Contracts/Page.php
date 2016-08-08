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

interface Page
{
    public function __construct(
        array $elements,
        $totalElements,
        $pageNumber,
        $totalPages,
        Sort $sort = null,
        Filter $filter = null,
        Fields $fields = null
    );

    /**
     * Returns the page content as an array.
     */
    public function content() : array;

    /**
     * Returns if there is a previous Page.
     */
    public function hasPrevious() : bool;

    /**
     * Returns whether the current Page is the first one.
     */
    public function isFirst() : bool;

    /**
     * Returns whether the current Page is the last one.
     */
    public function isLast() : bool;

    /**
     * Returns if there is a next Page.
     */
    public function hasNext() : bool;

    /**
     * Returns the size of the Page.
     */
    public function pageSize() : int;

    /**
     * Returns the number of the current Page.
     */
    public function pageNumber() : int;

    /**
     * Returns the number of total pages.
     */
    public function totalPages() : int;

    /**
     * Returns the Pageable to request the next Page.
     */
    public function nextPageable() : Pageable;

    /**
     * Returns the sorting parameters for the Page.
     */
    public function sortings() : Sort;

    public function filters() : Filter;

    /**
     * Returns the Pageable to request the previous Page.
     */
    public function previousPageable() : Pageable;

    /**
     * Returns the total amount of elements.
     */
    public function totalElements() : int;

    /**
     * Returns a new Page with the content of the current one mapped by the $converter callable.
     */
    public function map(callable $converter) : Page;

    public function fields() : Fields;
}
