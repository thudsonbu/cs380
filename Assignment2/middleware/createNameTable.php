<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap Style Sheets -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">

    <style type='text/css'>

        /* Initial statement styles */
        .commonNames {
            font-style: italic;
            font-size: 1.3em;
            margin-bottom: 5vh;
        }

        /* Initial statement responsive styles */
        @media (max-width: 800px) {
            
            .commonNames {
                font-size: .8em;
                margin-bottom: 3vh;
            }
        }

        /* Table specific styles */
        .tableContainer {
            margin-top: 7vh;
            width: 100%;
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 2%;
            padding-bottom: 5%;
            margin-bottom: 5%;
        }

        .tableTitle {
            color: #000000;
            margin-bottom: 2%;
        }

        table, th, td {
            border: 1px solid #c3c3c3;
            border-radius: 5px;
        }

        .nameTable {
            width: 90%;
            font-size: 1.2em;
        }

        .tableHeaderRow {
            padding: 10px;
        }

        .tableHeader {
            padding: 10px;
            text-transform: uppercase;
        }

        .tableDataRow {
            padding: 10px;
        }

        .tableData {
            padding: 10px;
        }

        .girl {
            color: #f59fd7;
        }

        .boy {
            color: #064cd5;
        }

        .total {
            font-size: 1.5em;
        }


        /* Responsive table styles */
        @media (max-width: 1100px) {

            .nameTable {
                font-size: .8em;
            }

            .tableHeaderRow {
                padding: 5px;
            }
            
            .tableHeader {
                padding: 5px;
            }
            
            .tableDataRow {
                padding: 5px;
            }
            
            .tableData {
                padding: 5px;
            }
        }

        @media (max-width: 800px) {

            .nameTable {
                font-size: .5em;
            }

            .tableHeaderRow {
                padding: 2px;
            }
            
            .tableHeader {
                padding: 2px;
            }
            
            .tableDataRow {
                padding: 2px;
            }
            
            .tableData {
                padding: 2px;
            }
        }


        @media (max-width: 1400px) {

            .pageTitle {
                font-size: 8em;
            }
            
            .pageSubtitle {
                font-size: 4em;
            }
        }

        @media (max-width: 1100px) {

            .pageTitle {
                font-size: 7em;
            }

            .pageSubtitle {
                font-size: 3em;
            }
        }


        @media (max-width: 900px) {

            .pageTitle {
                font-size: 5em;
            }

            .pageSubtitle {
                font-size: 2em;
            }
        }

    </style>

</head>

<?php

// read names returns boy and girl names arrays as well as names in common
require "readNames.php";

// read and unpack boy names
$boysRead = readNames("C:/CS380/boynames.txt");
$boyNamesAsArr = $boysRead[0];
$boyTotal = $boysRead[1];

// read and unpack girl names
$girlsRead = readNames("C:/CS380/girlnames.txt");
$girlNamesAsArr = $girlsRead[0];
$girlTotal = $girlsRead[1];

$commonNames = array_intersect_key($boyNamesAsArr, $girlNamesAsArr);

$commonNameCount = sizeof($commonNames);

echo "<div class='commonNamesContainer'>";
    echo "<div class='commonNames'> There are <span class='nameCount'>$commonNameCount</span> common names. </div>";
echo "</div>";

// Begin table 
echo "<table class='nameTable'>";

// Table header
echo "<tr class='tableHeaderRow'>
        <th class='tableHeader'>
            Name
        </th>
        <th class='tableHeader boy'>
            Boy Count
        </th>
        <th class='tableHeader girl'>
            Girl Count
        </th>
    </tr>";

// Table rows
foreach($commonNames as $name => $count) {
    echo "<tr class='tableDataRow'>";
        echo "<td class='tableData'> $name </td>";
        echo "<td class='tableData boy'> $count </td>";
        echo "<td class='tableData girl'> $girlNamesAsArr[$name] </td>";
    echo "</tr>";
}

// Totals
echo "<tr class='tableTotalRow'>";
    echo "<td class='tableData total'> Total: </td>";
    echo "<td class='tableData boy total'> $boyTotal </td>";
    echo "<td class='tableData girl total'> $girlTotal </td>";
echo "</tr>";

// End Table
echo "</table>";

?>