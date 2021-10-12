<?php
$config = require_once 'config.php';
require_once 'functions.php';
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title><?php echo $config['site_title']; ?></title>
    <link rel="stylesheet" href="<?php echo get_file_time('dist/app.css'); ?>">
    <script src="<?php echo get_file_time('dist/app.js'); ?>"></script>
</head>
<body class="homepage">
<header>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light">
        <div class="container-lg">
            <a class="navbar-brand" href="#"><img src="img/logo.svg" alt="team logo" class="team-logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-navbar"
                    aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main-navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#advantages">Výhody</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#voting-process">Ako voliť</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#team">Tím</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#documents">Dokumenty</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#contact">Kontakt</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main>
    <section id="hero" class="has-background-image has-overlay text-white" style="background-image: url(img/hero.jpg)">
        <div class="inner-content container-lg py-5 py-lg-7">
            <h1 class="section-title font-extra-bold">Prvé elektronické <br>voľby na Slovensku</h1>
            <div class="motto text-center constrained-width-text"><?php echo $config['main_motto']; ?></div>
            <div class="mt-5">
                <div class="text-center">
                    <a href="#voting-process" class="btn btn-secondary btn-lg">Ako fungujú naše voľby</a>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </section>

    <!-- Slider -->
    <div class="slider-wrapper" style="display: none" >
        <div class="main-slider">
            <div class="slide hero-slider-slide has-background-image has-overlay text-white" style="background-image: url(img/hero.jpg)">
                <div class="inner-content container-lg py-5 py-lg-7">
                    <h1 class="section-title font-extra-bold">Prvé elektronické <br>voľby na Slovensku</h1>
                    <div class="motto text-center constrained-width-text"><?php echo $config['main_motto']; ?></div>
                    <div class="mt-5">
                        <div class="text-center">
                            <a href="#voting-process" class="btn btn-secondary btn-lg">Ako fungujú naše voľby</a>
                        </div>
                    </div>
                </div>
                <div class="overlay"></div>
            </div>
            <div class="slide hero-slider-slide has-background-image has-overlay text-white" style="background-image: url(img/hero.jpg)">
                <div class="inner-content container-lg py-5 py-lg-7">
                    <h1 class="section-title font-extra-bold">Prvé elektronické <br>voľby na Slovensku 2</h1>
                    <div class="motto text-center constrained-width-text"><?php echo $config['main_motto']; ?></div>
                    <div class="mt-5">
                        <div class="text-center">
                            <a href="#voting-process" class="btn btn-secondary btn-lg">Ako fungujú naše voľby</a>
                        </div>
                    </div>
                </div>
                <div class="overlay"></div>
            </div>
        </div>
    </div>
    <!-- Slider end -->

    <section id="advantages">
        <div class="container-lg overflow-hidden py-5 py-lg-7">
            <h2 class="section-title mb-3">Naše riešenia</h2>
            <div class="text-center constrained-width-text font-light mb-5">
                <?php echo $config['main_description']; ?>
            </div>
            <div class="row g-4 g-md-5 g-lg-6 justify-content-center">
                <?php foreach ($config['advantages'] as $advantage): ?>
                    <div class="col-md-6">
                        <div class="advantage p-5">
                            <h4 class="advantage-name"><?php echo $advantage['name'] ?></h4>
                            <div class="advantage-description font-light">
                                <?php echo $advantage['description'] ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section id="voting-process" class="has-background-image has-overlay"
             style="background-image: url(img/parliament.jpg)">
        <div class="container-lg inner-content py-5 py-lg-7">
            <h2 class="section-title text-white">Ako voliť</h2>
            <div class="row">
                <div class="col-md-6 mb-5 mb-md-0">
                    <div class="accordion" id="voting-accordion">
                        <?php $items_count = count($config['voting_items']); ?>
                        <?php foreach ($config['voting_items'] as $key => $item): ?>
                            <div class="accordion-item <?php if ($key < $items_count - 1) echo 'mb-3'; ?>">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#item-<?php echo $key; ?>" aria-expanded="false"
                                            aria-controls="item-<?php echo $key; ?>">
                                        <?php echo $item['name']; ?>
                                    </button>
                                </h2>
                                <div id="item-<?php echo $key; ?>" class="accordion-collapse collapse"
                                     aria-labelledby="item-<?php echo $key; ?>" data-bs-parent="#voting-accordion">
                                    <div class="accordion-body"><?php echo $item['description']; ?></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="" style="background-color: #1e71ab; width: 400px; height: 400px"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </section>
    <section id="team">
        <div class="container-lg overflow-hidden py-5 py-lg-7">
            <h2 class="section-title">Tím</h2>
            <div class="row g-4 g-lg-6">
                <?php foreach ($config['team_members'] as $member): ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="member">
                            <div class="member-image">
                                <div class="image-wrapper fixed-image-ratio-1-1 rounded mb-3">
                                    <?php if (!empty($member['img_path'])): ?>
                                        <img src="<?php echo $member['img_path']; ?>" alt="member image">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <h4 class="member-name"><?php echo $member['name']; ?></h4>
                            <div class="member-description">
                                <?php echo $member['description']; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section id="documents" class="has-background-image has-overlay" style="background-image: url(img/parliament2.jpg)">
        <div class="container-lg inner-content overflow-hidden py-5 py-lg-7">
            <h2 class="section-title text-white">Dokumenty</h2>
            <div class="width-constraint">
                <div class="row g-4 g-lg-7 justify-content-center">
                    <?php foreach ($config['document_groups'] as $key => $document_group): ?>
                        <div class="col-md-6">
                            <div class="document-group p-5" data-bs-toggle="modal"
                                 data-bs-target="#modal-document-group-<?php echo $key + 1; ?>">
                                <div class="document-group-icon-wrapper">
                                    <div class="icon-circle">
                                        <i class="fas fa-file-word"></i>
                                    </div>
                                </div>
                                <h4 class="document-group-name font-bold font-exo"><?php echo $document_group['name'] ?></h4>
                                <div class="document-group-description font-light">
                                    <?php echo $document_group['description'] ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </section>

    <!-- MODALS -->
    <?php foreach ($config['document_groups'] as $key => $document_group): ?>
        <div id="modal-document-group-<?php echo $key + 1; ?>" class="modal" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="font-exo"><?php echo $document_group['name']; ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <div>
                                <table class="w-100 table document-table">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($document_group['documents'] as $index => $document): ?>
                                        <tr>
                                            <td><?php echo $document['name'] ?></td>
                                            <td><?php echo $document['date'] ?></td>
                                            <td>Download > See</td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <section id="progress">
        <div class="container-lg py-5 py-lg-7">
            <h2 class="section-title">Výsledky našej práce</h2>
            <div class="row mb-7">
                <div class="col-md-8 mx-auto progress-wrapper">
                    <div class="d-flex justify-content-between">
                        <div class="week first">Week 1</div>
                        <div class="week last">Week 24</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar"
                             style="width: <?php echo $config['progress_bar_width']; ?>%;"
                             aria-valuenow="<?php echo $config['progress_bar_width']; ?>" aria-valuemin="0"
                             aria-valuemax="100"><?php echo $config['progress_bar_label']; ?></div>
                    </div>
                </div>
            </div>

            <div class="sprint-results">
                <?php foreach ($config['sprint_results'] as $index => $sprint_result): ?>
                    <?php
                    $sprint_start = DateTime::createFromFormat('d.m.Y', $sprint_result['date']);
                    $sprint_end = clone $sprint_start;
                    $sprint_end = $sprint_end->add(new DateInterval('P14D'));
                    ?>
                    <div class="sprint-result">
                        <div class="row g-0 align-items-center">
                            <div class="col-auto d-none d-md-block <?php if ($index % 2 == 1) echo 'order-1'; ?>">
                                <div class="circle-wrapper <?php if ($index % 2 == 1) echo 'right'; ?>">
                                    <div class="circle <?php echo 'border-blue-shade-' . ($index + 1); ?>">
                                    <span class="<?php echo 'font-blue-shade-' . ($index + 1); ?>">
                                        <?php echo $index + 1; ?>
                                    </span>
                                    </div>
                                    <div class="connector">
                                        <div class="line <?php echo 'bg-blue-shade-' . ($index + 1); ?>"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col <?php if ($index % 2 == 1) echo 'order-0'; ?>">
                                <div class="box">
                                    <div class="header py-3 px-3 px-md-5 <?php if ($index % 2 == 1) echo 'order-2'; ?>  <?php echo 'bg-blue-shade-' . ($index + 1); ?>">
                                        <?php echo $sprint_start->format('d.m') . "&nbsp;- <br>" . $sprint_end->format('d.m.Y') ?>
                                    </div>
                                    <div class="content py-3 px-4">
                                        <h4 class="title"><?php echo $sprint_result['title'] ?></h4>
                                        <div>
                                            <?php echo $sprint_result['description'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>
<footer id="contact" class="footer has-background-image has-overlay text-white "
        style="background-image: url(img/footer.jpg)">
    <div class="container-lg inner-content py-5 py-lg-7">
        <div class="row align-items-end">
            <div class="col-md-6 mb-5 mb-md-0">
                <img src="img/logo_white.svg" alt="team logo" class="team-logo mb-4">
                <h2 class="mb-4 font-exo">Prvé spoľahlivé <br>elektronické voľby</h2>
                <div class="font-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam atque
                    eius eveniet iste modi neque nihil nobis, nostrum quas quibusdam quis quisquam recusandae
                    repellendus repudiandae rerum sit ullam voluptates.
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="mb-4 font-exo">Tím č.17</h2>
                <a href="mailto:<?php echo $config['email']; ?>" class="text-reset"><?php echo $config['email']; ?></a>
                <div class="mt-5">
                    <img src="img/fiit_logo.png" alt="fiit logo">
                </div>
            </div>
        </div>
    </div>
    <div class="overlay" style="opacity: 0.7; background: #040e18;"></div>
</footer>
</body>
</html>
