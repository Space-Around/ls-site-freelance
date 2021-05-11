<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>лр1</title>
    <link rel="stylesheet" type="text/css" href="./css/actors.css" />
  </head>
  <body>
    <div class="container">
    <?php include('header.php'); ?>
      <div class="content">
      <?php include('navigation.php'); ?>
        <h3 class="subtitle">ИСПОЛНИТЕЛИ</h3>
        
        <section class="info">
          <div class="row">
            <a
              href="https://ru.wikipedia.org/wiki/%D0%A6%D0%BE%D0%B9,_%D0%92%D0%B8%D0%BA%D1%82%D0%BE%D1%80_%D0%A0%D0%BE%D0%B1%D0%B5%D1%80%D1%82%D0%BE%D0%B2%D0%B8%D1%87"
            >
              <img
                class="artist"
                src="./assets/images/coi.jpg"
                alt="Викто Цой"
              />
            </a>
            <a
              href="https://ru.wikipedia.org/wiki/%D0%9F%D1%80%D0%B5%D1%81%D0%BB%D0%B8,_%D0%AD%D0%BB%D0%B2%D0%B8%D1%81"
            >
              <img class="artist" src="./assets/images/elvis.jpg" alt="Элвис" />
            </a>
            <a
              href="https://ru.wikipedia.org/wiki/%D0%92%D1%8B%D1%81%D0%BE%D1%86%D0%BA%D0%B8%D0%B9,_%D0%92%D0%BB%D0%B0%D0%B4%D0%B8%D0%BC%D0%B8%D1%80_%D0%A1%D0%B5%D0%BC%D1%91%D0%BD%D0%BE%D0%B2%D0%B8%D1%87"
            >
              <img
                class="artist"
                src="./assets/images/visoc.jpeg"
                alt="Высоцкий"
              />
            </a>
            <a
              href="https://ru.wikipedia.org/wiki/%D0%90%D0%BB%D0%B8%D1%81%D0%B0_(%D0%B3%D1%80%D1%83%D0%BF%D0%BF%D0%B0)"
            >
              <img class="artist" src="./assets/images/alis.jpg" alt="Алиса" />
            </a>
          </div>
        </section>
      </div>
      <?php include('footer.php'); ?>
    </div>
    <script src="js/dropdown.js"></script>
  </body>
</html>
