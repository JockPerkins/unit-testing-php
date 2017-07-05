<html>
  <head>
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- BASE STYLES AND SCRIPTS -->
    <link rel="stylesheet" href="assets/styles.css" />
    <script type="text/javascript" src="assets/scripts.js"></script>
    <!-- PAGE TITLE -->
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
