<!DOCTYPE html>
<html lang="en">
<head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>create</title>
</head>
<style>
            p{
                        text-align: center;
                        font-size: 48px;
                        color: black;
                        font-weight: 600;
                        padding-top: 2%;
            }
            div{
                        padding-top: 2%;
                        padding-left: 40%;
                        font-size: 32px;
                        background-color: greenyellow;
                        position: relative;
                        display: flexbox;
            }
            label{
                        font-size: 32px;
                        font-weight: 700;
                        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }
            input{
                        font-size: 28px;
            }
            button{
                        font-size: 24px;
                        background-color: green;
                        color: whitesmoke;
            }
</style>
<body>
            <p>Test Details</p>
            <div>
                        <form method="POST">
                                    <label>Enter test paper name</label><br>
                                    <input type="text" name="test"><br><br>
                                    <label>Enter Exam Date</label><br><br>
                                    <input type="date" name="date"><br><br><br>
                                    <label>Enter Exam Time </label><br><br>
                                    <input type="time" name="etime"><br><br><br>
                                    <label>Enter Exam Time Duration &nbsp;<span style="color:red"> *Please click AM</span> </label><br><br>
                                    <input type="time" name="time"><br><br><br>
                                    <button type="submit" name="create" value="Create">Create</button>
                        </form>
            </div>
</body>
<?php
            if(isset($_POST['create'])){
                        include 'connection.php';
                        $tablename=$_POST['test'];
                        $originalDate=$_POST['date'];
                        $newDate = date("Y-m-d", strtotime($originalDate));
                        $time=$_POST['time'];
                        $newTime=date("g:i:s",strtotime($time));
                        $etime=$_POST['etime'];
                        $examNewTime=date("H:i:s",strtotime($etime));
                        $sql="CREATE TABLE testpapers(
                                    id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                    testname VARCHAR(255),
                                    examDate date,
                                    examDuration time,
                                    examTime time
                        );";
                        if ($conn->query($sql) === TRUE) {
                                    $sql1="CREATE TABLE $tablename(
                                                id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                                question VARCHAR(255),
                                                option1 VARCHAR(255),
                                                option2 VARCHAR(255),
                                                option3 VARCHAR(255),
                                                option4 VARCHAR(255),
                                                answer VARCHAR(255)
                                    );";
                                    if($conn->query($sql1)==TRUE){
                                                $q="INSERT INTO testpapers (testname,examDate,examDuration,examTime) VALUES ('$tablename', '$newDate', '$newTime', '$examNewTime');";
                                                $query = mysqli_query($conn,$q);
                                                header("location:host.php");
                                    }else{
                                                echo "Error creating table: " . $conn->error;
                                                echo "Please change the table name";
                                    }
                        } else {
                                    $sql1="CREATE TABLE $tablename(
                                                id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                                question VARCHAR(255),
                                                option1 VARCHAR(255),
                                                option2 VARCHAR(255),
                                                option3 VARCHAR(255),
                                                option4 VARCHAR(255),
                                                answer VARCHAR(255)
                                    );";
                                    if($conn->query($sql1)==TRUE){
                                                $q="INSERT INTO testpapers (testname,examDate,examDuration) VALUES ('$tablename', '$newDate', '$time');";
                                                $query = mysqli_query($conn,$q);
                                                header("location:host.php");
                                    }else{
                                                echo "Error creating table: " . $conn->error;
                                                echo "Please change the table name";
                                    }
                        }
            }
            ?>
</html>