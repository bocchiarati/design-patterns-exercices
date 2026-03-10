<?php

# TODO: Créer une classe QueryBuilder en utilisant le design pattern Builder

namespace App;

interface QueryBuilderInterface {
    public function from(string $table): self;
    public function select(array $field): self;
    public function where(string $field, $operator, $value): self;
    public function orWhere(string $field, $operator, $value): self;
    public function build(): string;
}