<?php

use App\MySQLQueryBuilder;

require('../vendor/autoload.php');

echo (new MySQLQueryBuilder())
    ->select(["id", "name", "email"])
    ->from("user")
    ->orWhere("phone", "LIKE", "+33%")
    ->where("email", "=", "jeandupont@mail.fr")
    ->orWhere("name", "=", "Jean")
    ->where("id", "=", "0")
    ->orWhere("lastname", "=", "dupont")
    ->build();