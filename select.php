<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            table,th,td{
                border: 1px solid black;
                border-collapse: collapse;
            }
            #text{
                display: none;
            }
        </style>
        <script>
            function redirect(){
                window.location="Main.html";
            }
        </script>
        <style>
        #select{
        position: absolute;
        top:200px;
        left: 420px;
        }
        .bn{
            position: absolute;
            top:20px;
            left: 20px;
        }
        h2{
            padding-left: 400px;
        }
        #tb{
            position: absolute;
            left: 400px;
        }
        </style>
    </head>
    <body>
        <h3>Display Data </h3>
        <?php
                $x=0;
                require("connect.php");
                if(isset($_POST["submit"]))
                {
                   $nm=$_POST["name"];
                   $sql="select * from details where name='$nm'";
                }
                else if(isset($_POST["submit1"]) || $x==0)
                {
                    $sql="select * from details";
                }
                $res=$conn->query($sql);
                ?>
                <table id="tb">
                <tr>
                     <th>Name: </th>
                     <th>Ph No: </th>
                     <th>Email: </th>
                </tr>
                <?php 
                    while($row=$res->fetch_assoc()){
                ?>  
                    <tr>
                        <td><?php echo $row['name']?> </td>
                        <td><?php echo $row['phone']?> </td>
                        <td><?php echo $row['email']?> </td>
                    </tr> 
                <?php } ?>
                </table>
                <br>
        <form action="" method="post" id="select"> 
            Enter Name<input type="text" id="txt" name="name" class="form-control" style="width:320px;" placeholder="enter name">  <br>
            <input type="submit" name="submit" class="btn btn-info" value="Display"> <br><br>
            <input type="submit" name="submit1" class="btn btn-success" value="Display All">
        </form>
        <br>
        <input type="submit" value="Home" class="btn btn-primary bn" onclick="redirect()">
    </body>
</html>