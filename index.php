<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>welcome</h1>

    <form action="index.php" method="POST">
        <div>
            <label for="" > name</label> <br>
            <input  type="text" name="jina">
        </div>
        <div>
            <label for="">Age</label> <br>
            <input type="text" name="miaka">
        </div>
        <div>
            <label for="">Phone</label> <br>
            <input type="text" name="rununu">
        </div>
        <div>
            <button name="btnSave">Save</button> <br>
            <BUtton name="btnlist">SHOW LIST</BUtton>
        </div>
    </form>

    
</body>
</html>

<?php
    if(isset($_POST["btnSave"])){
        $conn=mysqli_connect("localhost","root","","vtidatabase");
        $name=$_POST['jina'];
        $age=$_POST['miaka'];
        $phone=$_POST['rununu'];
        $sql="INSERT INTO `students`(`name`, `age`, `phone`) VALUES ('$name','$age','$phone')";
        $sqlExcecute=mysqli_query($conn,$sql);

        if ($sqlExcecute) {
            echo "saved successfully";
        }else{
            echo "failed";
        }

    }

    if (isset($_POST["btnlist"])) {
        header('Location: lists.php');
    }




?>