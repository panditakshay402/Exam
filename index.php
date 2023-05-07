<?
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

?>