<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "header_inc.php" ?>
  <ul id="master">
  <?php
  //Different way to include what's needed besides using include keyword
      include("classes.php");
      $db = new DB();
      $exhibits = $db->execute("SELECT * FROM exhibits");
      //var_dump($exhibits);
      foreach ($exhibits as $i=>$exhibit):
  ?>
    <li>
      <a href="details.php?index=<?php echo $i; ?>">
        <?php echo $exhibit["title"]; ?>
      </a>
    </li>
  <?php endforeach; ?>
  </ul>
<?php include "header_inc.php" ?>
