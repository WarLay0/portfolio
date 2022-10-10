<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evan BOMBART - PortFolio en ligne</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#presentation">Présentation</a></li>
                <li><a href="#projets">Projets</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <!-- Barre de navigation -->
    <main>
        <section id="accueil">
            <div>
                <h1>Evan BOMBART</h1>
                <h2>Développeur full stack junior</h2>
            </div>
        </section>
        <!-- Accueil -->
        <section id="presentation">
            <div id="pre_under">
                <img src="img/evanPhoto.png" alt="Photo Evan">
                <div id="pre_text">
                    <h2>Présentation</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod nobis vel molestiae facilis! Eos ullam suscipit quam velit quibusdam esse, aliquam dicta commodi, ratione tenetur, maxime provident nam inventore officiis.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod nobis vel molestiae facilis! Eos ullam suscipit quam velit quibusdam esse, aliquam dicta commodi, ratione tenetur, maxime provident nam inventore officiis.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod nobis vel molestiae facilis! Eos ullam suscipit quam velit quibusdam esse, aliquam dicta commodi, ratione tenetur, maxime provident nam inventore officiis.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod nobis vel molestiae facilis! Eos ullam suscipit quam velit quibusdam esse, aliquam dicta commodi, ratione tenetur, maxime provident nam inventore officiis.</p>
                </div>
            </div>
            <div id="pre_button">
                <a href="files\CV - BOMBART EVAN T.pdf" download><button>Curiculum Vitae</button></a>
            </div>
        </section>    
        <!-- Présentation -->
        <section id="projets">
            <!-- A faire : Caroussel -->
        </section>
        <!-- Projets -->
        <section id="contact">
        <div id="con_social_id">
                <div class="con_social">
                    <img src="img/logos/telephone.png" alt="Logo Téléphone">
                    <p>06.84.31.06.94</p>
                </div>
                <div class="con_social">
                    <img src="img/logos/adresse.png" alt="Logo ping">
                    <p>6 All. Guy Deniélou, 10430 Rosières-prés-Troyes</p>
                </div>
                <div class="con_social">
                    <img src="img/logos/LinkedIn.png" alt="Logo LinkedIn">
                    <p>Evan BOMBART</p>
                </div>
            </div>
            <form action="#" method="POST">
                <div id="con_line">
                    <div class="con_form">
                        <label for="prenom">Prénom</label>
                        <input type="text" id="prenom">
                    </div>
                    <div class="con_form">
                        <label for="nom">Nom</label>
                        <input type="text" id="nom">
                    </div>
                </div>
                <div class="con_form">
                    <label for="email">Adresse mail</label>
                    <input type="mail" id="email">
                </div>
                <div class="con_form">
                    <label for="text">Message</label>
                    <textarea name="text" id="text" cols="30" rows="10"></textarea>
                </div>
                <input type="submit" id="submit">
            </form>
        </section>
    </main>
    <footer>
        <p>Portfolio - Evan BOMBART &copy;2022</p>
    </footer>
</body>
</html>