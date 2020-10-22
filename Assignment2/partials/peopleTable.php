<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap Style Sheets -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="./stylesheets/person.css">

</head>

<?php

require "C://xampp\CS612\hudsonthom\middleware/connect.php";
require "C://xampp\CS612\hudsonthom\middleware/query.php";


$con = getConnection();

$query = "SELECT * FROM person;";

$result = makeQuery($con, $query);

echo "<table class='peopleTable'>";

$fields = mysqli_fetch_fields($result);

echo "<tr class='tableHeaderRow'>";

foreach ($fields as $field) {

    echo "<th class='tableHeader'> $field->name </th>";
}

echo "</tr>";

while ( $line = mysqli_fetch_array( $result, MYSQLI_ASSOC ) ) {

    echo "<tr class='tableDataRow'>";

        foreach ($line as $field_value) {

            echo "<td class='tableData'>", "$field_value", "</td>";
        }

    echo "</tr>";
}

echo "</table>";

mysqli_close($con);

?>