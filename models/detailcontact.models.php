<?php

       if (isset($_GET['pageno'])) {
           $pageno = $_GET['pageno'];
       } else {
           $pageno = 1;
       }

       $no_of_records_per_page = 5;
       $offset = ($pageno-1) * $no_of_records_per_page;

      require '../models/db.php';

       $total_pages_sql = "SELECT COUNT(*) FROM societe";
       $result = mysqli_query($conn,$total_pages_sql);
       $total_rows = mysqli_fetch_array($result)[0];
       $total_pages = ceil($total_rows / $no_of_records_per_page);

       $sql = "SELECT * FROM societe LIMIT $offset, $no_of_records_per_page";
       $res_data = mysqli_query($conn,$sql);
      // var_dump($res_data);

       while($row = mysqli_fetch_array($res_data)){
           //here goes the data
           //var_dump($row);
           echo $row['name'];
       }
       mysqli_close($conn);

   ?>
