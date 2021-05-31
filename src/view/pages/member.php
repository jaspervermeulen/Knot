<main>

    <?php
        if (!empty($_POST) && !empty($errors)) {
          echo '<div class="error">Het formulier bevat nog fouten</div>';
        }
        
        if (empty($_POST) || !empty($errors)) {
    ?>
    <section class="member">

        <h2 class="member__title">Word nu lid!</h2>
        <p class="member__text">
            Ervaar de volledige behandeling binnen onze vereniging. <br>
            Leden hebben talrijke voordelen binnen de club en ontvangen <br>
            ook verschillende kortingen en tips ’n tricks.
        </p>
        <form class="member__info" action="index.php?page=member" method="post">
            <input type="hidden" name="action" value="insertMember">
            <label class="info__label info__label--firstname" for="firstname">
                <p class="info__label--text">Voornaam:</p>
                <input class="info__label--input input" type="text" name="firstname" id="firstname" required
                    minlength="3">
                <p class="error"></p>
                <?php
                    // indien er een fout is voor dit veld, de fout ook tonen.
                    if (!empty($errors['firstname'])) {
                        echo '<span class="error">' . $errors['firstname'] . '</span>';
                    }
                    ?>
            </label>
            <label class="info__label info__label--lastname" for="lastname">
                <p class="info__label--text">Achternaam:</p>
                <input class="info__label--input input" type="text" name="lastname" id="lastname" required
                    minlength="3">
                <p class="error"></p>
                <?php
                    // indien er een fout is voor dit veld, de fout ook tonen.
                    if (!empty($errors['lastname'])) {
                        echo '<span class="error">' . $errors['lastname'] . '</span>';
                    }
                    ?>
            </label>
            <label class="info__label info__label--adres" for="adres">
                <p class="info__label--text">Adres (straat + huisnummer):</p>
                <input class="info__label--input input" type="text" name="address" id="adres" required minlength="3">
                <p class="error"></p>
                <?php
                    // indien er een fout is voor dit veld, de fout ook tonen.
                    if (!empty($errors['address'])) {
                        echo '<span class="error">' . $errors['address'] . '</span>';
                    }
                    ?>
            </label>
            <label class="info__label info__label--place" for="place">
                <p class="info__label--text">Plaats:</p>
                <input class="info__label--input input" type="text" name="place" id="place" required minlength="3">
                <p class="error"></p>
                <?php
                    // indien er een fout is voor dit veld, de fout ook tonen.
                    if (!empty($errors['place'])) {
                        echo '<span class="error">' . $errors['place'] . '</span>';
                    }
                    ?>
            </label>
            <label class="info__label info__label--email" for="email">
                <p class="info__label--text">Email:</p>
                <input class="info__label--input input" type="email" name="email" id="email" required>
                <p class="error"></p>
                <?php
                    // indien er een fout is voor dit veld, de fout ook tonen.
                    if (!empty($errors['email'])) {
                        echo '<span class="error">' . $errors['email'] . '</span>';
                    }
                    ?>
            </label>
            <label class="info__label info__label--news" for="news">
                <input class="info__label--checkbox" id="news" name="news" type="checkbox">
                <p class="info__label--checkboxtext">Ik wil de nieuwsbrief ontvangen.</p>
            </label>
            <input type="submit" class="info__button" value="Schrijf me in!">
        </form>
    </section>
    <?php
        } else {
    ?>
    <div class="wrapper__succes">
        <p class="member__succes">Welkom bij knot!</p>
        <p class="member__succes--info">Via email zul je verdere gegevens van je lidmaadschap ontvangen.</p>
    </div>

    <?php
        }
    ?>

</main>