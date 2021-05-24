<?php
  require_once __DIR__ . '/../vendor/autoload.php';
  $app = new App\Solution();
?>
<html>
  <?php include_once './include/head.php'; ?>
  <body>
    <div class="uk-padding uk-text-lead uk-light">
      <div class="uk-text-center">
        <img src="img/logo.svg" style="width: 128px;" />
        <div class="uk-container">
          <h2>Create your donation link<br/>in Crypton</h2>
        </div>

        <div class="uk-width-medium" style="margin: 15px auto;">
          <form class="uk-form-large uk-padding-small" method="GET" action="CRP">
            <div class="uk-margin">
              <input class="uk-input uk-display-block" type="text" placeholder="Crypton address..." />
              <button class="uk-button uk-button-primary uk-display-block uk-width-1-1 uk-text-center">Create</button>
            </div>
          </form>
        </div>

        <br/>
        <hr/>
        <div class="uk-text-center">
          <div class="uk-width-xlarge" style="margin: auto;">
            <h1>What is Crypton?</h1>
            <p class="uk-text-left">Crypton is a truly breakthrough cryptocurrency that guarantees complete privacy protection. It is fully protected from any regularly-related risks, unlike any other cryptocurrency launched by any world-famous or even just public company. No government authority of any country can influence Crypton’s market rate or its fate. As well as there is no way to take control of Crypton or the entire <a href="https://u.is/">Utopia ecosystem</a> and its team that stays and will always stay anonymous.</p>
          </div>
        </div>

      </div>
    </div>
    <?php include_once './include/scripts.php'; ?>
  </body>
</html>
