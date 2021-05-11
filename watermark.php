<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>лр1</title>
    <link rel="stylesheet" type="text/css" href="./css/index.css" />
  </head>
  <body>
    <div class="container">
    <?php include('header.php'); ?>
      <div class="content">
      <?php include('navigation.php'); ?>
        <h3 class="subtitle">ВОДНЫЙ ЗНАК</h3>
        
        <section class="info">
            <label for="image">Изображение</label>
            <input id="image" accept="image/jpeg, image/jpg" type="file" атрибуты>      
            <label for="image">Водный знак</label>    
            <input id="watermark" accept="image/jpeg, image/jpg" type="file" атрибуты>
            <button id="send">Overlaying</button>
            <a id="downloadlink" href="#" download="image.png">Download</a>
        </section>
      </div>
      <?php include('footer.php'); ?>    
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/dropdown.js"></script>
    <script src="js/watermark.js"></script>
  </body>
</html>
