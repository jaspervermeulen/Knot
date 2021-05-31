<main>

        <section class="member">

            <h2 class="member__title">Student ticket</h2>
            <p class="member__text">
                    Dit is het ticket voor Studenten. Als student heb je recht op een kortingstarief op je ticket. <br>
                    Hiervoor moet je wel een geldig school adres kunnen voorleggen.
                   
            </p>

            <?php
            if (empty($_POST) || !empty($errors)) {
            
            ?>

            <form class="member__info" method="post" action="index.php?page=studentticket">
            <input type="hidden" name="action" value="insertTicket">
                <label class="info__label info__label--firstname" for="firstname">
                    <p class="info__label--text">Voornaam:</p>
                    <input class="info__label--input input" name="firstname" type="text" id="firstname" required minlength="3">
                    <p class="error"></p>
                </label>

                <label class="info__label info__label--lastname" for="lastname">
                    <p class="info__label--text">Achternaam:</p>
                    <input class="info__label--input input" name="lastname" type="text" id="lastname" required minlength="3">
                    <p class="error"></p>
                </label>

                <label class="info__label info__label--adres" for="adres">
                    <p class="info__label--text">Adres (straat + huisnummer):</p>
                    <input class="info__label--input input" name="address" type="text" id="adres" required minlength="3">
                    <p class="error"></p>
                </label>

                <label class="info__label info__label--place" for="place">
                    <p class="info__label--text">Plaats:</p>
                    <input class="info__label--input input" name="place" type="text" id="place" required minlength="3">
                    <p class="error"></p>
                </label>

                <label class="info__label info__label--email" for="email">
                    <p class="info__label--text">Email (geldig school adres):</p>
                    <input class="info__label--input input" name="email" type="email" id="email" required minlength="3">
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