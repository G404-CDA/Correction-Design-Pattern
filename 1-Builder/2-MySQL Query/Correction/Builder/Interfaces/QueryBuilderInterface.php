<?php 

namespace App\Builder\Interfaces;

/*TODO*/

interface QueryBuilderInterface
{
    public function select(string $table, array $fields): QueryBuilderInterface;
    public function where(string $field, string $value, string $operator = '='): QueryBuilderInterface;
    public function limit(int $start, int $offset): QueryBuilderInterface;
    public function get(): string;
    public function reset(): void;
}