<main>

        <section class="member">

            <h2 class="member__title">Lid ticket</h2>
            <p class="member__text">

                    Dit is het ticket voor leden. Als lid heb je recht op een kortingstarief op je ticket. <br>
                    Studenten kunnen <a class="text__link" href="index.php?page=studentticket">hier</a> een ticket kopen tegen korting.
                    
            </p>

            <?php
            if (empty($_POST) || !empty($errors)) {
            
            ?>

            <form class="member__info--special" method="post" action="index.php?page=memberticket">
                <input type="hidden" name="action" value="insertTicket">
                <label class="info__label info__label--firstname" for="name">
                    <p class="info__label--text">Naam:</p>
                    <input class="info__label--input input" type="text" name="firstname" id="name" required minlength="3">
                    <p class="error"></p>
                </label>

                <label class="info__label info__label--member" for="member">
                    <p class="info__label--text">Lidnummer:</p>
                    <input class="info__label--input input" type="number" name="membernr" id="member" required min="1000" max="9999">
                    <p class="error"></p>
                </label>

                <label class="info__label info__label--news" for="news">
                    
                    <p class="info__label--checkboxtext">Je ontvangt het ticket via het <br> ingegeven email adres.</p>

                </label>
                <input type="submit" class="info__button" value="Ga verder">
            </form>

            <?php

}else{
    echo '<div class="wrapper__ticket">';
    echo '<div class="ticket__border">';
    echo '<p class="ticket__succes">Bedankt voor je bestelling!</p>';
    echo '</div>';
    echo '</div>';
}
?>

        </section>

    </main>