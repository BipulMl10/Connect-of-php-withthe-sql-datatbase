<?php

    class Club 
    {
     
        private $HostName;
        private $UserID;
        private $Password;
        private $DBName;
        private $Con; 

        public function __construct($host = NULL,$uid = NULL,$pw = NULL,$db = NULL)
        {
            $this->Con = mysqli_connect($host, $uid, $pw, $db);
        }
        
        public function __destruct()
        {
            mysqli_close($this->Con);
        }

        
        public function DisplayMember()
        {
            
            $sql = "SELECT `FirstName`,`LastName`,`Email`,`Gender` FROM member;";
            $result = mysqli_query($this->Con,$sql);

            if ($result->num_rows > 0) 
                {

                    while($row = $result->fetch_assoc()) 
                    {
                        ?><tr><?php
                        ?><td><?php echo ($row["FirstName"]." ".$row["LastName"]);?></td><?php
                        ?><td><?php echo ($row["Email"]);?></td><?php
                        ?><td><?php echo ($row["Gender"]);?></td><?php

                        $eml = $row["Email"];
                        $sql1 = "SELECT  `InterestDescription` FROM `interest_type` IT 
                                JOIN `member_interests` MI
                                ON IT.InterestID = MI.InterestID
                                WHERE MI.email = '$eml';";

                        $result1 = mysqli_query($this->Con,$sql1);
                        if ($result1->num_rows > 0) 
                        {
                            ?><td><ul><?php
                            while($row1 = $result1->fetch_assoc()) 
                            {
                                ?><li><?php echo ($row1["InterestDescription"]);?></li><?php    
                            }
                            ?></ul></td><?php
                        }

                        ?></tr><?php
                    }
                } 
                else
                {
                    ?><tr><td colspan = 4> NO Record Found</td></tr><?php
                }
        }

        public function Displayabout()
        {
            header("Location:cnf.php");
        }
        
        public function DisplayRegistrationForm()
        {
            header("Location:About_us.html");
        }

        public function ProcessRegistrationForm($fname,$lname,$email,$gender,$study1)
        {
            $stud = 0;
            $sql = "INSERT INTO member
                    (`Email`, `FirstName`, `LastName`, `Gender`, `MemberSince`)
                    VALUES
                    ('$email', '$fname', '$lname', '$gender', date('Y-m-d')); ";
            $result = mysqli_query($this->Con,$sql);

            foreach($study1 as $study)
            {
                $study = trim($study);
                echo ($study);

                $sql = "SELECT `InterestID` FROM `interest_type` WHERE `InterestDescription` = '$study';";
                echo ("sql ".$sql);
                $result = mysqli_query($this->Con,$sql);
                if ($result->num_rows > 0) 
                {
                    echo ("loop begin"."<br>");
                    while($row = $result->fetch_assoc()) 
                    {
                        echo ("while begin"."<br>");

                        echo $row["InterestID"]. "<br>";
                        $stud  = $row["InterestID"];
                        echo ($stud. "<br>");
                        $sql = "INSERT INTO `member_interests` (`Email`,`InterestID`) VALUES ('$email',$stud);";
                        echo ($sql. "<br>");
                        $result = mysqli_query($this->Con,$sql);
                        echo ("Inserted"."<br>");
                        break;
                    }
                } 
                else 
                {
                      echo "0 results";
                }
            }

            echo ("donefun");
        }
        
        private function Get_Memebers_From_DB()
        {
            $sql = "SELECT `FirstName`,`LastName`,`Email`,`Gender` FROM member;";
            $result = mysqli_query($this->Con,$sql);
        }
        
        private function Get_Memebers_Interests_From_DB($MemberEmail)
        {
            $sql1 = "SELECT  `InterestDescription` FROM `interest_type` IT 
                                JOIN `member_interests` MI
                                ON IT.InterestID = MI.InterestID
                                WHERE MI.email = '$MemberEmail';";

            $result1 = mysqli_query($this->Con,$sql1);
        }
        
        private function Get_Memebers_Interests_Type_From_DB()
        {
            $sql1 = "SELECT  `InterestID`,`InterestDescription` FROM `interest_type`;";
            $result1 = mysqli_query($this->Con,$sql1);
        }
       
    }	
?>
