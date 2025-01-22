<?php 
   include "views/partial/header.view.php"; 
   include "views/partial/nav.view.php";
   include "views/partial/banner.view.php" ?>
  

    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <?php foreach($notes as $express) : ?>
            <p><?=$express['body']?></p>
            <?php endforeach; ?>
    </div> 
  </main>

  <?php include "views/partial/footer.view.php"; ?>
