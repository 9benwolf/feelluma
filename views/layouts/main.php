<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-W7LNMX6J');
    </script>
    <!-- End Google Tag Manager -->

    <?php $this->registerCssFile('@web/css/fonts.css'); ?>

    <title><?= $this->title ?></title>

    <?php if (isset($this->blocks['pageStyles'])): ?>
        <?= $this->blocks['pageStyles'] ?>
    <?php endif; ?>

    <?php $this->head() ?>
    <meta name="facebook-domain-verification" content="tz73g4t6cjrjh4ndnqos79pt96xo22" />
</head>

<body class="min-h-screen">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W7LNMX6J"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php $this->beginBody() ?>

    <?php if ($this->params['showNavbar'] ?? true): ?>
        <header id="header">
            <?= $this->blocks['customHeader'] ?? $this->render('/partials/main-nav') ?>
        </header>
    <?php endif; ?>

    <main id="main" class="" role="main">
        <?= $content ?>
    </main>

    <?php if ($this->params['showFooter'] ?? true): ?>
        <footer id="footer">
            <?= $this->blocks['customFooter'] ?? $this->render('/partials/main-footer') ?>
        </footer>
    <?php endif; ?>

    <?php if (isset($this->blocks['pageScripts'])): ?>
        <?= $this->blocks['pageScripts'] ?>
    <?php endif; ?>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>