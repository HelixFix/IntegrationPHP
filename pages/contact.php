<div class="container">
    
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42919.73167111793!2d7.290605117492282!3d47.75268062369011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47919b6c1d88946b%3A0x40a5fb99a393360!2sMulhouse!5e0!3m2!1sfr!2sfr!4v1625757663544!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" title="Carte de Mulhouse"></iframe>

    <!-- Si le formulaire n'a pas été envoyé on l'affiche -->
    <?php if (isset($_POST['maildest']) == null) { ?>

        <form method="post" action="">

            <!-- Address input -->
            <div class="form-outline mb-4">
                <input type="text" name="adddest" id="form4Example2" class="form-control" required />
                <label class="form-label" for="form4Example2">Votre adresse postal</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" name="maildest" id="form4Example2" class="form-control" required />
                <label class="form-label" for="form4Example2">Email address</label>
            </div>

            <!-- Default checkbox -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault">
                    Sujet 1
                </label>
            </div>

            <!-- Checked checkbox -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked />
                <label class="form-check-label" for="flexCheckChecked">
                    Sujet 2
                </label>
            </div>

            <br>

            <!-- Téléphone input -->
            <div class="form-outline mb-4">
                <input type="numeric" name="maildest" id="form4Example2" class="form-control" required />
                <label class="form-label" for="form4Example2">Numéro de téléphone</label>
            </div>

            <!-- Message input -->
            <div class="form-outline mb-4">
                <textarea name="contmail" class="form-control" id="form4Example3" rows="4"></textarea>
                <label class="form-label" for="form4Example3">Message</label>
            </div>


            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4" value="Envoyer">Send</button>

            <!-- anti bot -->
            <input type="text" name="pays" style="border: none;width:20px;">

        </form>


    <?php } else {

        //Headers
        $mailheaders = "From: Mon Site <toto@monsite.com>\n";
        $mailheaders .= "MIME-Version: 1.0\n";
        $mailheaders .= "Return-Path: <toto@monsite.com>\n";
        $mailheaders .= "Content-Type: text/html; charset=iso-8859-1\n";
        $mailheaders .= "X-Sender: <www.iziasys.com>\n";
        $mailheaders .= "X-Mailer: PHP\n";
        $mailheaders .= "X-abuse-contact: abuse@1and1.fr\n";
        $mailheaders .= "X-auth-smtp-user: pierre@iziasys.com\n";

        if ($_POST['pays'] == '') {
            mail($_POST['maildest'], 'Un e-mail de votre site Internet', $_POST['contmail'], $mailheaders);
        }
    ?>

        <!-- Sinon on dit : -->
        <strong>Merci de nous avoir contacter votre message sera traité rapidement.</strong>

    <?php } ?>

</div>