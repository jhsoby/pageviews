<!DOCTYPE html>
<html>
  <head>
    <?php include '../../_head.php'; ?>
    <title>
      <?php echo $I18N->msg( 'siteviews-title' ) . ' – ' . $I18N->msg( 'url-structure' ); ?>
    </title>
  </head>
  <body>
    <div class="container">
      <header class="col-lg-12 text-center">
        <h4>
          <strong>
            <?php echo $I18N->msg( 'siteviews-title' ); ?>
          </strong>
          <small class="app-description">
            <?php echo $I18N->msg( 'url-structure' ); ?>
          </small>
        </h4>
      </header>
      <main class="col-lg-10 col-lg-offset-1">
        <div>
          <?php $pageviewsLink = "<pre>//tools.wmflabs.org/siteviews#sites={{SERVERNAME}}</pre>"; ?>
          <?php echo $I18N->msg( 'url-structure-example-siteviews', array( 'variables' => array( $pageviewsLink, $project, $sitematrixLink, $fullpageNamee ), 'parsemag' => true ) ); ?>
        </div>
        <div>
          <h3>
            <?php echo $I18N->msg( 'url-structure-parameters' ); ?>
            <small><?php echo $I18N->msg( 'url-structure-parameters-order' ); ?></small>
          </h3>
          <hr>
          <dl class="dl-horizontal">
            <dt>sites</dt>
            <dd>
              <?php $sitematrixLink = "<a href='https://meta.wikimedia.org/w/api.php?action=sitematrix&amp;formatversion=2'>" . strtolower( $I18N->msg( 'projects' ) ) . "</a>"; ?>
              <?php echo $I18N->msg( 'url-structure-projects', array( 'variables' => array( $sitematrixLink, '<code>de.wikipedia.org|fr.wikipedia.org</code>' ), 'parsemag' => true ) ); ?>
            </dd>
            <dt>range</dt>
            <dd>
              <?php echo $I18N->msg( 'url-structure-special-range', array( 'variables' => array( '<code>start</code>', '<code>end</code>' ), 'parsemag' => true ) ); ?>
              <ul class="special-ranges">
                <li>
                  <code>latest</code>
                  <?php echo "(" . strtolower( $I18N->msg( 'default' ) ) . ")"; ?>
                  <?php echo $I18N->msg( 'url-structure-special-range-latest' ); ?>
                </li>
                <li>
                  <code>latest-<i>N</i></code>
                  <?php echo $I18N->msg( 'url-structure-special-range-latest-n' ); ?>
                </li>
                <li>
                  <code>last-week</code>
                  <?php echo $I18N->msg( 'last-week' ); ?>
                </li>
                <li>
                  <code>this-month</code>
                  <?php echo $I18N->msg( 'this-month' ); ?>
                </li>
                <li>
                  <code>last-month</code>
                  <?php echo $I18N->msg( 'last-month' ); ?>
                </li>
              </ul>
            </dd>
            <dt>start</dt>
            <dd>
              <?php echo $I18N->msg( 'url-structure-start-date', array( 'variables' => array( '<code>YYYY-MM-DD</code>', '<code>end</code>' ), 'parsemag' => true ) ); ?>
            </dd>
            <dt>end</dt>
            <dd>
              <?php echo $I18N->msg( 'url-structure-end-date', array( 'variables' => array( '<code>YYYY-MM-DD</code>' ), 'parsemag' => true ) ); ?>
            </dd>
            <dt>source</dt>
            <dd>
              <?php echo $I18N->msg( 'url-structure-source', array( 'variables' => array( '<code>pageviews</code>', '<code>unique-devices</code>' ), 'parsemag' => true ) ); ?>
            </dd>
            <dt>platform</dt>
            <dd>
              <?php echo $I18N->msg( 'url-structure-platform', array( 'variables' => array( '<code>all-access</code> (' . strtolower( $I18N->msg( 'default' ) ) . ')', '<code>desktop</code>', '<code>mobile-app</code>', '<code>mobile-web</code>' ), 'parsemag' => true ) ); ?>
            </dd>
            <dt>agent</dt>
            <dd>
              <?php echo $I18N->msg( 'url-structure-agent', array( 'variables' => array( '<code>user</code>', '<code>spider</code>', '<code>bot</code>', '<code>all-agents</code>' ), 'parsemag' => true ) ); ?>
            </dd>
          </dl>
        </div>
        <div class="col-lg-12 text-center tm">
          <a href="/siteviews">
            <?php echo $I18N->msg( 'faq-return-to', array( 'variables' => array( $I18N->msg( 'siteviews-title' ) ), 'parsemag' => true ) ); ?>
          </a>
        </div>
        <?php $currentApp = "siteviews"; ?>
        <?php include "../../_footer.php"; ?>
      </main>
    </div>
  </body>
</html>