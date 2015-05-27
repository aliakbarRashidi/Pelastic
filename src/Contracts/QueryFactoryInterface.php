<?php namespace Quince\Pelastic\Contracts;

use Quince\Pelastic\Contracts\Queries\QueryInterface;
use Quince\Pelastic\StaticQueryFactory;

interface QueryFactoryInterface {

    /**
     * Creates the factory object of the given class with given arguments
     *
     * @param string $class
     * @param array  $args
     * @return QueryInterface
     */
    public function createFromClass($class, array $args = []);

    /**
     * Creates factory objects from keywords
     *
     * @param string $what
     * @param array  $args
     * @return QueryInterface
     */
    public function create($what, array $args = []);

}
