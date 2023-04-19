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
                    <li><a href="#">Home</a></li>
                    <li><a href="#intro">Hello</a></li>
                    <li><a href="#bio">Who am i</a></li>
                    <li><a href="#work">What i do</a></li>
                    <li><a href="#contact">Say hi</a></li>
                    <li><a href="cv.html">My CV</a></li>
                </ul>
            </nav>
        </header>
        <section id="intro" class="page-section">
            <div class="inner">
                <h2 class="section-title">
                    <span>Intro</span>
                </h2>
                <div class="section-content">
                    <p>Hey, je suis Etienne Coudert </p>
                    <p class="text-up">Un jour je serai le meilleur développeur.</p>
                    <p> Mais alors qu'est ce qu'un bon développeur ? et bien vous avez 4h ! Me battant sans repis, j'essayerai de gagner les défis que l'on me proposera, en traquant avec espoir les challenges qui me feront face grâce à vous. Pour trouver le secret du pouvoir des développeurs.</p>
                </div>
                <div class="actions">
                    <a href="#work" class="action-button action-button-plain">See my work</a>
                    <a href="#contact" class="action-button action-button-line">Contact me</a>
                </div>
            </div>
        </section>
        <section id="bio" class="page-section">
            <div class="inner">
                <h2 class="section-title"><span>Bio</span></h2>
                <div class="section-content">
                    <img src="../images/looking.jpg" alt="looking trought hole">
                    <p>En pleine reconversion professionnelle pour devenir développeur web. Après 3 ans dans le professorat des écoles, j'ai voulu trouver une activité professionnelles qui me convenait pleinement. Suite à une longue réflexion je me suis rapproché d'une formation en corrélation avec mes passions. Le développement web me permet de m'épanouir et de me stimuler dans mon travail et d'être motivé dans tous mes projets. C'est dans ce but qu'aujourd'hui je recherche des nouveaux défis qui me permettront de devenir un meilleur développeur. J'ai à coeur d'apprendre chaque jour pour que mon travail soit toujours plus intéressant. </p>
                    <table>
                        <tr>
                            <th class="type-data" colspan="2">Développement</th>
                            <th class="type-data" colspan="2">Technique</th>
                        </tr>
                        <tr>
                            <th>Language</th>
                            <th>Note</th>
                            <th>Environnement</th>
                            <th>Note</th>
                        </tr>
                        <tr>
                            <td>HTML</td>
                            <td>&#9733;&#9733;&#9733;&#9733;</td>
                            <td>Linux</td>
                            <td>&#9733;&#9733;&#9733;&#9733;</td>
                        </tr>
                        <tr>
                            <td>CSS</td>
                            <td>&#9733;&#9733;&#9733;&#9733;</td>
                            <td>MacOS</td>
                            <td>&#9733;&#9733;&#9733;</td>
                        </tr>
                        <tr>
                            <td>PHP</td>
                            <td>&#9733;&#9733;&#9733;&#9733;&#9733;</td>
                            <td>Windows</td>
                            <td>&#9733;&#9733;&#9733;&#9733;</td>
                        </tr>
                        <tr>
                            <td>JS</td>
                            <td>&#9733;&#9733;&#9733;&#9733;</td>
                            <td></td>
                            <td></td>
                        </tr>


                    </table>
                </div>

            </div>
        </section>
        <section id="work" class="page-section">
            <div class="inner">
                <h2 class="section-title">
                    <span>Work</span>
                </h2>
                <div class="section-content">
                    <article class="post">
                        <img src="../images/article-1.jpg" alt="sable">
                        <h1>Un peu de JS</h1>
                        <p>Un petit exercice de création de jeu simple avec du JavaScript. </p>
                        <footer>
                            <a href="#" class="more-button">Read more</a>
                        </footer>
                    </article>
                    <article class="post">
                        <img src="../images/article-2.jpg" alt="sable">
                        <h1>Pokédex from scratch</h1>
                        <p>Un site pour connaitre les pokémons, leurs stats et bien sur leurs mystères. Un site amusant fait avec PHP et MySQL. Cela m'a permis d'utiliser une BDD avec PHP en POO. J'ai pu m'exercer a faire un site dynamique sans l'utilisation de framework. J'ai pu rendre les couleurs, chaque fiche, chaque informations dynamique avec les relations à la BDD. Un vrai exercice pour s'amuser à développer ses compétences. </p>
                        <footer>
                            <a href="#" class="more-button">Read more</a>
                        </footer>
                    </article>
                    <article class="post">
                        <img src="../images/article-3.jpg" alt="sable">
                        <h1>o'Shop</h1>
                        <p>Création d'un site avec le modèle MVC et en methode agile SCRUM. Un site qui utilise une BDD et PHP. J'ai pu découvrir les relations avec la bdd pour le CRUD, l'authentification et les authorisations pour le backoffice. Pour le frontoffice on s'est donc concentré sur les routes et la dynamisations des lignes de code. </p>
                        <footer>
                            <a href="#" class="more-button">Read more</a>
                        </footer>
                    </article>
                </div>
            </div>
        </section>
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
