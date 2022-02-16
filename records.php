<!DOCTYPE html>
<html lang="en">
<head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>record</title>
</head>
<body>
            <div class="header"><h1>History</h1></div>
            <div id="content">
                        <?php
                                    include 'connection.php';
                                    $sql="SELECT * FROM testpapers;";
                                    $query2 = mysqli_query($conn,$sql);
                                    while($res = mysqli_fetch_array($query2)){
                        ?>
                                    <form method="post">
                                                <div class="content-block">
                                                            <div class="content-header">
                                                                        <span id="datetime"><?php echo $res['examDate'];  ?></span>
                                                            </div>
                                                            <p class="content-middle">
                                                            <?php echo $res['testname'];  ?>
                                                            </p>
                                                            <input type="hidden" name="paper" value="<?php echo $res['testname'];?>">
                                                            <input type="submit" name="Details" value="Details"></input>
                                                </div>
                                                <input type="submit" name="delete" value="Delete" style="font-size:24px"></input>
                                    </form>
                                    <br><br>
                                    <?php
                                                if(isset($_POST['delete'])){
                                                            include 'connection.php';
                                                            $id=$res['id'];
                                                            $paper=$res['testname'];
                                                            $q="DROP TABLE $paper;";
                                                            $query=mysqli_query($conn,$q);
                                                            if ($query==TRUE) {
                                                                        $q1="DELETE FROM testpapers WHERE id=$id;";
                                                                        mysqli_query($conn,$q1);
                                                                        header("location:records.php");
                                                            }else{
                                                                        echo "error ".$query;
                                                            }
                                                }
                                                if(isset($_POST['Details'])){
                                                            session_start();
                                                            $_SESSION['paper'] = $res['testname'];
                                                            header("location:details.php?paper=".$res);
                                                }
                                    ?>
                                    <style>
                                    .content-block{
                                                position:relative;
                                                background-color:white;
                                                opacity:.7;
                                                padding:15px;
                                                margin-left:60px;
                                                border-left:3px solid #ddd;
                                                border-top:3px solid #48B1D9;
                                                border-right:1px solid #DDD;
                                                border-bottom:1px solid #DDD;
                                    }
                                    .content-header{
                                                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                                                font-weight: 900;
                                                font-size: 22px;
                                                margin:0 0 8px;
                                    }
                                    .user{
                                                font-weight:bolder;
                                    }
                                    .content-middle{
                                                font-size: 22px;
                                                font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
                                                font-weight:500;
                                                word-wrap:break-word !important;
                                                text-align:left !important;
                                    }
                                    .content-footer{
                                                font-size: 22px;
                                    }
                                    </style>
                        <?php
                                    }
                        ?>
            </div>
</body>
</html>