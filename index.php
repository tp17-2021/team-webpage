<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <title>E-voľby | TP FIIT</title>
        <link rel="stylesheet" href="dist/app.css">
        <script src="dist/app.js"></script>
    </head>
    <body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
            <div class="container-lg">
                <a class="navbar-brand" href="#">E-voľby</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#advantages">Výhody</a>
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
        <section id="hero" class="py-5" style="background-image: url(img/hero.jpg)">
            <div class="hero-content container-lg">
                <h1 class="text-center">Prvé elektronické voľby na Slovensku</h1>
            </div>
            <div class="overlay"></div>
        </section>

        <section id="advantages" class="py-5">
            <div class="container-lg">
                <h2 class="text-center mb-4">Výhody nášho riešenia</h2>
                <div class="row g-5">
                    <?php for ($i = 0; $i < 4; $i++): ?>
                        <div class="col-md-6">
                            <div class="advantage p-5">
                                <h4 class="advantage-name">Výhoda</h4>
                                <div class="advantage-description">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been therieially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </section>
        <section id="team" class="py-5">
            <div class="container-lg">
                <h2 class="text-center mb-4">Tím</h2>
                <div class="row g-4">
                    <?php for ($i = 0; $i < 8; $i++): ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="member">
                            <div class="member-image">
                                <div class="image-wrapper fixed-image-ratio-1-1 rounded mb-3">
                                    <img src="img/biden.jpg" alt="member image">
                                </div>
                            </div>
                            <h4 class="member-name">Joe Biden</h4>
                            <div class="member-description">Lorem ipsum dolor sit amet, consus molestiae numquam quaerat quam repellendus saepe! Autem distinctio eos magnam molestias praesentium quidem tempora voluptatem voluptates!</div>
                        </div>
                    </div>
                    <?php endfor; ?>
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
        <section id="contact" class="py-5">
            <div class="container-lg">
                <h2 class="text-center mb-4">Kontakt</h2>
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <h4 class="text-center"><a href="mailto:tim172021@googlegroups.com">tim172021@googlegroups.com</a></h4>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="bg-dark text-white py-3">
        <div class="text-center">
            &copy; 2021 E-voľby
        </div>
    </footer>
    </body>
</html>
