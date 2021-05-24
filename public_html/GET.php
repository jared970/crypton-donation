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
          <h2>
            <span uk-icon="icon: happy; ratio: 1.5" style="position: relative; bottom: 3px;"></span>
            <span>Your link is ready!</span>
          </h2>
        </div>

        <?php
            $link = $app->parseLink();
        ?>

        <div class="uk-width-medium" style="margin: 15px auto;">
          <div class="uk-form-large uk-padding-small">
            <div class="uk-margin">
            <input class="uk-input uk-display-block" type="text" value="https://crypton.life/CRP/<?php echo $link; ?>" placeholder="your link..." />
              <button class="uk-button uk-button-primary uk-display-block uk-width-1-1 uk-text-center">copy</button>
            </div>
          </div>
          <p class="uk-margin-top">You can use this link in your blog, in social networks and on other resources.</p>
        </div>

        <br/>
        <hr/>
        <?php include_once './include/crypton.php'; ?>

      </div>
    </div>
    <?php include_once './include/scripts.php'; ?>
  </body>
</html>
