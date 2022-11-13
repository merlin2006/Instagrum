<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Instagram Login</title>
    <link rel="stylesheet" href="../assets/css/login.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container">
      <div class="center">
        <div class="header">
          <img src="../assets/img/instagramlogo.png" alt="instagramLogo" class="instaLogo" />
        </div>
        <div class="inputElement">
          <input type="text" placeholder="Email" class="inputText"
          />
          <input type="password" placeholder="Passwort" class="inputText" />
          <input type="submit" value="Anmelden" class="inputButton" />
          <div class="line">
            <span class="arrow"></span>
            <span class="content">Oder</span>
            <span class="arrow"></span>
          </div>
          <div class="social__icon">
            <i class="fab fa-facebook-square"></i
            ><span>Anmelden mit Facebook</span>
          </div>
          <div class="forgetPassword"><a href="passwort.php">Passwort vergessen?</a></div>
        </div>
      </div>
      <div class="footer">
        <p>Hast du keinen Acount?<span><a href="reg.php">Regestrieren</a></span></p>
      </div>
    </div>
  </body>
</html>