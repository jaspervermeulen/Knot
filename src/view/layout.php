<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./style.css"> -->

    <?php echo $css;?>

    <title>Knot <?php echo $page ?></title>
</head>

<body>

    <header class="header">

        <h1 class="hidden">Knot</h1>
        <nav class="header__nav">
            <ul class="nav__list">
                <li class="list__item list__item--logo"><a class="list__link list__link--special"
                        href="index.php?page=home">Knot</a></li>
                <li></li>
                <li class="list__item list__item--margintop "><a class="list__link <?php if($page == 'About') echo 'active'; ?>" href="index.php?page=about">Over ons</a></li>
                <li class="list__item list__item--margintop"><a class="list__link <?php if($page == 'Agenda') echo 'active'; ?>" href="index.php?page=agenda">Agenda</a></li>
                <li class="list__item list__item--margintop"><a class="list__link <?php if($page == 'Contact') echo 'active'; ?>" href="index.php?page=contact">Contact</a></li>
                <li></li>
                <li class="list__item list__item--margintop list__item--button"><a class="list__link list__link--button"
                        href="index.php?page=member">Word lid!</a></li>
                <li class="list__item list__item--margintop list__item--button"><a
                        class="list__link list__link--buttonticket" href="index.php?page=tickets">Koop ticket</a></li>
            </ul>
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

    <!-- <script src="index.js"></script>
    <script type="text/javascript" src="js/validate.js"></script> -->
</body>

</html>
