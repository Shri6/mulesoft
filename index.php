<?php
    $server = "localhost";                    //server name
    $user = "root";                           //user name
    $password = "";                           //password is empty for sql
    $db = "db_movies";                              //type database name

    $conn = mysqli_connect($server,$user,$password,$db);    //connecting to database

    if(!$conn)                                //incase connection fails
    {
        echo "connection failed";       //exits the program
    }
    $sql = "INSERT INTO movie (name , actor , actress , director , year ) VALUES ('conjuring' , 'shri' , 'san' , 'raj mauli' , 2003),('maaya' , 'ramesh' , 'prema' , 'neel' , 2022),('kirik party' , 'rakshit' , 'rashmika' , 'prashanth' , 2010),('james' , 'punith' , 'trisha' , 'nelson' , 2022),('chichore' , 'sushanth' , 'shradda' , 'virappa' , 2001)";      

            $insert = mysqli_query($conn,$sql);                     
            echo '<script type="text/javascript">';
            echo 'alert("movies added successfully");';
            echo 'window.location.href="display.php";';
            echo "</script>";
?>
