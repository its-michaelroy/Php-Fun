<?php include "header_inc.php" ?>
  <?php

    // Request ALL errors to be displayed
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


      include("classes.php"); //Different way to include what's needed besides using include keyword
      $db = new DB();

      try{
          $exhibits = $db->execute("SELECT * FROM exhibits");

          $exhibit = $exhibits[$_GET['index'] ?? 0];
      }catch(Exception $e){
          echo "h4>ERROR!</h4>";
      }

  ?>
    <article>
      <h2><?php echo $exhibit['title']; ?></h2>
      <p><?php echo $exhibit['description']; ?></p>
      <img
        src="./gallery/<?php echo $exhibit['image']; ?>"
        fetchpriority="high"
        decoding="sync"
      />
    </article>
<?php include "header_inc.php" ?>
