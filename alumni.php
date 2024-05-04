<!DOCTYPE html>
<?php
  session_start();
  if(!empty($_SESSION['sname']))
    header('Location: finalalumni.php');
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="St. Agnes kwiro Sec School. Ordinar Level School that provides proper education for your child, welcome.">
	  <meta name="keywords" content="School,olevel,education,st. agnes kwiro,seconary">
  	<meta name="author" content="amosture">
    <title>ST. AGNES KWIRO SEC | alumni </title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="../img/favicon.png">
  </head>
  <body>
    <header >
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">ST. AGNES KWIRO GILRS' SECONDARY SCHOOL</span> </h1>
        </div>
        <nav>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="register.php">Register</a></li>
            <li class="current"><a href="alumni.php">Alumni</a></li>
            <li><a href="staff.html">Staff</a></li>
			<li><a href="academic.html">Accademic</a></li>
			<li><a href="sport.html">Sport</a></li>
            <li><a href="contacts.html">Contacts</a></li>
          </ul>
        </nav>
      </div>
    </header>
 
    <section id="main">
        <div class="container">
          
          <form  class="form1" method="POST" action="php/alumnilogin.php">
            <h1 class="page-title"> School Alumni Portal</h1>
            <div>
                <input type="text" name="sname" placeholder=" Enter your surname" id="name">
                <input type="password" name="pword" placeholder="Password" id="pword">
            
            
              </div>
              <input type="submit" name="submit" value="LOGIN" id="btn">
            
            </div>
          </form>
          <p align="center"><i> ALUMNI! click <a href="alumniportal.html" >here</a> to register if you don't have an account</i></p>
          
        </div>
      </section>

    <footer>
      <div id="boxes">
        <div class="container">
          <div class="box box-links">
            <h3>Quick Links</h3>
            <ul class="links">
              <li><a href="nacte.go.tz">NACTE</a></li>
              <li><a href="tamisemi.go.tz">TAMISEMI</a></li>
              <li><a href="necta.go.tz">NECTA</a></li>
              <li><a href="tie.go.tz">TIE</a></li>
              <li><a href="tcu.go.tz">TCU</a></li>
            </ul>
            </div>
          <div class="box box-links">
            <h3>Social Medias</h3>
            <ul  class="links">
              <li><a href="St Agnes Kwiro Girls' Secondary School">Facebook</a></li>
              <li><a href=" ">WhatsApp</a></li>
              <li><a href=" ">Linkedin</a></li>
              <li><a href=" ">Twiter</a></li>
              <li><a href=" ">Instagram</a></li>
            </ul></div>
          <div class="box box-links">
            <h3>Our Partiners and sponsers</h3>
            <ul  class="links">
              <li><a href=" ">NBC</a></li>
              <li><a href=" ">CRDB</a></li>
              <li><a href=" ">CSSC EZ Schools</a></li>
              <li><a href=" ">Kasita Seminary</a></li>
              <li><a href=" ">DIOCESE OF MAHENGE</a></li>
            </ul></div>
        </div>
      </div>
    <div><p id="ls">Designed by amosture, Copyright &copy; 2022</p></div>
  </footer>
  </body>
</html>
