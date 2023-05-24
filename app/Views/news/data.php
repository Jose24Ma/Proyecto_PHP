<?php

$db = \Config\Database::connect();

$query   = $db->query('SELECT id, body, slug, title FROM news');
$results = $query->getResult();

foreach ($results as $row) {
    echo $row->id;
    echo $row->body;
    echo $row->slug;
    echo $row->title;
}

echo 'Total Results: ' . count($results);