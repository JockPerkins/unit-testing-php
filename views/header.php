<div id="header">
  <div class="container">
    <img id="logo" src="http://www.placehold.it/100x50" />
    <ul>
      <?php
      $pageList = array('home', 'about', 'contact');
      foreach($pageList as $page){
        if($page == $_GET['page']){
          $active = 'active';
        } elseif($page == 'home' && $_GET['page'] == ''){
          $active = 'active';
        } else {
          $active = '';
        }
        if($page == 'home'){
          echo "<li><a class='".$active."' href='/'>".ucwords($page)."</a></li>";
        } else {
          echo "<li><a class='".$active."' href='/?page=".$page."'>".ucwords($page)."</a></li>";
        }
      }
      ?>
    </ul>
  </div>
</div>
