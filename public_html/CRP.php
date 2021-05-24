<?php
  require_once __DIR__ . '/../vendor/autoload.php';
  $app = new App\Solution();
?>
<html>
  <?php include_once './include/head.php'; ?>
  <body>
    <div class="uk-padding uk-text-lead uk-light">
      <div class="uk-text-center">
        <img src="/img/logo.svg" style="width: 128px;" />
        <div class="uk-container">
          <h2>Help this user develop their projects</h2>
          <span>Send him <a href="https://cryptoncoin.cash">Crypton</a> =)</span>
        </div>

        <div class="uk-width-medium" style="margin: 15px auto;">
          <p>QR code</p>
          <p>address</p>
          <button class="uk-button uk-button-primary uk-display-block uk-width-1-1 uk-text-center">copy</button>
        </div>

        <br/>
        <hr/>
        <?php include_once './include/crypton.php'; ?>

      </div>
    </div>
    <?php include_once './include/scripts.php'; ?>
  </body>
</html>
