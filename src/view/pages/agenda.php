<main>
  <section class="search">
    <div>
      <h2 class="search__title">Agenda</h2>
      <p class="search__text">
        Op onze agenda pagina vind je de <br>
        aankomende activiteiten. <br>
        Aarzel niet en kom gerust eens af!
      </p>
    </div>
    <div>
      <form class="search__event filter-form" action="index.php?page=agenda">
        <input type="hidden" name="page" value="agenda">
        <label class="event__label event__label--place" for="place">
          <p class="event__label--question">Waar:</p>
          <select name="place" id="place" class="event__label--anwser input filter__field">
            <option value="" selected></option>
            <?php foreach($places as $place): ?>
            <option value="<?php echo $place['place']; ?>" 
              <?php if(!empty($_GET['place'])){
                if($place['place'] == $_GET['place']){
                  echo ' selected';
                }
              } ?> ">
              <?php echo $place['place']; ?>
            </option>
            <?php endforeach; ?>
          </select>
          <p class=" error error__agenda"></p>
        </label>
        <label class="event__label event__label--where" for="who">
          <p class="event__label--question">Voor wie:</p>
          <select name="who" id="who" class="event__label--anwser input filter__field">
            <option value="" selected></option>
            <?php foreach($whos as $who): ?>
            <option value="<?php echo $who['who']; ?>" 
            <?php if(!empty($_GET['who'])){
              if($who['who'] == $_GET['who']){
                echo ' selected';
              }
            } ?> ">
            <?php echo $who['who']; ?>
            </option>
            <?php endforeach; ?>            
            </select>
            <p class=" error error__agenda"></p>
        </label>
        <input type="submit" class="search__event--button form-submit" value="Zoek">
      </form>
    </div>
  </section>

  <section class="items">
    <h2 class="hidden">Agenda items</h2>
    <?php
      foreach($items as $item){
          echo '<a class="items__link" href="index.php?page=detail&id=' . $item['id'] . '">';
          echo '<article class="items__list">';
          echo '<p class="list__date">' . $item['day'] . ' <span class="list__date--month">' . $item['month'] . '</span></p>';
          echo '<p class="list__place">' . $item['place'] . '</p>';
          echo '<h3 class="list__title">' . $item['title'] . '</h3>';
          echo '</article>';
          echo '</a>';
      }
    ?>
  </section>
</main>