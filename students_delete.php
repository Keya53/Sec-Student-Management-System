<?php include "header.php"; ?>

<html>
<head>
   
   
</head>
<body>
<div class="container">
  
    <?php
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    $sql = "  delete from student_admission WHERE id='" . $id . "' Limit 1";
   // $id = $_GET['id'];
     $result = $conn->query($sql);
    if ($result) {
        ?>
        <script> alert("Data deleted Successfully");
           // window.location = "view_question.php";
            //        header("Location: view_question.php");
        </script>
        <?php

    } else {
        ?>
        <script> alert("Error in Data delete")</script>
        <?php

    }
    ?>
   
</div>
</body>
</html>
