<?php include "header.php"; ?>

<?php
$year = $_GET['year'];
?>

<h4>Sylhet Engineering College</h4>
<h5>Student information: <span class="key-color">
        <?php
        if ($year == 1)
            echo "First Year";
        else if ($year == 2)
            echo "Second Year";
        else if ($year == 3)
            echo "Third Year";
        else if ($year == 4)
            echo "Final Year";
        ?></span>
</h5>

<div class="col-md-12">
    <table class='table table-bordered table-responsive' id="data-table">
        <thead>
            <tr class="key-bg">
                <th>SL NO</th>
                <th>Roll</th>
                <th>Student Name</th>
                <th>Father Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Mobile No</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "select * from student_admission WHERE year='" . $year . "'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                foreach ($result as $key => $row) {
                    ?>
                    <tr>
                        <td> <?php echo $key + 1; ?></td>
                        <td> <?php echo $row["Roll"]; ?></td>
                        <td> <?php echo $row["student_name"]; ?></td>
                        <td> <?php echo $row["father_name"]; ?></td>
                        <td> <?php echo $row["address"]; ?></td>
                        <td> <?php echo $row["email"]; ?></td>
                        <td> <?php echo $row["mobile_no"]; ?></td>
                        <td><a class="btn btn-xs btn-primary" href="students_edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
                        <td><a class="btn btn-xs btn-danger" href="students_delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>

                    </tr>

                    <?php
                }
            }
            ?>
        </tbody>
    </table>


</div>
<script type="text/Javascript">
    $(document).ready(function () {
    $('#data-table').DataTable();
    });
</script>
<?php include "footer.php"; ?>

