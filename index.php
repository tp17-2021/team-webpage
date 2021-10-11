<?php $config = require_once 'config.php'; ?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <title><?php echo $config['site_title']; ?></title>
        <link rel="stylesheet" href="dist/app.css">
        <script src="dist/app.js"></script>
    </head>
    <body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-light">
            <div class="container-lg">
                <a class="navbar-brand" href="#"><img src="img/logo.svg" alt="team logo" class="team-logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
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
        <section id="hero" class="has-background-image has-overlay text-white py-5 py-lg-7" style="background-image: url(img/hero.jpg)">
            <div class="inner-content container-lg">
                <h1 class="section-title font-extra-bold">Prvé elektronické <br>voľby na Slovensku</h1>
                <div class="mt-5">
                    <div class="text-center">
                        <a href="#voting-process" class="btn btn-secondary btn-lg">Ako fungujú naše voľby</a>
                    </div>
                </div>
            </div>
            <div class="overlay"></div>
        </section>

        <section id="advantages">
            <div class="container-lg overflow-hidden py-5 py-lg-7">
                <h2 class="section-title">Výhody nášho riešenia</h2>
                <div class="row g-4 g-md-6">
                    <?php foreach ($config['advantages'] as $advantage): ?>
                        <div class="col-md-6">
                            <div class="advantage p-5">
                                <h4 class="advantage-name"><?php echo $advantage['name'] ?></h4>
                                <div class="advantage-description">
                                    <?php echo $advantage['description'] ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <section id="voting-process" class="has-background-image has-overlay py-5 py-lg-7" style="background-image: url(img/parliament.png)">
            <div class="container-lg inner-content">
                <h2 class="section-title text-white">Ako voliť</h2>
                <div class="row">
                    <div class="col-md-6 mb-0 mb-md-0">
                        <div class="accordion" id="voting-accordion">
                            <?php $items_count = count($config['voting_items']); ?>
                            <?php foreach ($config['voting_items'] as $key => $item): ?>
                                <div class="accordion-item <?php if($key < $items_count - 1) echo 'mb-3'; ?>">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item-<?php echo $key; ?>" aria-expanded="false" aria-controls="item-<?php echo $key; ?>">
                                            <?php echo $item['name']; ?>
                                        </button>
                                    </h2>
                                    <div id="item-<?php echo $key; ?>" class="accordion-collapse collapse" aria-labelledby="item-<?php echo $key; ?>" data-bs-parent="#voting-accordion">
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
                                    <?php if(!empty($member['img_path'])): ?>
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
                <div class="row g-4 g-lg-7 justify-content-center">
                    <?php foreach ($config['document_groups'] as $document_group): ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="document-group p-5 bg-white">
                                <div class="document-group-icon-wrapper">
                                    <div class="icon-circle">
                                        <i class="fas fa-file-word"></i>
                                    </div>
                                </div>
                                <h4 class="document-group-name"><?php echo $document_group['name'] ?></h4>
                                <div class="document-group-description">
                                    <?php echo $document_group['description'] ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="overlay"></div>
        </section>
        <section id="progress" class="py-5 py-lg-7">
            <div class="container-lg">
                <h2 class="section-title">Výsledky našej práce</h2>
                <div class="row mb-5">
                    <div class="col-md-8 mx-auto">
                        <div class="d-flex justify-content-between">
                            <div>Week1</div>
                            <div>Week2</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo $config['progress_bar_width']; ?>%;"  aria-valuenow="<?php echo $config['progress_bar_width']; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $config['progress_bar_label']; ?></div>
                        </div>
                    </div>
                </div>

                <div class="sprint-results">
                    <?php foreach ($config['sprint_results'] as $index => $sprint_result): ?>
                    <?php
                        $sprint_start =  DateTime::createFromFormat('d.m.Y', $sprint_result['date']);
                    ?>
                    <div class="sprint-result">
                        <div class="row g-0 align-items-center">
                            <div class="col-auto d-none d-md-block <?php if($index % 2 == 1) echo 'order-1'; ?>">
                                <div class="circle-wrapper <?php if($index % 2 == 1) echo 'right'; ?>">
                                    <div class="circle">
                                    <span>
                                        <?php echo $index + 1; ?>
                                    </span>
                                    </div>
                                    <div class="connector">
                                        <div class="line"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col <?php if($index % 2 == 1) echo 'order-0'; ?>">
                                <div class="box">
                                    <div class="header py-3 px-3 px-md-5 <?php if($index % 2 == 1) echo 'order-2'; ?>"><?php echo $sprint_start->format('d.m')."&nbsp;- <br>".$sprint_start->format('d.m.Y') ?></div>
                                    <div class="content p-3">
                                        <h3><?php echo $sprint_result['title'] ?></h3>
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
    <footer id="contact" class="footer has-background-image has-overlay text-white py-5 py-lg-7" style="background-image: url(img/footer.png)">
        <div class="container-lg inner-content">
            <div class="row align-items-end">
                <div class="col-md-6 mb-5 mb-md-0">
                    <img src="img/logo_white.svg" alt="team logo" class="team-logo mb-4">
                    <h2 class="mb-4">Prvé voľby na Slovensku</h2>
                    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam atque eius eveniet iste modi neque nihil nobis, nostrum quas quibusdam quis quisquam recusandae repellendus repudiandae rerum sit ullam voluptates.</div>
                </div>
                <div class="col-md-6">
                    <h2 class="mb-4">Tím č.17</h2>
                    <a href="mailto:<?php echo $config['email']; ?>" class="text-reset"><?php echo $config['email']; ?></a>
                    <div class="mt-5">
                        <img src="img/fiit_logo.png" alt="fiit logo">
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </footer>
    </body>
</html>
