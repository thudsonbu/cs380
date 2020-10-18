<?php

require "connect.php";

$query = "SELECT * FROM person;";

$result = mysqli_query($con, $query) or die('Query failed: ' . mysqli_errno($con));

echo "<table class='peopleTable'>";

$fields = mysqli_fetch_fields($result);

echo "<tr class='tableHeaderRow'>";

foreach ($fields as $field) {

    echo "<th class='tableHeaderData'> $field->name </th>";
}

echo "</tr>";

while ( $line = mysqli_fetch_array( $result, MYSQLI_ASSOC ) ) {

    echo "<tr class='tableRow'>";

        foreach ($line as $field_value) {

            echo "<td class='tableData'>", "$field_value", "</td>";
        }

    echo "</tr>";
}

echo "</table>";

mysqli_close($con);