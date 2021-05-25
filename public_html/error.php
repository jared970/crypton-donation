<?php
  require_once __DIR__ . '/../vendor/autoload.php';
  $app = new App\Solution();
?>
<html>
  <?php include_once './include/head.php'; ?>
  <body>
    <div class="uk-padding uk-text-lead uk-light">
      <div class="uk-text-center">
        <img src="/img/logo.svg" style="width: 128px; height: 128px;" />
        <div class="uk-container">
          <h2>An error has occurred</h2>
          <?php
            $errorCode = $app->dataFilter($_GET['code']);
            $errorInfo = 'No data available for this error.';
            switch($errorCode) {
              case '404':
                $errorInfo = 'The requested page was not found';
                break;
              case '500':
                  $errorInfo = 'Server-side error occurred';
                  break;
              case '403':
                $errorInfo = 'Access is denied';
                break;
              case '418':
                $errorInfo = "Sorry, I'm teapot";
                break;
            }
          ?>
          <p><?php echo $errorInfo; ?></p>
        </div>

        <br/>
        <hr/>
        <div class="uk-dark">
          <h4>Links</h4>
          <a href="/" class="uk-button uk-button-default uk-text-center uk-border-rounded">home</a>
          <a href="/" class="uk-button uk-button-primary uk-text-center uk-border-rounded">Utopia</a>
          <a href="/" class="uk-button uk-button-primary uk-text-center uk-border-rounded">Crypton</a>
        </div>

      </div>
    </div>
    <?php include_once './include/scripts.php'; ?>
  </body>
</html>
