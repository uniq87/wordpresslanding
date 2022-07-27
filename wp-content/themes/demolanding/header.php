<!DOCTYPE html>
<html>

<head>
    <title>Landing</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <? wp_head(); ?>
</head>

<body>
    <header>
        <section>
            <div class="container">
                <div class="block__logo">
                    <? the_custom_logo(); ?>
                    <!-- <img src="images/logo.svg"> -->
                </div>
                <div class="block__content">
                    <div class="content-inner-image">
                        <img src="<?=get_template_directory_uri();?>/assets/images/main_pic.png">
                    </div>
                    <div class="content-header">
                        <h1 class="header-h1">Экономия нервов и денег — интернет К-Телеком
                        </h1>
                    </div>
                    <div class="content-list">
                        <ul class="content-list-items">
                            <li>5 тарифов для многоквартирных и 4 для частных домов</li>
                            <li>безлимит подключенных устройств</li>
                            <li>комфортная поддержка 24/7</li>
                        </ul>
                    </div>
                    <div class="content-button">Подробнее</div>
                </div>
            </div>
        </section>
    </header>