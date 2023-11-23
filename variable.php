<?php
$book = [['PHP 8', 'D. K. Academy', '04-01-2022 г.', '490', '25BGN'], ['asd']];
function showBook($book) {
$table = "<table>";
$table .= "<tr>";
$table .= "<th>Заглавие</th>";
$table .= "<th>Автор</th>";
$table .= "<th>Година</th>";
$table .= "<th>Страници</th>";
$table .= "<th>Цена</th>";
$table .= "</tr>";
foreach ($book as $row) { 
   $table .= "<tr>";
    foreach ($row as $single) {
        $table .= "<td>$single</td>";
    }
    $table .= "</tr>";
}
$table .= "</table>";

return $table;
}
echo showBook($book);





