<?php include "header.php";?>
<?php
if (htmlspecialchars($_SERVER['REQUEST_METHOD']) == 'POST') {
    $student_name = htmlspecialchars(trim($_POST['student_name']));
    $father_name = htmlspecialchars($_POST['father_name']);
    $mother_name = htmlspecialchars($_POST['mother_name']);
    $address = htmlspecialchars($_POST['address']);
    $email = htmlspecialchars($_POST['email']);
    $hsc_year = htmlspecialchars($_POST['hsc_year']);
    $hsc_roll = htmlspecialchars($_POST['hsc_roll']);
    $ssc_year = htmlspecialchars($_POST['ssc_year']);
    $ssc_roll = htmlspecialchars($_POST['ssc_roll']);
    $mobile_no = htmlspecialchars($_POST['mobile_no']);
    $sub_choice = htmlspecialchars($_POST['sub_choice']);
    $gender = htmlspecialchars($_POST['gender']);
    $Roll = htmlspecialchars($_POST['Roll']);
    $year= htmlspecialchars($_POST['year']);
    $sql = "insert into student_admission(student_name,father_name,mother_name,address,email,hsc_year,hsc_roll,ssc_year,ssc_roll,mobile_no,sub_choice,gender,Roll,year) "
            . " values('$student_name','$father_name','$mother_name','$address','$email','$hsc_year','$hsc_roll','$ssc_year','$ssc_roll','$mobile_no','$sub_choice','$gender','$Roll','$year')";

    $result = mysqli_query($conn, $sql);
  
    if ($result) {
        ?>
        <script xmlns="http://www.w3.org/1999/html"> alert("Data Insertion Successful")</script>
        <?php
    } else {
        ?>
        <script> alert("Error in Data Insertion")</script>
        <?php
    }
}
?>



            <div class="first_part" >


                <h5>Addmission form</h5>
                <p>Sec ac.bd@gmail.com</p>
                <p>Mobile:0173387938</p>

            </div>
            <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="form-group">
                    <label class="col-md-2">Sutdent Name:</label>
                    <div class="col-md-8">
                        <input name="student_name" type="text" class="form-control col-md-6" placeholder="Name" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Fathers' name:</label>
                    <div class="col-md-8">
                        <input name="father_name" type="text" class="form-control col-md-6" placeholder="Fathers' name" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Mothers' name:</label>
                    <div class="col-md-8">
                        <input  name="mother_name" type="text" class="form-control col-md-6" placeholder="Mothers' name" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Address:</label>
                    <div class="col-md-8">
                        <input  name="address" type="text" class="form-control col-md-6" placeholder="Your address" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Email:</label>
                    <div class="col-md-8">
                        <input   name="email" type="text" class="form-control col-md-6" placeholder="Email" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">HSC Year:</label>
                    <div class="col-md-4">
                        <select name="hsc_year" class="form-control" >
                            <option value="2016" selected="selected">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">HSC Roll:</label>
                    <div class='col-md-4'>
                        <input  name="hsc_roll" type="text" class="form-control" placeholder="Enter Roll Number " >
                    </div>

                </div>
                <div class="form-group">
                    <label class="col-md-2">SSC Year:</label>
                    <div class="col-md-4">
                        <select name="ssc_year" class="form-control" >
                            <option value="2016" selected="selected">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">SSC Roll:</label>
                    <div class='col-md-4'>
                        <input  name="ssc_roll" type="text" class="form-control" placeholder="Enter Roll Number " >
                    </div>

                </div>
                <div class="form-group">
                    <label class="col-md-2">Mobile Number:</label>
                    <div class='col-md-4'>
                        <input  name="mobile_no" type="text" class="form-control" placeholder="Enter Number " >
                    </div>

                </div>
                <div class="form-group">
                    <label class="col-md-2">Select Subject:</label>
                    <div class="col-md-6">
                        <select name="sub_choice" class="form-control" >
                            <option value="1" selected="selected">Computer Science and Engineering</option>
                            <option value="2">Civil Engineering</option>
                            <option value="3">Electric and Electronics Engineering</option>

                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Gender Select:</label>
                    <div class="col-md-3">
                        <input type="radio" name="gender"  value="male" checked="">  Male <br>
                        <input type="radio" name="gender" value="female" >  Female <br>
                        <input type="radio" name="gender" value="other" >  Other
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Roll</label>
                    <div class="col-md-3">
                        <input type="number" class="form-control" name="Roll">
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
                <div class="form-group">
                    <label class="col-md-2"></label>
                    <div class="col-md-3">
                        <!--<input class="btn btn-success" type="submit" value="Submit">-->
                        <button class="btn btn-success" type="submit">Submit</button>  
                    </div>
                </div>

            </form>



<?php
include "footer.php";
?>