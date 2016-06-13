<header id="myCarousel" class="carousel slide">
        
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/slide1.jpeg');"></div>
                <div class="carousel-caption">
                    <h2 class="carousel-title">L'AGENCE<br>JACK RUSSELL<br>S'INSTALLE &Agrave; PARIS</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/emails-intro.png');"></div>
                <div class="carousel-caption">
                    <h2 class="carousel-title-bis" id="emails-title">NOS <?php echo EMAIL_PLUR_MAJ; ?><br>CRÉATIFS</h2>
                    <p class="carousel-cta" id="emails-cta"><a href="./realisation-email.php#content">D&Eacute;COUVREZ NOS <?php echo EMAIL_PLUR_MAJ; ?> CR&Eacute;ATIFS</a></p>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/barometre-intro.png');"></div>
                <div class="carousel-caption">
                    <h2 class="carousel-title-bis-2">JACK RUSSELL<br> ET MÉDIAMÉTRIE CRÉENT<br>LE 1<sup>ER</sup> BAROM&Egrave;TRE DE L&apos;<?php echo EMAIL_SING_MAJ; ?></h2>
                    
                    
                    <p class="carousel-cta" id="barometre-cta"><a href="./barometre-email.php#section-2">D&Eacute;COUVREZ LE BAROM&Egrave;TRE</a></p>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/pige-intro.png');"></div>
                <div class="carousel-caption">
                    <h2 class="carousel-title-bis-2" id="pige-title">NOTRE PIGE<br>DÉDIÉE À L'<?php echo EMAIL_SING_MAJ; ?></h2>
                    <p class="carousel-cta" id="cta-pige-carousel"><a href="./pige-email.php#section-2">D&Eacute;COUVREZ LA PIGE <?php echo EMAIL_SING_MAJ; ?></a></p>
                </div>
            </div>
        </div>
        <!--   -->
        
        <!--   -->
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev" style="font-size:70px !important;"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next" style="font-size:70px !important;"></span>
        </a>
        <!--   -->
    </header>