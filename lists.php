<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIST</title>
</head>
<body>
    MY students

    <div>

        <ul>
                <?php
            
                     $conn=mysqli_connect("localhost","root","","vtidatabase");
                     $sql="SELECT `name`, `age`, `phone` FROM `students` WHERE 1";

                     $exeC=mysqli_query($conn,$sql);
                     $count=mysqli_num_rows($exeC);

                     if ($count==0) {
                        echo "No people on list";
                     }else{

                        while ($row =mysqli_fetch_array($exeC)) {
                            $name=$row['name'];
                            $age=$row['age'];
                            $phone=$row['phone'];
                ?>

                     <li>  <?php echo  $name?> -- <?php echo  $age?> -- <?php echo  $phone?></li>

                     <?php }}?>
            
        </ul>
    </div>

</body>
</html>