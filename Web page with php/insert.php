<?php
        $fname = "<fname>".$_POST['fname']."</fname>\n";

        echo($fname);

        $lname = "<lname>".$_POST['lname']."</lname>\n";
        
        echo($lname);

        $email = "<email>".$_POST['email']."</email>\n";
        echo($email );
		
		$gender = "<gender>".$_POST['gender']."</gender>\n";
		
        $file=fopen("Assign4_Membership.txt", "a+");
        fwrite($file, $fname);
        fwrite($file, $lname);
        fwrite($file, $email);
		fwrite($file, $gender);
		fwrite($file,"<study>");
		foreach($_POST['study'] as $study){
			
			fwrite($file, $study.",");
			
		}
		fwrite($file,"</study>");
		fclose($file);
        
		header("Location:Register.php");
?>