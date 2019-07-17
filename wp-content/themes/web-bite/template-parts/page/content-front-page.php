<section class="home-section text-center">
    <div class="home-wrapper">
        <img src="<?php echo get_template_directory_uri()?>/assets/img/home_logo.png" alt="WEB-BITE">
        <h1 class="mobile-title">Web-bite</h1>
        <h2>Strony internetowe dla każdego. Szybko i na temat.</h2>
        <button class="btn-checkout"><span>Sprawdź</span></button>
    </div>
    <div class="btn-checkout-mobile"></div>
</section>
<section class="section-checkout">
    <div class="blocks-wrapper">
        <div class="block services">
            <h3>Oferta</h3>
        </div>
        <div class="block gallery">
            <h3>Realizacje</h3>
        </div>
        <div class="block contact">
            <h3>Kontakt</h3>
        </div>
    </div>
</section>
<section class="section-services">
    <div class="services">
        <button class="btn-close-section"></button>
        <h1>Oferta</h1>
        <p class="semi-bold">Wykonuję między innymi:</p>
        <ul>
            <li>- strony oraz aplikacje internetowe spełniające współczesne wymagania rynku</li>
            <li>- w pełni dostosowany do potrzeb WordPress</li>
            <li>- web-design, loga, broszury, plakaty reklamowe itp.</li>
            <li>- administracja WWW</li>
        </ul>
        <p class="more-details">Po więcej szczegółów zapraszam do kontaktu.</p>
        <p>Do każdego projektu podchodzę indywidualnie. Cena zależna jest od stopnia zaawansowania pod kątem design’u, funkcjonalności w niej zawartych oraz od ogólnych rozmiarów całego projektu.</p>
    </div>
</section>
<section class="section-gallery">
    <div class="modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-labelledby="galleryModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img id="modal-image">
                </div>
            </div>
        </div>
    </div>
    <div class="gallery">
        <button class="btn-close-section"></button>
        <h1>Przykładowe realizacje</h1>
        <div data-simplebar class="examples-wrapper">
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img id="img-modal-open" src="<?php echo get_template_directory_uri()?>/assets/img/gallery/project1.webp" class="card-img" data-toggle="modal" data-target="#galleryModal" alt="project 1">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Przykładowy tytuł</h5>
                                    <p class="card-text">Przykładowy krótki opis projektu.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img id="img-modal-open" src="<?php echo get_template_directory_uri()?>/assets/img/gallery/project2.webp" class="card-img" data-toggle="modal" data-target="#galleryModal" alt="project 2">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Przykładowy tytuł</h5>
                                    <p class="card-text">Przykładowy krótki opis projektu.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4 ">
                                <img id="img-modal-open" src="<?php echo get_template_directory_uri()?>/assets/img/gallery/project3.webp" class="card-img" data-toggle="modal" data-target="#galleryModal" alt="project 3">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Przykładowy tytuł</h5>
                                    <p class="card-text">Przykładowy krótki opis projektu.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4 ">
                                <img id="img-modal-open" src="<?php echo get_template_directory_uri()?>/assets/img/gallery/project4.webp" class="card-img" data-toggle="modal" data-target="#galleryModal" alt="project 4">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Przykładowy tytuł</h5>
                                    <p class="card-text">Przykładowy krótki opis projektu.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</section>
<section class="section-contact">
    <div class="contact">
        <button class="btn-close-section"></button>
        <h1>Kontakt</h1>
        <p>Dostępny jestem prawie zawsze. Głównie w godzinach od 11 do 22.<br> Na maile staram się odpowiadać jak najszybciej.</p>
        <p>telefon: 123 456 789 <br> mail: kontakt@web-bite.pl</p>
    </div>
</section>