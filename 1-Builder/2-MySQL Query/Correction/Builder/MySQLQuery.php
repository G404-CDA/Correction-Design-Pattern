<?php 

namespace App\Builder;

use App\Builder\Interfaces\QueryBuilderInterface;

class MySQLQuery implements QueryBuilderInterface
{

    private array $query;

    public function select(string $table, array $fields): QueryBuilderInterface
    {
        $this->query['select'] = 'SELECT ' . implode(', ', $fields) . ' FROM ' . $table;
        return $this;
    }

    public function where(string $field, string $value, string $operator = '='): QueryBuilderInterface
    {
        $this->query['where'] = 'WHERE ' . $field . ' ' . $operator . ' ' . $value;
        return $this;
    }

    public function limit(int $start, int $offset): QueryBuilderInterface
    {
        $this->query['limit'] = 'LIMIT ' . $start . ', ' . $offset;
        return $this;
    }

    public function get(): string
    {
        return implode(' ', $this->query);
    }

    public function reset(): void
    {
        $this->query = [];
    }

}