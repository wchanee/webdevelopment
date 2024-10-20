<!DOCTYPE html>
    <html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

        *{
            padding:0;
            margin:0;
        }

        body{
            background: #e7d9bc;
        }

        #navbar {
            overflow: hidden;
            background-color: #C99738;
            padding: 40px 10px;
            transition: 0.4s;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 99;
        }

        #navbar a {
            float: left;
            color: white;
            text-align: center;
            padding: 14px;
            text-decoration: none;
            font-size: 21px; 
            line-height: 25px;
            border-radius: 8px;
        }

        #navbar #logo {
            font-size: 35px;
            font-weight: bold;
            transition: 0.4s;
        }

        #navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        #navbar a.active {
            background-color: dodgerblue;
            color: white;
        }

        #navbar-right {
            float: right;
        }

        .flex-container {
            display: flex;
            flex-direction: column;
        }
        
        .card {
            background-color: #e7d9bc; 
            width: 100%;
            padding: 0px;
            line-height:72vh;
            margin:0px;
            flex-wrap: nowrap;
            flex-direction: row;
            justify-content: center;
        }

        .card-cardtion {
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: normal;
            font-size: 1.6rem;
            line-height: 1.3;
            margin: 90px;
        }

        .card-container {
            display: flex;
            margin: 50px;
            width: 100%;
        }

        .card-profile {
            width: 400px;
            height: 280px;
            background: linear-gradient(to right, #FFA500, #e5c063);
            text-align: center;
            color: black;
            padding: 40px;
            border-radius: 10px;
            margin-left: auto;
        }

        .card-picture img{
            height:300px;
            width:300px;
            margin-top: -10px;
            border-radius: 15px;
        }

        .card-contact {
            background: linear-gradient(to right, #fbf6e9, #fdfaf4);
            height: 350px;
            width: 600px;
            border-radius: 10px;
            text-align: left;
            color: black;
            padding: 5px;
            margin-right:auto; 
        }

        table {
            border-collapse: seperate;
            border-spacing: 10px;
            width: 600px;
            height: auto;
            margin-left:10px;
        }

        img{
            width:25px;
        }

        .search {
            background: #e7d9bc;
        }

        .search table {
            width: 250px;
            margin-left: 1150px;
            margin-top:200px;
        }

        .search input {
            width: 200px;
            height: 30px;
            border-radius: 20px;
        }

        .search input:hover {
            background: rgba(207, 198, 168, 0.918);
            box-shadow: 4px 4px rgba(212, 130, 92, 0.952);
        }

        .search button:hover {
            box-shadow: 4px 4px rgba(212, 130, 92, 0.952);
        }
        

        @media screen and (max-width: 1000px) {
            .card-container {
                display: flex;
                flex-direction: column;
            }

            .card-profile {
                height: 280px;
                width: 500px;
                margin-left:-5%;
            }

            .card-contact {
               margin-left:-5%;
               height: 400px;
               width: 570px;
            }

            table {
                border-collapse: seperate;
                border-spacing: 10px;
                width: 550px;
                height: auto;
                margin-left:10px;
            }

            .search {
                margin-top: 260px;
                margin-left:-700px;
            }
            
        }

         @media screen and (max-width: 580px) {
            #navbar {
                padding: 20px 10px !important;
                }

            #navbar a {
                float: none;
                display: block;
                text-align: left;
                }

            #navbar-right {
                float: none;
                }
        }
        
        .foot {
            background-color:#2F2F2F;
            box-sizing: border-box;
            width: 100%;
            text-align: left;
            font: bold 16px sans-serif;
            padding: 50px 50px 60px 50px;
        }

        .foot .footer-left,
        .foot .footer-center,
        .foot .footer-right {
            display: inline-block;
            vertical-align: top;
        }

        .foot .footer-left {
            width: 30%;
        }

        .foot .footer-left img {
            width: 50%;
            margin-left: 10px;
        }

        .foot .footer-links{
            color:  #ffffff;
            margin: 20px 0 12px;
        }
        
        .foot .footer-links a{
            display:inline-block;
            line-height: 1.8;
            text-decoration: none;
            color:  inherit;
        }

        .foot .footer-company-name{
            color:  #8f9296;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
        }

        .foot .footer-center{
            width: 35%;
        }
        
        .foot .footer-center .emoji{
            background-color:  #33383b;
            color: #ffffff;
            font-size: 25px;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            text-align: center;
            line-height: 42px;
            margin: 10px 15px;
            vertical-align: middle;
            margin-top:30px;
        }
        
        .foot .footer-center p{
            display: inline-block;
            color: #ffffff;
            vertical-align: middle;
            margin-top:30px;
        }
        
        .foot .footer-center p span{
            display:block;
            font-weight: normal;
            font-size:14px;
            line-height:2;
        }
        
        .foot .footer-center p a{
            color:  white;
            text-decoration: none;;
        }

        .foot .footer-right{
            width: 30%;
            margin-top: 30px;
        }
        
        .foot .footer-company-about{
            line-height: 20px;
            color:  #92999f;
            font-size: 13px;
            font-weight: normal;
            margin: 0;
        }
        
        .foot .footer-company-about span{
            display: block;
            color:  #ffffff;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        
        .foot .footer-icons{
            margin-top: 25px;
        }
        
        .foot .footer-icons a img{
            display: inline-block;
            width: 35px;
            height: 35px;
            cursor: pointer;
            background-color:  #33383b;
            border-radius: 2px;
            font-size: 20px;
            color: #ffffff;
            text-align: center;
            line-height: 35px;
            margin-right: 3px;
            margin-bottom: 5px;
        }
        
    </style>

    <div id="navbar">
        <a href="" id="logo">KAWEIEE <br> UNIVERSITY</a>
            <div id="navbar-right">
                <br>
                <a href="Admin_home.php">HOME</a>
                <a href="Admin_about.php">ABOUT US</a>
                <a href="Admin_event.php">NEWS & EVENTS</a>
                <a href="Admin_contact.php">CONTACT</a>
                <a href="Admin_approve.php">APPROVE</a>
                <a href="home.php">LOG OUT</a>
                </div>
        </div>
    </head>
    <script>
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("navbar").style.padding = "10px 10px";
        document.getElementById("logo").style.fontSize = "25px";
        } else {
        document.getElementById("navbar").style.padding = "40px 10px";
        document.getElementById("logo").style.fontSize = "30px";
        }
        }
    </script>

    <body>

    
        <form action="Admin_search.php" method="POST" class="search" >
            <table>
                <tr>
                    <td><input type="text" name="name" placeholder="  Search Name..."></td>
                    <td><button type="submit" name="search"><img src= "picture/search.png"></td>
                </tr>
            </table>
        </form>
    
    
<?php

include("connection.php"); 

$sql = "SELECT ID, Uname, Email, Tel, Upassword, Address, Job, Profile FROM user_";

$results = mysqli_query($conn, $sql);

if (mysqli_num_rows($results) > 0) {
    
    while($row = mysqli_fetch_array($results)) {
        $id= $row["ID"];
        $name= $row["Uname"];
        $email= $row["Email"];
        $phone= $row["Tel"];
        $address= $row["Address"];
        $job= $row["Job"];
        $profile= $row["Profile"];

    ?>      

    <div class="flex-container">
            <div class="card">
              <div class="card-cardtion">
                  <div class="card-container">
                    <div class="card-profile">
                      <p class="card-picture"><img src= 'profile/<?= $profile ?>'></p>   
                    </div>
                    <div class="card-contact">
                    <form action="Admin_contactedit.php" method="POST">

                        <table>

                        <tr>
                            <td colspan=5></td>
                            <td><a href="Admin_contactedit.php?edit=<?= $id?>"><img src="picture/edit.png" name="edit"></a></td>
                            <td><a href="Admin_delete.php?delete=<?= $id?>"><img src="picture/delete.png" name="delete"></a></td>
                        </tr>

                        <tr>
                            <td>ID: </td>
                            <td><?= $id ?></td>
                        </tr>

                        <tr>
                            <td>Name: </td>
                            <td><?= $name ?></td>
                        </tr>

                        <tr>
                            <td>Email: </td>
                            <td><?= $email ?></td>
                        </tr>

                        <tr>
                            <td>Phone: </td>
                            <td><?= $phone ?></td>
                        </tr>

                        <tr>
                            <td>Address: </td>
                            <td><?= $address ?></td>
                        </tr>

                        <tr>
                            <td>Job: </td>
                            <td><?= $job ?></td>
                        </tr>


                        </table>
                        </form>
                    </div>    
                  </div>
              </div>
            </div>


<?php
    }
}else {
    echo "0 results";
}

?>

<footer class="foot">

      <div class="footer-left">
        <img src="picture/footerlogo.png">
        
        <p class="footer-links">
          <a href="Admin_home.php">Home</a>
          |
          <a href="Admin_about.php">About</a>
          |
          <a href="Admin_event.php">News & Events</a>
          |
          <a href="Admin_contact.php">Contact</a>
          |
          <a href="Admin_approve.php">Approve</a>
        </p>
          
        <p class="footer-company-name"> © 2021 KAWEIEE UNIVERSITY</p>
      </div>

      <div class="footer-center">
        <div>
            <p class="emoji">&#128205;</p>
					  <p><span> V01-06-01, Lingkaran SV Kaweiee University,<br>
             55100 Kuala Lumpur</span>
						</p>
				</div>

        <div>
					<p class="emoji">&#128222;</p>
					<p><a href="tel:+60123456789">+60 123456789</p>
				</div>

				<div>
					<p class="emoji">&#128233;</i>
					<p><a href="mailto:kaweieeuniversity@mail.com">kaweieeuniversity@mail.com</a></p>
				</div>
			</div>

      <div class="footer-right">
				<p class="footer-company-about">
					<span>About the University</span>
					This is Kaweiee University's Alumni webpage. We will provide you an amazing experience throughout our webpage. </p>
				<div class="footer-icons">
					<a href="https://www.facebook.com/" target="_blank"><img src="picture/facebook.png"></a>
					<a href="https://twitter.com/" target="_blank"><img src="picture/twitter.png"></a>
					<a href="https://www.instagram.com/" target="_blank"><img src="picture/instagram.png"></a>
					<a href="https://www.linkedin.com/" target="_blank"><img src="picture/linkedin.png"></a>
					<a href="https://www.youtube.com/" target="_blank"><img src="picture/youtube.png"></a>
				</div>
			</div>

    </footer>
</body>
<html>




