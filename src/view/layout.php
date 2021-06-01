<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./style.css">

    <?php echo $css;?>

    <title>Knot <?php echo $page ?></title>
</head>

<body>

  <header class="header">
    <h1 class="hidden">Knot</h1>
    <nav class="header__nav">
      <a class="header__nav--logo" href="index.php?page=home">Knot</a>
      <div class="header__nav--links">
        <a class="header__nav--links-item" <?php if($page == 'About') echo 'active'; ?>" href="index.php?page=about">Over ons</a>
        <a class="header__nav--links-item" <?php if($page == 'Agenda') echo 'active'; ?>" href="index.php?page=agenda">Agenda</a>
        <a class="header__nav--links-item" <?php if($page == 'Contact') echo 'active'; ?>" href="index.php?page=contact">Contact</a>
      </div>
      <div class="header__nav--buttons">
        <a class="header__nav--buttons-button-1" href="index.php?page=member">Word lid!</a>
        <a class="header__nav--buttons-button-2" href="index.php?page=tickets">Koop ticket</a>
      </div>
    </nav>
  </header>

    <?php echo $content; ?>

    <footer class="footer">
        <div class="footer__head">
            <p class="head__title">Knot</p>
            <p class="head__slogan">
                Relieve stress, be calmer <br>
                and work on your teamspirit.
            </p>
        </div>
    </footer>

    <?php echo $js; ?>

    <script src="index.js"></script>
    <script type="text/javascript" src="js/validate.js"></script>
</body>

</html>
