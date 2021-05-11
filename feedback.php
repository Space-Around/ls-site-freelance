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
        <h3 class="subtitle">ОБРАТНАЯ СВЯЗЬ</h3>
        
        <section class="info">
          <form class="form" id="form">
            <label for="fname">Имя</label>
            <input
              type="text"
              id="fname"
              name="firstname"
              placeholder="Ваше имя.."
            />

            <label for="lname">Фамилия</label>
            <input
              type="text"
              id="lname"
              name="lastname"
              placeholder="Ваша фамилия.."
            />

            <label for="lname">Почта</label>
            <input
            type="email"
              id="email"
              name="email"
              placeholder="Ваша почта.."
            />

            <label for="country">Страна</label>
            <select id="country" name="country">
              <option value="russia">Russia</option>
              <option value="canada">Canada</option>
              <option value="usa">USA</option>
            </select>

            <label for="subject">Письмо</label>
            <textarea
              id="subject"
              name="subject"
              placeholder="Write something.."
              style="height: 200px"
            ></textarea>

            <input type="submit" value="Submit" />
          </form>
        </section>
      </div>
      <?php include('footer.php'); ?>    
    </div>
    <script src="js/form.js"></script>
    <script src="js/dropdown.js"></script>
  </body>
</html>
