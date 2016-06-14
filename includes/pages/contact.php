<div class="container-fluid" id="wrapper">
    <div class="container">
            <div class="row">
            <div class="col-lg-12 col-sm-12">
                <p class="page-title">CONTACT</p>
            </div>    
        </div>
        <div class="row content">
            <div class="col-md-12">
                <div class="col-md-6 col-xs-12 col-black">
                    <div class="row">
                    <div class="col-sm-6 agence-detail">
                        <h3>PARIS</h3>
                        <p class="address">25, Rue d'Hauteville<br>75010 Paris</p>
                        <p class="address">Tél : +33 1 43 18 01 07<br></p>
                    </div>
                    
                    <div class="col-sm-6 agence-detail">
                        <h3>MONTR&Eacute;AL</h3>
                        <p class="address">50 Rue Queen, bureau 401<br>Montréal, QC H3C 2N5</p>
                        <p class="address">Tél : +1 (514) 871 0775<br></p>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12"><p class="subtext">Vous êtes intéressés par notre approche et souhaitez en découvrir plus sur nous. Merci de nous envoyer un <?php echo EMAIL_SING_MIN; ?> en choisissant le sujet qui vous intéresse. Nous prendrons contact rapidement.</p></div></div>
                </div>
                <div class="col-md-6 col-xs-12 col-white" align="center">
                    <div id="form-content">
                    <form action="#" method="post" class="form-contact">
                        <input type="text" class="form-input" name="nom" placeholder="Nom" id="form-nom">
                        <input type="text" class="form-input" name="societe" placeholder="Société" id="form-societe">
                        <input type="text" class="form-input" name="email" placeholder="E-mail" id="form-email">
                        <p class="division">Don't type anything : <input type="text" name="prenom" id="prenom"></p>
                        <input type="text" class="form-input" name="sujet" placeholder="Sujet" id="form-sujet" value=<?php if(ISSET($_GET['subject'])){echo "\"".$_GET['subject']."\"";}else{echo "\"\"";} ?> >
                        <textarea class="form-input" name="message" data-autoresize placeholder="Message" id="form-message"></textarea>
                        <input type="submit" value="ENVOYER" class="jr-button">
                    </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>