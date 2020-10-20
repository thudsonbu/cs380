<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap Style Sheets -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">

</head>

<?php 

// Read boy names
$boyFile = fopen("C://CS380/boynames.txt", "r");

$boyNames = array();
$boyTotal = 0;

while(!feof($boyFile)) {

    $line = fgets($boyFile);

    $values = explode(" ", $line);

    if(isset($values[1])) {

        $name = $values[0];
        $count = $values[1];

        $boyNames += array($name => $count);
        $boyTotal += intval($count);
    }
}

fclose($boyFile);

// Read girl names file

$girlFile = fopen("C://CS380/girlnames.txt", "r");

$girlNames = array();
$girlTotal = 0;

while(!feof($girlFile)) {

    $line = fgets($girlFile);

    $values = explode(" ", $line);

    if(isset($values[1]))  {

        $name = $values[0];
        $count = $values[1];

        $girlNames += array( $name => $count );
        $girlTotal += intval($count);
    }
}

fclose($girlFile);

$commonBoyNames = array_intersect_key( $boyNames, $girlNames );

$commonGirlNames = array_intersect_key( $girlNames, $boyNames );

?>