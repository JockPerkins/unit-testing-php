<html>
  <head>
    <link rel="stylesheet" href="assets/styles.css" />
    <script type="text/javascript" src="assets/scripts.js"></script>
    <title>PHP Unit Testing</title>
  </head>

  <body>
    <?php require('views/header.php'); ?>

    <div class="container">
      <?php // Decide which view to serve
        $pageList = array('home', 'about', 'contact');
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
      ?>
    </div>

    <?php require('views/footer.php'); ?>
  </body>
</html>
