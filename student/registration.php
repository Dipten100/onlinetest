<?php
            if(isset($_POST['Submit'])) {
                        submitted();
            }
            function submitted(){
                        include("connection.php");
                        $name=$_POST['name'];
                        $phoneNO=$_POST['Phno'];
                        $email=$_POST['eid'];
                        $pass=$_POST['passwd'];
                        $sql = "INSERT INTO registration (stuName,phNo,emailId,passwd) VALUES('$name','$phoneNO', 
                        '$email', '$pass')";
                        mysqli_query($conn, $sql);
                        $sql1="SELECT stuId,stuName FROM registration WHERE phNo='$phoneNO'";
                        $result = $conn->query($sql1);
                        if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                                $msg="id: " . $row["stuId"]. " - Name: " . $row["stuName"]." Save It For Further Use";
                                    }
                        }
                        echo "<script type='text/javascript'>alert('$msg');
                                    history.back();
                                    </script>";
            }
?>