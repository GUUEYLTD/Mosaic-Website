<?php
  if(isset(
    $_POST['name'],
    $_POST['email'],
    $_POST['phoneNumber'],
    $_POST['subject'],
    $_POST['message']))
    {
      if(empty($_POST['name']))
      {
        $errors[] = "please enter a name.";
      }
      else
      {
        $name = htmlentities($_POST['name']);
      }

      if(empty($_POST['email']))
      {
        $errors[] = "please enter an email.";
      }
      else if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false)
      {
        $errors[] = "please provide a valid email address.";
      }
      else
      {
        $from = "<".htmlentities($_POST['email']).">";
      }

      if(empty($_POST['phoneNumber']))
      {
        $errors[] = "please enter a phone number.";
      }
      else
      {
        $phoneNumber = htmlentities($_POST['phoneNumber']);
      }

      if(empty($_POST['subject']))
      {
        $errors[] = "please enter a subject.";
      }
      else
      {
        $subject = htmlentities($_POST['subject']);
      }

      if(empty($_POST['message']))
      {
        $errors[] = "please enter a message.";
      }
      else
      {
        $message = htmlentities($_POST['message']);
      }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact Us | Mosaic Care </title>
    <meta name="description" content="DESCRIPTION">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/application.css">
    <link rel="stylesheet" href="../assets/css/contact.css">

    <!--[if lt IE 9]>
      <script src = "http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
</head>

<body>
  <?php include('../layout/header.php') ?>

 <div id="default-header" class="jumbotron jumbotron-fluid">
 <div class="container">
  <div class="row">

    <div class="col-md-12">

      <h1 class="display-3">Contact</h1>

      <p class="lead">Find us. Call us. Email us.</p>

      <a href="/"><button class="btn btn-primary mosaic-action-button">sign up for free <span class="glyphicon glyphicon-chevron-right"></span></button></a>

    </div>
  </div>
 </div>
 </div>

 <div class="container-background-grey">
   <div class="container-fluid contact-content-section">
   <div class="row">
    <div class="col-md-6">
      <div class="contents">
        <?php
          if(empty($errors) === false)
          {
          ?>
          <ul>
            <?php
              foreach($errors as $error)
              {
                echo "<li>", $error, "</li>";
              }
            ?>
          </ul>
          <?php
            } else
            {
              $body = 'Automated messgae from mosaic site: <br/>'.'Name: '.$name.'<br/> Phone: '.$phoneNumber.'<br/> Message: '.$message;
              if(isset($subject, $body, $from))
              {
                mail('hello@mosaic-care.com', $subject, $body, "From: {$from}");
                echo "Message Sent!";
              }
            }
        ?>
        <h2>Contact Form</h2>
        <form method="post" action="">
          <input name="name" id="name" class="form-control" placeholder="Name" />
          <input name="email" id="email" class="form-control" placeholder="Email" />
          <input name="phoneNumber" id="phoneNumber" class="form-control" placeholder="Phone Number" />
          <input name="subject" id="subject" class="form-control" placeholder="Subject" />
          <textarea name="message" id="message" class="form-control" placeholder="Message"></textarea>
          <input id="formButton" type="submit" class="btn btn-primary mosaic-action-button" value="submit > "></button>
        </form>
        <div id="contact-divider" class="divider">

        </div>

        <p>
          Alternatively you can email us at <a class="mosaic-link" href="mailto:hello@mosaic-care.com">hello@mosaic-care.com</a>
        </p>
      </div>
    </div>

    <div class="col-md-6">
      <div class="contents">
        <div class="google-maps">

          <iframe
            width="600"
            height="450"
            frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDWbVnNUPaq7ckxYencKgz2vYdJBgCjn-8
              &q=Beecholme+Adult+Care+CR4+2HT+London" allowfullscreen>
          </iframe>
        </div>

        <div class="contact-address">
          <p>
            GUUEY LTD
          </p>
          <p>
            Beecholme House
          </p>
          <p>
            2-4 Beecholme Avenue
          </p>
          <p>
            London
          </p>
          <p>
            CR4 2HT
          </p>
        </div>
      </div>

      <div class="contents">
        <div class="contact-social-links">
          <a href="#" class="footer-social"><img class="footer-social-icon" src="/assets/images/contact/FB.png"/></a>
          <a href="#" class="footer-social"><img class="footer-social-icon" src="/assets/images/contact/IG.png"/></a>
          <a href="#" class="footer-social"><img class="footer-social-icon" src="/assets/images/contact/G+.png"/></a>
          <a href="#" class="footer-social"><img class="footer-social-icon" src="/assets/images/contact/LinkedIn.png"/></a>
        </div>
      </div>
    </div>
   </div>
   </div>
 </div>

 <?php include('../layout/footer.php') ?>
 <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="efc0f552-7f07-453b-bb8e-2451b2ab20bb";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.im/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>

</html>
