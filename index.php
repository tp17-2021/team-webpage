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
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
            <div class="container-lg">
                <a class="navbar-brand" href="#"><img src="img/logo.svg" alt="team logo" class="team-logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#advantages">Výhody</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#voting-proces">Ako votiť</a>
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
        <section id="hero" class="has-background-image has-overlay text-white py-5" style="background-image: url(img/hero.jpg)">
            <div class="inner-content container-lg">
                <h1 class="text-center">Prvé elektronické voľby na Slovensku</h1>
                <div class="mt-5">
                    <div class="text-center">
                        <a href="#voting-proces" class="btn btn-secondary btn-lg">Ako fungujú naše voľby</a>
                    </div>
                </div>
            </div>
            <div class="overlay"></div>
        </section>

        <section id="advantages" class="py-5">
            <div class="container-lg">
                <h2 class="text-center mb-4">Výhody nášho riešenia</h2>
                <div class="row g-5">
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
        <section id="voting-proces" class="has-background-image has-overlay py-5" style="background-image: url(img/parliament.png)">
            <div class="container-lg inner-content">
                <h2 class="text-center text-white mb-4">Ako voliť</h2>
                <div class="row">
                    <div class="col-md-6 mb-0 mb-md-0">
                        <div class="accordion accordion-flush" id="voting-accordion">
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
                    <div class="col-md-6"></div>
                </div>
            </div>
            <div class="overlay"></div>
        </section>
        <section id="team" class="py-5">
            <div class="container-lg overflow-hidden">
                <h2 class="text-center mb-4">Tím</h2>
                <div class="row g-4">
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
        <section id="documents" class="py-5">
            <div class="container-lg">
                <h2 class="text-center mb-4">Dokumenty</h2>
                <div class="row">

                </div>
            </div>
        </section>
    </main>
    <footer id="contact" class="footer has-background-image has-overlay text-white py-5" style="background-image: url(img/footer.png)">
        <div class="container-lg inner-content">
            <div class="row">
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
