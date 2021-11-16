<!doctype html>
<html>
	
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Adelaide Aqua Boys | Contact Request Form</title>
  <!-- Bootstrap -->
  <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
  <link href="css/mainSite.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/33351e080c.js" crossorigin="anonymous"></script>
</head>
	
<body>
	
  <!-- Jumbotron -->
  <div class="jumbotron text-center jumbo">
	<img src="images/logowhitesmall.png" class="img-fluid">
  </div>
	
  <!-- Navbar -->
  <nav class="navbar navbar-expand-sm bg-dark navbar-fixed-top navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="index.html">Adelaide Aqua Boys</a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> 
	  <span class="navbar-toggler-icon"></span>
	</button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
		  
        <li class="nav-item"> 
			<a class="nav-link " href="services.html">Services</a> 
		</li>
		  
        <li class="nav-item dropdown"> 
		  <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" href="#">Our Work</a>
		  
          <div class="dropdown-menu"> 
			  <a class="dropdown-item" href="greenPool.html">Green Pool</a> 
			  <a class="dropdown-item" href="leak.html">Leak Detection</a> 
			  <a class="dropdown-item" href="heating.html">Heating Solutions</a> 
			  <a class="dropdown-item" href="pvcPipe.html">PVC Pipeing Installs</a> 
		  </div>
			
        </li>
		  
        <li class="nav-item"> 
			<a class="nav-link" href="contact.html">Contact</a> 
		</li>
		  
        <li class="nav-item"> 
	      <a class="nav-link" href="crew.html">Crew</a> 
		</li>
		
		<li class="nav-item"> 
	      <a class="nav-link" href="reviews.php">Reviews</a> 
		</li>
		  
      </ul>
		
    </div>
  </nav>	
  <div>
      <?php
      if (isset($_POST['Email'])) {

          // EDIT THE 2 LINES BELOW AS REQUIRED
          $email_to = "dev@baytechdesign.com.au"; //patrick@adelaideaquaboys.com.au
          $email_subject = "New Message From Website";

          function problem($error)
          {
              echo "We are very sorry, but there were error(s) found with the form you submitted. ";
              echo "These errors appear below.<br><br>";
              echo $error . "<br><br>";
              echo "Please go back and fix these errors.<br><br>";
              die();
          }

          // validation expected data exists
          if (
              !isset($_POST['Name']) ||
              !isset($_POST['Email']) ||
              !isset($_POST['Message'])
          ) {
              problem('We are sorry, but there appears to be a problem with the form you submitted.');
          }

          $name = $_POST['Name']; // required
          $email = $_POST['Email']; // required
          $message = $_POST['Message']; // required

          $error_message = "";
          $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

          if (!preg_match($email_exp, $email)) {
              $error_message .= 'The Email address you entered does not appear to be valid.<br>';
          }

          $string_exp = "/^[A-Za-z .'-]+$/";

          if (!preg_match($string_exp, $name)) {
              $error_message .= 'The Name you entered does not appear to be valid.<br>';
          }

          if (strlen($message) < 2) {
              $error_message .= 'The Message you entered do not appear to be valid.<br>';
          }

          if (strlen($error_message) > 0) {
              problem($error_message);
          }

          $email_message = "Form details below.\n\n";

          function clean_string($string)
          {
              $bad = array("content-type", "bcc:", "to:", "cc:", "href");
              return str_replace($bad, "", $string);
          }

          $email_message .= "Name: " . clean_string($name) . "\n";
          $email_message .= "Email: " . clean_string($email) . "\n";
          $email_message .= "Message: " . clean_string($message) . "\n";

          // create email headers
          $headers = 'From: ' . $email . "\r\n" .
              'Reply-To: ' . $email . "\r\n" .
              'X-Mailer: PHP/' . phpversion();
          mail($email_to, $email_subject, $email_message, $headers);
      ?>

        <!-- include your success message below -->
      <div class="container-fluid">
          <div class="row content">
            <div class="col-sm-2 sidenav"> </div>
            <div class="col-sm-8 text-center">
              <h1 class="text-center">Thank You</h1>
				<p>Thanks <?= $name;?>,we will be in touch with you very soon.</p>
            <div class="col-sm-2 sidenav">
            <div class="well"> </div>
            <div class="well"> </div>
            </div>
          </div>
        </div>

        

    <?php
    }
    ?>
  </div>
</body>
</html>