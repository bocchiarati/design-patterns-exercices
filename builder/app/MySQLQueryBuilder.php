<?php

namespace App;
class MySQLQueryBuilder implements QueryBuilderInterface {

    private string $table;
    private array $fields = ['*'];
    private array $conditions = [];

    public function from(string $table): self
    {
        $this->table = $table;
        return $this;
    }

    public function select(array $field): self
    {
        $this->fields = $field;
        return $this;
    }

    public function where(string $field, $operator, $value): self
    {
        $this->conditions[] = "$field $operator $value";
        return $this;
    }


    public function orWhere(string $field , $operator, $value): self
    {
        $this->conditions[] = ["OR", "$field $operator $value"];
        return $this;
    }

    public function build(): string
    {
        $query = 'SELECT ' . implode(', ', $this->fields);
        $query .= ' FROM ' . $this->table;
        if (count($this->conditions) > 0) {
            $query .= ' WHERE ';
            foreach($this->conditions as $condition) {
                if(is_array($condition)) {
                    if($condition === $this->conditions[0]) {
                        $query .= $condition[1];
                    } else {
                        $query .= ' ' . $condition[0] . ' ' . $condition[1];
                    }
                } else {
                    if ($condition === $this->conditions) {
                        $query .= $condition;
                    } else {
                        $query .= ' AND ' . $condition;
                    }
                }
            }
        }
        return $query;
    }

}