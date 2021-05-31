<main>
    <section class="contact">
        <?php
            if (empty($_POST) || !empty($errors)) {   
        ?>
        <h2 class="contact__title">Stel hier uw vragen!</h2>
        <p class="contact__text">
            Heb je verdere vragen over onze activiteiten, vereniging, ...? <br>
            Stel hier je vragen en we proberen zo snel mogelijk contact op te nemen met je!
        </p>
        <form class="contact__info" method="post" action="index.php?page=contact">
            <input type="hidden" name="action" value="insertMessage">
            <label class="info__label info__label--name" for="name">
                <p class="info__label--text">Naam:</p>
                <input class="info__label--input input" type="text" name="name" id="name" required>
                <p class="error"></p>
            </label>
            <label class="info__label info__label--mail" for="mail">
                <p class="info__label--text">Email:</p>
                <input class="info__label--input input" type="email" name="email" id="email" required>
                <p class="error"></p>
            </label>
            <label class="info__label info__label--message" for="message">
                <p class="info__label--text">Bericht:</p>
                <textarea class="info__label--textarea input" name="message" id="message" cols="30" rows="10"
                    required></textarea>
                <p class="error"></p>
            </label>
            <input type="submit" class="info__button--contact" value="Verstuur!">
        </form>
        <?php
            }else{
                echo '<div class="wrapper__contact">';
                echo '<p class="contact__succes">Het bericht is verstuurd!</p>';
                echo '<p class="contact__succes--info">We nemen zo snel mogelijk contact op.</p>';
                echo '</div>';
            }
        ?>
    </section>
</main>