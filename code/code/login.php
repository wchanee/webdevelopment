<?php
session_start();
include("connection.php");
if(isset($_POST["submit"])) {
    
    $name=$_POST["name"];
    $password=$_POST["password"];
    $sql= "SELECT Uname,Upassword, Email, Tel, Address, Job, Profile, Gender, Nick, DOB, Edu, Fax, Company, ID FROM user_ WHERE Uname='$name' ";
    $sql2= "SELECT Uname,Upassword, Email, Tel, Address, Job, Profile, Gender, Nick, DOB, Edu, Fax, Company, ID FROM user_ WHERE Upassword='$password' ";
    $results= mysqli_query($conn,$sql);
    $results2= mysqli_query($conn,$sql2);
    if(mysqli_num_rows($results)>0 and mysqli_num_rows($results2)>0){
        $row = mysqli_fetch_array($results);
        $row2 = mysqli_fetch_array($results2);

        if ($row["Upassword"]==$row2["Upassword"]){

            $_SESSION['ID'] = $row["ID"];
            $_SESSION['name'] = $row["Uname"];
            $_SESSION['email'] = $row["Email"];
            $_SESSION['phone'] = $row["Tel"];
            $_SESSION['address'] = $row["Address"];
            $_SESSION['job'] = $row["Job"];
            $_SESSION['profile'] = $row["Profile"];
            $_SESSION['gender'] = $row["Gender"];
            $_SESSION['nickname'] = $row["Nick"];
            $_SESSION['birth'] = $row["DOB"];
            $_SESSION['edu'] = $row["Edu"];
            $_SESSION['fax'] = $row["Fax"];
            $_SESSION['company'] = $row["Company"];

            echo "<script> location.href='User_about.php'; </script>";
            exit;
        } 
        else 
        {
            echo '<script type="text/javascript"> window.onload=function(){alert("Incorrect Username or Password!");} </script>';
        }


    $name =$password ="" ;
}
}

?>

<!DOCTYPE html> 
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<style>

    .vid {
    position: fixed;
    right: 0;
    bottom: 0;
    width: 100%; 
    height: 100%;
    z-index: -2;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
    }
    
    .main {
        background-color: #F3EBE9;
        width: 400px;
        height: 400px;
        margin: 7em auto;
        border-radius: 1.5em;
        animation: arrive 500ms ease-in-out 0.1s forwards;
        box-shadow: 0px 11px 35px 2px black;
        opacity:50%;
    }
    
    .sign {
        text-align: center;
        padding-top: 40px;
        color: #C07B18;
        text-shadow: 2px 1px #F1D7A6;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        font-size: 23px;
    }
    
    .un {
        width: 76%;
        color: rgb(38, 50, 56);
        font-weight: 700;
        font-size: 14px;
        letter-spacing: 1px;
        background: rgba(136, 126, 126, 0.04);
        padding: 10px 20px;
        border: none;
        border-radius: 20px;
        outline: none;
        box-sizing: border-box;
        border: 2px solid rgba(0, 0, 0, 0.02);
        margin-bottom: 50px;
        margin-left: 46px;
        text-align: center;
        margin-bottom: 27px;
        font-family: Arial, Helvetica, sans-serif;
    }
    
    form.form1 {
        padding-top: 40px;
    }
    
    .pass {
        width: 76%;
        color: rgb(38, 50, 56);
        font-weight: 700;
        font-size: 14px;
        letter-spacing: 1px;
        background: rgba(136, 126, 126, 0.04);
        padding: 10px 20px;
        border: none;
        border-radius: 20px;
        outline: none;
        box-sizing: border-box;
        border: 2px solid rgba(0, 0, 0, 0.02);
        margin-bottom: 50px;
        margin-left: 46px;
        text-align: center;
        margin-bottom: 27px;
        font-family: Arial, Helvetica, sans-serif;
    }
    
   
    .un:focus, .pass:focus {
        border: 2px solid #B7882A !important;
        
    }


    
    .enter {
        font-weight:bold;
        cursor: pointer;
        border-radius: 5em;
        color: #FFFFFF;
        background: linear-gradient(to right,  #F0D971, #C1933E);
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 10px;
        padding-top: 10px;
        font-family: Arial, Helvetica, sans-serif;
        margin-left: 35%;
        font-size: 14px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.08);
    }
    
    .forgot {
        margin: 20px 0;
        font-size: 10px;
        color: #D4B03B;
        text-align: center;
    }

    .forgot a {
        text-align:right;
        color: #D4B03B;
        text-decoration: none;
    }

    .signup{
        text-align:center;
        color: #D4B03B;
        font-size: 10px;
    }
    
    .signup a {
        text-align:right;
        color: #D4B03B;
        text-decoration: none;
    }

    a:hover{
        color: #9B5B34;
        text-decoration: none;
            
    }

    @media (max-width: 700px) {
        .main {
            border-radius: 0px;
        } 
    }

    @media (min-aspect-ratio: 16/9) {
    #bgvideo {
        width: 100%;
        height: auto;
        }
    }

    @media (max-aspect-ratio: 16/9) {
    #bgvideo {
        width: auto;
        height: 200%;
        }
    }

    @keyframes arrive {
        0% {
            opacity: 0;
            transform: translate3d(0, 50px, 0);
        }
        
        100% {
            opacity: 1;
            transform: translate3d(0, 0, 0);
        }
    }
    
    </style>
</head>

<body>

<div class="vid">
    <video autoplay muted loop id="bgvideo">
    <source src="picture/bgvideo.mp4" type="video/mp4">
    </video>
</div>

<div class="main">

<p class="sign" text-align="center">Sign in</p><br>

<form action="login.php" method="post">
<form class="form1">


  <input class="un" type="text" placeholder="Username" name="name">

  <input class="pass" type="password"  placeholder="Password" name="password">

  <input type="submit" class="enter" value="Login" name="submit"><br><br>

  <p class="signup"><a href="signup.php"><b>Register</b></p>

  <p class="forgot"><a href="forgot.php"><b> Forgot your password? </b></p>
            
</div>
     
</body>

</html>