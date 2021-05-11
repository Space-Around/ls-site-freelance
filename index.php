<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>лр1</title>
    <link rel="stylesheet" type="text/css" href="./css/index.css" />
  </head>
  <body onload="timer()">
    <div class="container">      
      <?php include('header.php'); ?>
      <div class="content">
          <?php include('navigation.php'); ?>

        <h3 class="subtitle">ГЛАВНАЯ</h3>

        <section class="info">
          <p class="description">
            Музыка — вид искусства. Согласно А. Н. Сохору (МЭ 3, 1976 г.), этот
            вид «отражает действительность и воздействует на человека
            посредством осмысленных и особым образом организованных по высоте и
            во времени звуковых последований, состоящих в основном из тонов». На
            этом сайте вы сможете просмотреть и прослушать наш музыкальный
            архив, который включает в себя музыку разных жанров и исполнителей.
          </p>
        </section>
      </div>
      <?php include('footer.php'); ?>      
    </div>

    <script language="JavaScript">
      setTimeout(() => {
        alert("Страница была загружена через 4 секунды");
      }, 4000);
    </script>
    <script src="js/dropdown.js"></script>
  </body>
</html>
