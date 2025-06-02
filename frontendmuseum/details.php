<?php include "header_inc.php" ?>
  <ul>
  <?php
      include("classes.php"); //Different way to include what's needed besides using include keyword
      // $json = file_get_contents("data/data.json");
      // $exhibits = json_decode($json, true);
      $db = new DB();
      $exhibits = $db->execute("SELECT * FROM exhibits");

      foreach ($exhibits as $exhibit):
  ?>
    <li>
      <article>
        <h2><?php echo $exhibit['title']; ?></h2>
        <p><?php echo $exhibit['description']; ?></p>
        <img
          src="./gallery/<?php echo $exhibit['image']; ?>"
          fetchpriority="high"
          decoding="sync"
        />
      </article>
    </li>
  <?php endforeach; ?>
  </ul>
<?php include "header_inc.php" ?>
