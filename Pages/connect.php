<?php
            $con = mysqli_connect ('localhost', 'root', '', 'db_test');
            if (!$con){
                die("Database connection failed" .mysqli_error($con));
            }
        ?>