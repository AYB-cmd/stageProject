<?php include "../lang/fr.php"; ?>
<?php $section = "apropos"; ?>

<?php include "../includes/header.php" ?>

<section class="section section-height-3 bg-white m-0 border-0">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 pb-sm-4 pb-lg-0 pr-lg-5 mb-sm-5 mb-lg-0">
                        <h2 class="text-color-dark font-weight-normal text-6 mb-2">Qui <strong>sommes-nous ?</strong></h2>
                        <p class="lead"><?php echo $quiSommesNous1 ?> </p>
                        <p class="pr-5 mr-5"><?php echo $quiSommesNous2 ?></p>
                    </div>
                    <div class="col-sm-8 col-md-6 col-lg-4 offset-sm-4 offset-md-4 offset-lg-2 mt-sm-5" style="top: 1.7rem;">
                        <img src="../img/generic/generic-corporate-3-1.jpg" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="300" style="top: 10%; left: -50%;" alt="" />
                        <img src="../img/generic/generic-corporate-3-2.jpg" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" style="top: -33%; left: -29%;" alt="" />
                        <img src="../img/generic/generic-corporate-3-3.jpg" class="img-fluid position-relative appear-animation mb-2" data-appear-animation="expandIn" data-appear-animation-delay="600" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-height-3 bg-color-grey-scale-1 py-2 m-0 border-0">
            <div class="container ">
                <div class="row mt-5 pt-3 py-4">
                    <div class="col-md-6">
                        <div class="toggle toggle-primary toggle-simple m-0" data-plugin-toggle>
                            <section class="toggle active mt-0">
                                <a class="toggle-title">NOTRE MISSION</a>
                                <div class="toggle-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. Etiam nec viverra arcu. Morbi vitae augue quam. Nullam ac laoreet libero.</p>
                                </div>
                            </section>
                            <section class="toggle">
                                <a class="toggle-title">NOTRE VISION</a>
                                <div class="toggle-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor.</p>
                                </div>
                            </section>
                            <section class="toggle">
                                <a class="toggle-title">POURQUOI NOUS</a>
                                <div class="toggle-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor.</p>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img id="notre" src="../img/generic/generic-corporate-3-1.jpg">
                    </div>
                </div>
            </div>
        </section>
        <?php include "../includes/promo.php" ?>
        <?php include "../includes/footer.php" ?>
