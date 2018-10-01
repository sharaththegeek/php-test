<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            #del{
                position: absolute;
                top: 120px;
                left: 250px;
            }
            h2{
                padding-left: 280px;
                padding-top: 40px;
            }
            .bn{
                position: absolute;
                top:10px;
            }
        </style>
        <script>
            function redirect(){
                window.location="Main.html";
            }
        </script>
    </head>
    <body>
        <h3>Delete Records: </h3>
        <form id="del" action="" method="post">
            Enter email:<input type="email" name="email" class="form-control" style="width:320px;" placeholder="email id"> <br>
            <input type="submit" name="del" class="btn btn-success" value="Delete"> 
        </form>
        <?php
            require("connect.php");
            if(isset($_POST["del"])){
                $em=$_POST["email"];
                $sql="delete from details where email='$em'";
                $res=$conn->query($sql);
                if($res)
                    echo "<script>alert('Record Deleted');</script>";
                else
                    echo "<script>alert('Record not found');</script>";
                }
        ?>
        <br>
        <input type="submit" value="Home" class="btn btn-info bn" onclick="redirect()">
    </body>
</html>