<?php

  $dbhost = "127.0.0.1";
  $dbname = "DBQuizz";
  $username = "root";
  $password = "root";

  try {
    $conn= new PDO("mysql:host=$dbhost;dbname=$dbname", $username,$password);

  } catch (PDOException $exception) {
    die ($exception);
  }

  $query="SELECT Themes.id, Themes.nom, Themes.logo, count Questionnaires.id as NBQuest FROM Themes JOIN Questionnaires ON Themes.id = Questionnaires.id_Theme"

?>
        
<!doctype html>
<html class="no-js" lang="">

<?php include('php/Vhead.php'); ?>

  <body>
    <!--[if IE]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <div>

      <?php

        foreach ($conn->query($query) as $theme) {
          echo('<div>');
          echo('La liste est chargé');
          echo('<img src="' . $theme['logo'] . '" width="50" height="50">');
          echo('</div>');
        }

      ?>

    </div>
    
    
  <?php include('php/Vfooter.php'); ?>
    
  </body>

</html>
