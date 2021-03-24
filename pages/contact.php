<div class="container">

    <!-- Si le formulaire n'a pas été envoyé on l'affiche -->
    <?php if (isset($_POST['maildest']) == null) { ?>

        <form method="post" action="">

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

        if ($_POST['pays'] == '') mail($_POST['maildest'], 'Un e-mail de votre site Internet', $_POST['contmail'], $mailheaders);
    ?>

        <!-- Sinon on dit : -->
        <b>Merci de nous avoir contacter votre message sera traité rapidement.</b>

    <?php } ?>

</div>