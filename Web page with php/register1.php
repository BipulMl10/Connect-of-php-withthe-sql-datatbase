<?php
session_start();
?>
<?php
        include("main_class.php");
        $MyCourses = new Club("localhost","A340User","Pass123Word", "info_club");

        $cnt = 0;
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        
        $study = $_POST['study'];
        $MyCourses->ProcessRegistrationForm($fname,$lname,$email,$gender,$study);
        
        $_SESSION['fname']=$fname;
        $_SESSION['lname']=$lname;
        
		header("Location:cnf.php");
?>