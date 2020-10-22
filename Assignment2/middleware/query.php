<?php 

function makeQuery($con, $query){

    $result = null;

    try {
        $result = mysqli_query($con, $query);
    } catch(Exception $e) {
        echo "Querry Failed";
    }

    return $result;
}

?>