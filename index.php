<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mosaic Care | Care Home Management Software Solution</title>
    <meta name="description" content="Digitise your care home management processes to save time & reduce errors. With Mosaic you can streamline care plans, medication & more. Try it free today.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/application.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <script src="/assets/elements/mosaic-register/bower_components/webcomponentsjs/webcomponents-lite.min.js"></script>
    <link rel="import" href="/assets/elements/mosaic-register/mosaic-register.html" />
    <link rel="icon" href="https://mosaic-care.com/favicon.ico" />
    <script src="http://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js"></script>
    <?php
    $browser = get_browser();
    if(strtolower($browser->browser) == 'safari') {
        echo '<link href="/assets/css/safari.css" rel="stylesheet" type="text/css" />';
    } 
    ?>

     <!--[if lt IE 9]>
      <script src = "http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


</head>

<body>
  <?php echo $browser; ?>

  <?php include('layout/homeHeader.php') ?>

  <?php include('pages/home.php') ?>

  <?php include('layout/footer.php') ?>

 <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="efc0f552-7f07-453b-bb8e-2451b2ab20bb";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.im/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>

</html>
