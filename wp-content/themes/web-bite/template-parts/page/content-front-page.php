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
        <?php the_field('oferta', 7); ?>        
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
                <?php            
                    $images = acf_photo_gallery('galeria', 7);           
                    if( count($images) ):                    
                        foreach($images as $image):                        
                            $title = $image['title'];
                            $caption= $image['caption'];
                            $full_image_url= $image['full_image_url'];
                            $thumbnail_image_url= $image['thumbnail_image_url'];                                                
                ?>   
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img id="img-modal-open" srcset="<?php echo $thumbnail_image_url; ?>" alt="<?php echo $title; ?>" 
                                title="<?php echo $title; ?>" class="card-img" data-toggle="modal" data-target="#galleryModal" 
                                src="<?php echo $full_image_url; ?>">                                                    
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $title; ?></h5>
                                    <p class="card-text"><?php echo $caption; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>                              
                <?php endforeach; endif; ?>                                         
            </div>
        </div>
    </div>
</section>
<section class="section-contact">
    <div class="contact">
        <button class="btn-close-section"></button>
        <h1>Kontakt</h1>
        <?php the_field('kontakt', 7); ?>        
    </div>
</section>