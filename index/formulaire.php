<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Portfolio Etienne</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div id="page-wrapper">

        <header id="page-header">
            <h1>Etienne Coudert</h1>
            <p>Développeur Web</p>
            <nav id="main-nav" title="main-nav">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="cv.html">My CV</a></li>
                </ul>
            </nav>
        </header>
<section id="contact" class="page-section">
            <div class="inner">
                <h2 class="section-title"><span>Contact</span></h2>
                <div class="section-content">
                    <form action="">
                        <p>
                            <label>
                                Human <input type="radio" name="type" value="human" />
                                Not sure <input type="radio" name="type" value="notsure" checked />
                                Robot <input type="radio" name="type" value="robot" />
                            </label>
                        </p>
                        <p>
                            <label for="field-subject">
                                Subject
                            </label>
                            <select name="subject" id="field-subject">
                                <option value="hi">Hi</option>
                                <option value="work" selected>Work</option>
                                <option value="feedback">Feedback</option>
                            </select>
                        </p>
                        <p>
                            <label for="field-nickname">Nickname</label>
                            <input id="field-nickname" name='name' type="text" placeholder="Your nickname" />
                        </p>
                        <p>
                            <label for="field-email">Email address</label>
                            <input id="field-email" name='email' type="email" placeholder="Your email" />
                        </p>
                        <p>
                            <label for="field-message">Message</label>
                            <textarea id="field-message" name='message' placeholder="Your message" ></textarea>
                        </p>
                        <p>
                            <input type="reset" class="action-button" value="reset">
                            <button class="action-button">Send this message!</button>
                        </p>
                    </form>
                    <aside>
                        N'hesitez pas à me contacter pour plus d'informations ! Je me ferai une joie de vous répondre.
                    </aside>
                </div>

                <?php
    if (isset($_POST['message'])) {
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: webmaster@monsite.fr' . "\r\n";
        $entete .= 'Reply-to: ' . $_POST['email'];

        $message = '<h1>Message envoyé depuis la page Contact de mon portfolio</h1>
        <p><b>Email : </b>' . $_POST['email'] . '<br>
           <b>Nom : </b>' . $_POST['name'] . '<br>
        <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

        $retour = mail('coudert.e9@gmail.com', 'Envoi depuis page Contact du portfolio', $message, $entete);
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>
            </div>
        </section>

        <footer id="page-footer">
            Etienne Coudert copyright &copy;
        </footer>
    </div>

</body>
</html>