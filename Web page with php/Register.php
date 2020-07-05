<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
<body>
    <div class = "register_main_div"><br>
        <center><h2 id ="reg_hedr">Become a Club Member</h2><br></center>
        <form  method="post" action="register1.php">
            <table>
                <tr>
                    <td><label for="fname">First Name:</label></td>
                    <td><input type="text" name="fname" style="margin-left: 80px"><br><br></td>
                </tr>
                <tr>
                    <td><label for="lname">Last Name:</label></td>
                    <td><input type="text" name="lname" style="margin-left: 80px"><br><br></td>
                </tr>
                <tr>
                    <td><label for="email">Your Email:</label></td>
                    <td><input type="text" name="email" style="margin-left: 80px"><br><br></td>
                </tr>
                <tr>
                    <td><label for="gender">Gender:</label></td>
                    <td><input type="radio"  name="gender" value="male" style="margin-left: 80px">
                        <label for="male">Male</label><br>
                        <input type="radio"  name="gender" value="female" style="margin-left: 80px">
                        <label for="female">Female</label><br><br><br></td>
                </tr>
                <tr >
                    <div class="box_title">
                        Check all that apply:
                    </div>
                    
                        <td><label for="Interested">Interested in:</label></td>
                        <td class ="td_label">
                            <div class = "inh_label">
                                <br><input type="checkbox" name="study[]" value="Pizza Party" style="margin-left: 120px">
                                <label for="study">Pizza Party</label><br>
                                <input type="checkbox" name="study[]" value="Joining Study Groups" style="margin-left: 120px">
                                <label for="study">Joining Study Groups</label><br>
                                <input type="checkbox" name="study[]" value="Visiting Employer Sites" style="margin-left: 120px">
                                <label for="study">Visiting Employer Sites</label><br>
                                <input type="checkbox" name="study[]" value="Participating in Programming Competitions" style="margin-left: 120px">
                                <label for="study">Participating in Programming Competitions</label><br>
                                <input type="checkbox" name="study[]" value="Building Games" style="margin-left: 120px">
                                <label for="study">Building Games</label><br>
                                <input type="checkbox" name="study[]" value="Becoming an Officer of the Club" style="margin-left: 120px">
                                <label for="study">Becoming an Officer of the Club</label><br><br>
                            </div> 
                        </td>
                </tr>
            </table>
            <input type="submit" class = "sub_btn" name="Signup" value = "Signup"><br><br><br><br><br>
        </form>
       
    </div>

    
</body>
</html>