<?php

$conn=mysqli_connect("localhost","root","","student");

if(!$conn)
{
    die("connection failed".mysqli_connect_error());
}


if(isset($_POST['insert']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $age=$_POST['age'];

    $sql="INSERT INTO student(id,name,age) VALUE ('$id','$name','$age')";

    if(mysqli_query($conn,$sql))
    {
        echo("success");
    }
    else
    {
        echo("failed".mysqli_error($conn));
    }
}

if(isset($_POST['update']))
{
$id=$_POST['id'];
$name=$_POST['name'];
$age=$_POST['age'];

$sql="UPDATE Student SET name='$name',age='$age' WHERE id='$id'";

if(mysqli_query($conn,$sql))
{
    echo("success update");
}else{
    echo("failed updaet".mysqli_error($conn));
}
}


if(isset($_POST['delete']))

{
$id=$_POST['id'];
$name=$_POST['name'];
$age=$_POST['age'];

$sql="DELETE FROM student WHERE id='$id'";

if(mysqli_query($conn,$sql))
{
    echo("deleted");

}
else{
    echo("fail delete".mysqli_error($conn));
}
}


if(isset($conn,$sql))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $age=$_POST['age'];

    $sql="SELECT * FROM student "

}



?>