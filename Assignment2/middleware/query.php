<?php 

function makeQuery($con, $query){

    $fields = null;

    try {
        $result = mysqli_query($con, $query);

        $fields = mysqli_fetch_fields($result);

    } catch(Exception $e) {
        echo "Querry Failed";
    }

    return $fields;
}

?>