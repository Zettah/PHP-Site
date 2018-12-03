
<?php $display_name = 'Carimu';
 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <meta charset=utf-8>
   <title> PHP Basics by <?php echo $display_name; ?></title>
   <link href="css/style.css" rel="stylesheet" />
</head>

<body>
  <div id="wrap">
    <section class="sidebar text-center">
      <div class="avatar">
        <img src="img/logo.png" alt="frog">
      </div>
      <h1><?php echo $display_name; ?></h1>

      <p> Contact: <br>
        <a href="mailto:Zettah@lestrapstudio.com">EMAIL </a></p>
        <hr />
        <ul class="social">
          <li><a href=""><span class="icon twitter"></span></a></li>
        </ul>
        <hr />
        <p> Today: D, d M Y </p>

      </section>

      <section class="main">
        <h1> My First PHP Page </h1>

        <h2> Echo </h2>
        <?php include 'inc/echo.php'; ?>
        <hr />

        <h2>Echo 2</h2>
        <?php include 'inc/echo2.php'; ?>
        <hr />
        <h2> addition </h2>
        <?php include 'inc/addition.php'; ?>
        <hr />

        <h2>Syntax </h2>
        <?php include 'inc/syntax.php'; ?>
        <hr />

        <h2>Condition</h2>
        <?php include 'inc/condition.php'; ?>
        <hr />

        <h2>strings</h2>
        <?php include 'inc/strings.php'; ?>
        <hr />
</section>
</div>

<section class="footer text-center">
  &copy; <?php
  echo date('y');
  echo " ". $display_name . ". ";
// outputs e.g. "last modified :Oct 2018 "
echo "Last modified: " . date("F d Y H:i:s.", getlastmod())  ;
?>
</section>

</body>

</html>
