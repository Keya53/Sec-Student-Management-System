<?php include "header.php"; ?>

<?php
//Get Edited value and edit
if (htmlspecialchars($_SERVER['REQUEST_METHOD']) == 'POST') {
    $student_name = htmlspecialchars(trim($_POST['student_name']));
    $year = htmlspecialchars($_POST['year']);
    $id = htmlspecialchars($_POST['id']);
//    Update Code
    $sql = "UPDATE student_admission SET `year` = '" . $year . "' WHERE id ='" . $id . "' ";
    $result = $conn->query($sql);

    if ($result) {
        ?>
        <script xmlns="http://www.w3.org/1999/html"> alert("Data Updated Successful")</script>
        <?php
    } else {
        ?>
        <script> alert("Error in Data Update")</script>
        <?php
    }
}
?>
<!--//End Edit-->
<!--//Select Value by id-->
<?php
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    $sql = "select * from student_admission WHERE id='" . $id . "' Limit 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        ?>
        <form class="form-horizontal"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <?php
            foreach ($result as $key => $row) {
                ?>


            <div class="form-group">
                <label class="col-md-2">Sutdent Name:</label>
                <div class="col-md-8">
                    <input name="student_name" value="<?php echo $row['student_name']; ?>" type="text"
                           class="form-control col-md-6" placeholder="Name" readonly>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2">Year</label>
                <div class="col-md-3">
                    <select name="year" class="form-control">
                        <option value="1">First Year</option>
                        <option value="2">Second Year</option>
                        <option value="3">Third Year</option>
                        <option value="4">Fourth Year</option>
                    </select>
                </div>
            </div>
            <!-- hidden field-->
            <input name="id" id="id" type="hidden" value="<?php echo $id; ?>">
                <?php
            }
            ?>

            <div class="form-group">
                <label class="col-md-2"></label>
                <div class="col-md-3">
                    <!--<input class="btn btn-success" type="submit" value="Submit">-->
                    <button class="btn btn-success" type="submit">Update</button>
                </div>
            </div>

    </form>

    <?php
}
?>


<?php
include "footer.php";
?>