<?php
$config = require_once 'config.php';
require_once 'functions.php';
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title><?php echo $config['site_title']; ?></title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png"/>
    <link rel="stylesheet" href="<?php echo get_file_time('dist/app.css'); ?>">
    <script src="<?php echo get_file_time('dist/app.js'); ?>"></script>
</head>
<body class="homepage">
<header>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light">
        <div class="container-lg">
            <a class="navbar-brand" href="#"><img src="assets/img/logo.svg" alt="team logo" class="team-logo"></a>
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
                        <a class="nav-link" aria-current="page" href="#project-architecture-design">Návrh riešenia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#progress">Šprinty</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#documents">Dokumenty</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#team">Tím</a>
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
    <section id="hero" class="text-white overflow-hidden">
        <div class="inner-content container-lg">
            <div class="row gx-md-5 align-items-center">
                <div class="col-md-7 col-lg-6 mb-5 mb-md-0 text-center text-md-start">
                    <h1 class="font-extra-bold"><?php echo $config['main_title']; ?></h1>
                    <div class="subtitle constrained-width-text"><?php echo $config['main_subtitle']; ?></div>
                </div>
                <div class="col-md-5 col-lg-6">
                    <div class="hero-icons">
                        <img src="assets/img/hero_icons.svg" alt="hero icons">
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </section>

    <?php if (0): ?>
        <!-- Slider -->
        <div class="slider-wrapper" style="display: none">
            <div class="main-slider">
                <div class="slide hero-slider-slide has-background-image has-overlay text-white"
                     style="background-image: url('assets/img/hero.jpg')">
                    <div class="inner-content container-lg py-5 py-lg-7">
                        <h1 class="section-title font-extra-bold"><?php echo $config['main_title']; ?></h1>
                        <div class="motto text-center constrained-width-text"><?php echo $config['main_subtitle']; ?></div>
                        <div class="mt-5">
                            <div class="text-center">
                                <a href="#voting-process" class="btn btn-secondary btn-lg">Ako fungujú naše voľby</a>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>
                <div class="slide hero-slider-slide has-background-image has-overlay text-white"
                     style="background-image: url('assets/img/hero.jpg')">
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
    <?php endif; ?>

    <section id="advantages" class="position-relative overflow-hidden">
        <div class="pattern">
            <img src="assets/img/patterns/circuit_pattern.svg">
        </div>
        <div class="container-lg py-5 py-lg-7">
            <h2 class="section-title mb-6" data-aos="fade-up">Prečo naše riešenie</h2>
            <div class="row g-4 g-md-5 g-lg-6 justify-content-center">
                <?php foreach ($config['advantages'] as $key => $advantage): ?>
                    <div class="col-md-6 d-flex">
                        <div class="advantage p-5 h-100 w-100" data-aos="fade-up">
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

    <section id="voting-process" class="bg-primary pos">
        <div class="container-lg inner-content py-5 py-lg-7">
            <h2 class="section-title text-white">Ako voliť</h2>
            <div class="row">
                <div class="col-md-6 col-lg-5 mb-5 mb-md-0 mt-0">
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
                                <div id="item-<?php echo $key; ?>"
                                     class="accordion-collapse collapse <?php echo ($key == 0) ? " show" : ""; ?> "
                                     aria-labelledby="item-<?php echo $key; ?>" data-bs-parent="#voting-accordion">
                                    <div class="accordion-body font-light"><?php echo $item['description']; ?></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7">
                    <div class="d-flex">
                        <img class="voting-illustration mx-auto" src="assets/img/illustrations/election_process.svg"
                             alt="Priebeh volieb">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require_once 'our-solution.php'; ?>

    <section id="progress" class="position-relative">
        <div class="container-lg py-5 py-lg-7">
            <h2 class="section-title" data-aos="fade-up">Výsledky našej práce</h2>
            <div class="row mb-7">
                <div class="col-md-8 mx-auto progress-wrapper" data-aos="fade-up">
                    <div class="d-flex justify-content-center">
                        <div class="week">Týždeň <?php echo $config["current_week_number"]; ?>
                            / <?php echo $config["total_weeks_number"]; ?></div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar"
                             style="width: <?php echo $config['progress_bar_width']; ?>%; min-width: 18%;"
                             aria-valuenow="<?php echo $config['progress_bar_width']; ?>" aria-valuemin="0"
                             aria-valuemax="100"><?php echo $config['progress_bar_label']; ?></div>
                    </div>
                </div>
            </div>

            <div id="sprint-results" class="sprint-results">
                <?php foreach ($config['sprint_results'] as $index => $sprint_result): ?>
                    <?php
                    $sprint_start = DateTime::createFromFormat('d.m.Y', $sprint_result['date']);

                    if ($index == count($config['sprint_results']) - 1) {
                        $sprint_end = clone $sprint_start;
                        $sprint_end = $sprint_end->add(new DateInterval('P22D'));
                    } else {
                        $sprint_end = DateTime::createFromFormat('d.m.Y', $config['sprint_results'][$index + 1]['date']);
                        $sprint_end = $sprint_end->sub(new DateInterval('P1D'));
                    }

                    ?>
                    <div class="sprint-result" data-aos="fade-up">
                        <div class="row g-0 align-items-center">
                            <div class="col-auto d-none d-lg-block <?php if ($index % 2 == 1) echo 'order-1'; ?>">
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
                                    <div class="header py-3 px-4 px-md-5 text-center <?php if ($index % 2 == 1) echo 'order-md-2'; ?>  <?php echo 'bg-blue-shade-' . ($index + 1); ?>">
                                        <?php echo $sprint_start->format('d.m.Y') . "<br> - <br>" . $sprint_end->format('d.m.Y') ?>
                                    </div>
                                    <div class="content py-3 px-4">

                                        <h4 class="title mb-1"><?php echo $sprint_result['title'] ?></h4>
                                        <?php if (array_key_exists('tags', $sprint_result) && count($sprint_result['tags'])): ?>
                                            <div class="mb-3">
                                                <?php foreach ($sprint_result['tags'] as $i2 => $tag): ?>
                                                    <span class="badge rounded-pill bg-primary my-1"><?php echo $tag; ?></span>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>

                                        <div class="font-light text">
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

    <section id="documents" class="bg-primary overflow-hidden">
        <div class="container-lg inner-content py-5 py-lg-7">
            <h2 class="section-title text-white" data-aos="fade-up">Dokumenty</h2>
            <div class="width-constraint">
                <div class="row g-4 g-lg-7 justify-content-center">
                    <?php foreach ($config['document_groups'] as $key => $document_group): ?>
                        <div class="col-6 d-flex">
                            <div class="document-group-card p-4 p-sm-5 w-100 h-100" data-bs-toggle="modal"
                                 data-aos="fade-up"
                                 data-bs-target="#document-modal-group-<?php echo $key + 1; ?>">
                                <div class="document-group-icon-wrapper">
                                    <div class="icon-circle">
                                        <img src="<?php echo $document_group['iconpath']; ?>"
                                             alt="<?php echo $document_group['name']; ?>">
                                    </div>
                                </div>
                                <h4 class="document-group-name font-bold font-exo"><?php echo $document_group['name']; ?></h4>
                                <div class="document-group-description font-light">
                                    <?php echo $document_group['description'] ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- MODALS -->
    <?php foreach ($config['document_groups'] as $key => $document_group): ?>
        <div id="document-modal-group-<?php echo $key + 1; ?>" class="modal document-group-modal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn btn-back" data-bs-dismiss="modal">
                            <!--                            <i class="fas fa-arrow-left"></i>-->
                            <!--                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">-->
                            <!--                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>-->
                            <!--                            </svg>-->
                            <img class="go-back-icon" src="assets/img/icons/arrow-left-black.svg" alt="go back icon">
                        </button>
                        <h5 class="modal-title font-exo text-center w-100"><?php echo $document_group['name']; ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4 h-100 d-none d-md-flex justify-content-center">
                                <div class="document-group-card small p-4">
                                    <div class="document-group-icon-wrapper">
                                        <div class="icon-circle">
                                            <img src="<?php echo $document_group['iconpath']; ?>"
                                                 alt="<?php echo $document_group['name']; ?>">
                                        </div>
                                    </div>
                                    <h4 class="document-group-name font-bold font-exo"><?php echo $document_group['name'] ?></h4>
                                    <div class="document-group-description font-light">
                                        <?php echo $document_group['description'] ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-8">
                                <?php if (empty($document_group['documents'])): ?>
                                    <div class="d-flex justify-content-center">
                                        <span class="no-documents-message">Zatiaľ tu nie sú žiadne dokumenty</span>
                                    </div>
                                <?php endif; ?>

                                <table class="w-100 table document-table table-responsive table-striped">
                                    <tbody>
                                    <?php foreach ($document_group['documents'] as $index => $document): ?>
                                        <tr>
                                            <?php $file_size_string = get_file_size($document['filepath']); ?>
                                            <td class="name">
                                                <?php echo $document['name']; ?>
                                            </td>
                                            <td class="size"><?php if (!empty($file_size_string)) {
                                                    echo $file_size_string;
                                                } ?></td>
                                            <td class="date"><?php echo $document['date']; ?></td>
                                            <td class="actions">
                                                <div class="icons">
                                                    <a href="<?php echo $document['filepath']; ?>" target="_blank"><i
                                                                class="fas fa-download"></i></a>
                                                </div>
                                            </td>
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

    <section id="team" class="overflow-hidden">
        <div class="container-lg py-5 py-lg-7">
            <h2 class="section-title">Tím</h2>
            <div class="row g-4 g-lg-6">
                <?php foreach ($config['team_members'] as $member): ?>
                    <div class="col-6 col-lg-3">
                        <div class="member">
                            <div class="member-image">
                                <div class="image-wrapper fixed-image-ratio-1-1 rounded mb-3">
                                    <?php if (!empty($member['img_path'])): ?>
                                        <img src="<?php echo $member['img_path']; ?>"
                                             alt="<?php echo $member['name']; ?>">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <h4 class="member-name"><?php echo $member['name']; ?></h4>
                            <div class="member-description d-none d-sm-block">
                                <?php echo $member['description']; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

</main>
<footer id="contact" class="footer text-white bg-primary">
    <div class="container-lg inner-content py-5 py-lg-7">
        <div class="row align-items-end">
            <div class="col-md-6 mb-5 mb-md-0">
                <img src="assets/img/logo_white.svg" alt="team logo" class="team-logo mb-4">
                <h2 class="mb-2 font-exo"><?php echo $config['main_title']; ?></h2>
                <h4 class="mb-4 font-exo"><?php echo $config['main_subtitle']; ?></h4>
                <div class="font-light">
                    <?php echo $config['footer_credits']; ?>
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="mb-4 font-exo font-semi-bold">Tím 17</h2>
                <ul class="list-unstyled">
                    <li><a href="mailto:<?php echo $config['email']; ?>"
                           class="text-reset">
                            <svg style="max-height: 1rem; fill: white; margin-right: .5rem;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M207.8 20.73c-93.45 18.32-168.7 93.66-187 187.1c-27.64 140.9 68.65 266.2 199.1 285.1c19.01 2.888 36.17-12.26 36.17-31.49l.0001-.6631c0-15.74-11.44-28.88-26.84-31.24c-84.35-12.98-149.2-86.13-149.2-174.2c0-102.9 88.61-185.5 193.4-175.4c91.54 8.869 158.6 91.25 158.6 183.2l0 16.16c0 22.09-17.94 40.05-40 40.05s-40.01-17.96-40.01-40.05v-120.1c0-8.847-7.161-16.02-16.01-16.02l-31.98 .0036c-7.299 0-13.2 4.992-15.12 11.68c-24.85-12.15-54.24-16.38-86.06-5.106c-38.75 13.73-68.12 48.91-73.72 89.64c-9.483 69.01 43.81 128 110.9 128c26.44 0 50.43-9.544 69.59-24.88c24 31.3 65.23 48.69 109.4 37.49C465.2 369.3 496 324.1 495.1 277.2V256.3C495.1 107.1 361.2-9.332 207.8 20.73zM239.1 304.3c-26.47 0-48-21.56-48-48.05s21.53-48.05 48-48.05s48 21.56 48 48.05S266.5 304.3 239.1 304.3z"/></svg>
                            <?php echo $config['email']; ?></a>
                    </li>
                    <li><a href="<?php echo $config['github_link']; ?>" class="text-reset" target="_blank">
                            <svg style="max-height: 1rem; fill: white; margin-right: .5rem;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg>
                            <?php echo $config['github_link']; ?></a>
                    </li>
                </ul>
                <div class="mt-5">
                    <a href="https://www.fiit.stuba.sk"><img src="assets/img/fiit_logo.png" alt="fiit logo"></a>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
