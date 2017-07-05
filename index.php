<html>
  <head>
    <link rel="stylesheet" href="assets/styles.css" />
    <script type="text/javascript" src="assets/scripts.js"></script>
    <title>PHP Unit Testing</title>
  </head>

  <body>
    <?php
    // Drop header in
    require('views/header.php');

    $pageList = array('home', 'about', 'contact');

    // Decide which view to serve
    if(in_array($_GET['page'], $pageList)){
      $thisPage = $_GET['page'];
    } else {
      if($_GET['page'] == ''){
        $thisPage = 'home';
      } else {
        $thisPage = '404';
      }
    }

    // Drop main view in
    require('pages/' . $thisPage . '.php');

    // Drop footer in
    require('views/footer.php');
    ?>
  </body>
</html>
