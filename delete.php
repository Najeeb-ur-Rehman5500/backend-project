<?php
   include 'conn.php';

    // checking if id got or not
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        // delete query
        $delete_query = "DELETE FROM mytable WHERE id = $id ";

        // checking is query executed or not
        if($conn->query($delete_query)===TRUE){
            echo "records deleted";
        } else {
            print "there is an deleting records";
        }

    } else {
        print " id not provided ";
    }

    $conn->close();
    // after record deleted It will redirect back to my original location which is day3.php
    header("Location: day3.php");
    exit();

?>