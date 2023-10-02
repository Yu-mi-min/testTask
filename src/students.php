<?php

function findStudents(): array | bool
{
    $connection = connectToDB();
    $query = $connection->prepare('SELECT * FROM `students`');
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC) ?: false;
}
