<?php
$books = [
    [
        'title' => 'Book Title 1',
        'author' => 'Author Name 1',
        'year_of_publication' => 2001
    ],
    [
        'title' => 'Book Title 2',
        'author' => 'Author Name 2',
        'year_of_publication' => 2002
    ],
    [
        'title' => 'Book Title 3',
        'author' => 'Author Name 3',
        'year_of_publication' => 2003
    ],
     [
        'title' => 'Book Title 4',
        'author' => 'Author Name 4',
        'year_of_publication' => 2004
    ],
];

$books_serialized = serialize($books);
$file = 'book_data.json';
$current = file_get_contents($file);
$current .= "$books_serialized";
file_put_contents($file, $current);

// now read the file

$read_books = file_get_contents($file);
$new_array_de = unserialize($read_books);

echo "<pre>";
var_dump($new_array_de);
echo "</pre>";