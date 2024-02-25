<?php
session_start();
if(!isset($_SESSION["uname"]))
{
    header("Location:index.php");  
}
?>
<html>
    <head>
        <style>
        body{
            margin: 0px;
        }
        header {
            background-color: rgb(69, 33, 8);
            color: white;
            text-align: center;
            padding: 10px;
        }
        .div1
        {
            margin: 0;
            padding:20px;
            height:560px;
            background-color: rgb(198, 137, 137);
            float: left;
            width: 20%;
        }
        
        .div2 
        {
            margin: 0;
            padding: 20px;
            height:560px;
            background-color:  pink;
            float: right;
            width: 74.5%;
            
        }
        </style>
    </head>
    <body>
        <header>
        <h2><b>STUDENT</b><br>Welcome to <?php  echo $_SESSION["uname"];  ?></h2>
        <form action="Student.php" method="post">
            <input type="submit" name="logout" value="logout">
        </form>
        </header>
        <div class="div1"></div>
        <div class="div2"></div>
    </body>
</html>
<?php
    if(isset($_POST["logout"])){
        session_destroy();
        header("Location: index.php");
    }
?>