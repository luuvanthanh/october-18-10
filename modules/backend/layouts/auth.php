<!DOCTYPE html>
<html lang="<?= App::getLocale() ?>" class="no-js">

<head>
    <link rel="icon" type="image/png" href="<?= e(Backend\Models\BrandSetting::getFavicon() ?: Backend::skinAsset('assets/images/favicon.png')) ?>">
    <title><?= __('Administration Area') ?> | <?= e(Backend\Models\BrandSetting::get('app_name')) ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
    <meta name="robots" content="noindex">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="backend-base-path" content="<?= Backend::baseUrl() ?>">
    <meta name="csrf-token" content="<?= csrf_token() ?>">
    <meta name="turbo-visit-control" content="disable">
    <?php
    $coreBuild = Backend::assetVersion();

    $styles = [
        Backend::skinAsset('assets/vendor/bootstrap/bootstrap.css'),
        Backend::skinAsset('assets/css/october.css'),
    ];

    $scripts = [
        Url::asset('modules/system/assets/js/vendor/jquery.min.js'),
        Url::asset('modules/system/assets/js/framework-bundle.min.js'),
        Backend::skinAsset('assets/vendor/bootstrap/bootstrap.min.js'),
        Backend::skinAsset('assets/js/vendor-min.js'),
        Backend::skinAsset('assets/js/october-min.js'),
        Url::asset('modules/system/assets/js/vue.bundle-min.js'),
        Url::to('modules/backend/assets/js/auth/auth.js'),
        Url::asset('modules/system/assets/js/lang/lang.' . App::getLocale() . '.js'),
    ];
    ?>
    <?php foreach ($styles as $style) : ?>
        <link href="<?= $style . '?v=' . $coreBuild ?>" rel="stylesheet" importance="high" />
    <?php endforeach ?>

    <?php foreach ($scripts as $script) : ?>
        <script src="<?= $script . '?v=' . $coreBuild ?>" importance="high"></script>
    <?php endforeach ?>

    <?php if (!Config::get('backend.enable_service_workers', false)) : ?>
        <script>
            unregisterServiceWorkers()
        </script>
    <?php endif ?>

    <?= $this->makeAssets() ?>
    <?= Block::placeholder('head') ?>
    <?= $this->makeLayoutPartial('custom_styles') ?>
    <?= $this->fireViewEvent('backend.layout.extendHead', ['auth']) ?>
    <?php
    $customizationVars = Backend\Classes\LoginCustomization::getCustomizationVariables($this);
    $logo = $customizationVars->logo;
    $loginCustomization = $customizationVars->loginCustomization;
    $loginBackgroundType = $loginCustomization->loginBackgroundType;
    $defaultImage1x = $customizationVars->defaultImage1x;
    $defaultImage2x = $customizationVars->defaultImage2x;

    if ($loginBackgroundType === 'october_ai_images') {
        $aiImageIndex = rand(0, 8);
        $generatedImageData = Backend\Classes\LoginCustomization::getGeneratedImageData();
    }
    ?>
</head>

<body class="outer <?= $this->bodyClass ?> message-outer-layout" style="background-color: #ebfaff;">
    <div id="layout-canvas">
        <div class="layout">
            <div class="layout">
                <div class="layout-row" style="background-color: white;">

                    <div class="layout-cell theme-cell col-6" style="background-color: #ebfaff;">
                        <div class="row">
                            <img style="width: 100%;height: 100vh;" src="<?= Url::asset('/modules/backend/assets/images/baner-mequy.png') ?>" alt="" />
                        </div>
                    </div>

                    <div class="layout-cell form-cell col-6" style="border-radius: 25px">
                        <div class="outer-form-container" style="position: relative;top: 50%;left: 50%;transform: translate(-50%, -50%);">
                            <?= Block::placeholder('body') ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Flash Messages -->
    <div id="layout-flash-messages"><?= $this->makeLayoutPartial('flash_messages') ?></div>

    <?= $this->makeLayoutPartial('vue_templates') ?>
    <?= Block::placeholder('footer') ?>
</body>

</html>