<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="main2.css">
</head>
<body>

    <div id = "text_data">
        <table id = "tab">
            <tr>
                <th colspan = 4>Informatics Club Membership</th>
            </tr>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Interests</th>
            </tr>
                <?php
                        include("main_class.php");
                        $MyCourses = new Club("localhost","A340User","Pass123Word", "info_club");
                        $MyCourses->DisplayMember();
                ?>
        </table>
    </div>    
  <!--  <hr style="width:50%; text-align:left; margin-left:0">  -->

  <script>
      var he = document.getElementById("tab").height;
      document.getElementById("tab").height = he;
  </script>    

</body>
</html>