<?php 
    require("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>DB Connect</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        function del(){
            document.getElementById("em").style.display="block";
        }
            function redirect(){
                window.location="Main.html";
            }
    </script>
</head>
<style>
    #insert{
        position: absolute;
        top:80px;
        left: 420px;
    }
</style>
<body>
<form id="insert" action="" method="post">
    <h1>User Form</h1>
    Enter Name<input type="text" name="name" placeholder="username" class="form-control" style="width:320px" required> <br>
    Enter Phone no<input type="text" name="phone" placeholder="phone no" class="form-control" style="width:320px" required> <br>
    Enter Email id<input type="email" name="email" placeholder="email" class="form-control" style="width:320px" required> <br>
    <input type="submit" name="submit" class="btn btn-info" value="insert">
</form>
<?php 
static $count=0;
if(isset($_POST["submit"]) && $count<5){
    $nm=$_POST["name"];
    $pn=$_POST["phone"];
    $em=$_POST["email"];
    $sql="insert into details(name,phone,email) values ('$nm','$pn','$em')";
    if(!$conn->query($sql))
        echo "<script>alert('Insert failed');</script>";
    else
       {
        echo "<script>alert('Data Inserted');</script>";
        $count++;
       } 
}
else if($count>4)
    {
        echo "<script>alert('More than 5 rows cannot be inserted');</script>";
    }
?>
<br>
        <input type="submit" value="Home" class="btn btn-success" onclick="redirect()">
</body>
</html>