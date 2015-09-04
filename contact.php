<html>
    <head>
        <title>PHP insertion</title>
        <link rel="stylesheet" href="css/insert.css" />
        <meta charset="UTF-8">
        <title>Brothers For All</title>
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script src="js/modernizr.js" type="text/javascript"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="styles.css">
        <script type="text/javascript" src="js/jssor.js"></script>
        <script type="text/javascript" src="js/jssor.slider.js"></script>
    </head>
    <body>
        <div id="wrapperHeader">
            <div id="header">
                <img src="img/logo.png" alt="logo" />
            </div>
            <nav>
                <ul class="dropdown">
                    <li><a href="index.php">Home</a>

                    </li>

                    <li class="drop"><a href="About.php">About Us</a>
                        <ul class="sub_menu">
                            <li><a href="About.php">Story</a></li>
                            <li><a href="Team.php">Team</a></li>



                        </ul>
                    </li>
                    <li class="drop"><a href="GetInvolved.php">Get Involved</a>
                        <ul class="sub_menu">

                            <li><a href="#">Programs</a></li>
                            <li><a href="#">Donate</a></li>

                        </ul>
                    </li>
                    <li><a href="Store.php">Store</a></li>

                    <li class="drop"><a href="Family.php">Family</a>
                        <ul class="sub_menu">
                            <li><a href="Donors.php">Donors</a></li>
                            <li><a href="Partners.php">Partners</a></li>
                            <li><a href="Gallery.php">Gallery</a></li>
                            <li><a href="TechAdvisors.php">Tech Advisors</a></li>

                        </ul>
                    </li>
                    <li><a href="contact.php">Contact Us</a>
                    </li>

                </ul>
            </nav>
            
            <fieldset>

                        <form action="contact.php" method="post" enctype="multipart/form-data">

                            <h1 class="title">Contact</h1>

                            <label></label>
                            <input name="name" required="required" placeholder="Your Name">
                            <label></label>
                            <input name="contact" required="required" placeholder="Your contact">

                            <label></label>
                            <input name="email" type="email" required="required" placeholder="Your Email">


                            <label></label>
                            <textarea name="address" cols="20" rows="5" required="required" placeholder="Message"></textarea>


              

                            <input id="submit" name="submit" type="submit" value="Submit">
                         </form>
        </fieldset>
                     
<?php
                    //Establishing Connection with Server
                    $connection = mysql_connect("localhost", "root", "");

                    //Selecting Database from Server
                    $db = mysql_select_db("colleges", $connection);
                    if (isset($_POST['submit'])) {

                        //Fetching variables of the form which travels in URL

                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $contact = $_POST['contact'];
                        $address = $_POST['address'];
                        if ($name != '' || $email != '') {
                            //Insert Query of SQL
                            $query = mysql_query("insert into students(student_name, student_email, student_contact, student_address) values ('$name', '$email', '$contact', '$address')");
                            echo "<span>Data Inserted successfully...!!</span>";
                        } else {
                            echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
                        }
                    }
                    //Closing Connection with Server
                    mysql_close($connection);
                    ?>
                    
                
            <section>
       			<footer>
			<a href ="https://www.facebook.com/brothersforall?fref=ts" target="_blank"><img src="img/facebook.png" alt="Mountain View" style="width:30px;height:30px; margin-top :10px;"></a>
			<a href ="https://twitter.com/brothersforall" target="_blank"><img src="img/twitter.png" alt="Mountain View" style="width:30px;height:30px; margin-top :10px;" ></a>
			<a href ="https://brosforall.wordpress.com/" target="_blank"><img src="img/rss-feeds.png" alt="Mountain View" style="width:30px;height:30px; margin-top :10px;" ></a>
			<h6>
				Brothers for All is part of Mothers for All, a charity registered in South Africa and Botswana.<br>
				NPO 081-893; PBO 930037032 (18A); MA 327/2008<br>
				Copyright © 2015 Mothers For All. Images licensed under Creative Commons by Formgut, Pham Thi Dieu and Bruno Castro from the Noun Project.
			</h6>
		
		      </footer>

         	</section>				
          
	</div>
      
 
        <script src='js/jquery.min.js'></script>
        <script src="js/index.js"></script>
        <script src="js/jquery-1.9.1.min.js"></script>
    </body>
</html>