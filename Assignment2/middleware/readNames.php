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

function readNames($fileName) {

    $openFile = fopen($fileName, "r") or die("Unable to open $fileName");

    $namesArray = array();
    $countTotal = 0;

    while(!feof($openFile)) {

        $line = fgets($openFile);

        $values = explode(" ", $line);

        if(isset($values[1])) {

            $namesArray += array($values[0] => $values[1]);
            $countTotal += intval($values[1]);
        }
    }

    fclose($openFile);

    return array($namesArray, $countTotal);
}

?>