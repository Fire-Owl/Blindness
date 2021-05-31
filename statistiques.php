<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistiques</title>
    <link rel="stylesheet" href="outils.css">
</head>
<body>

    <div class="main">
        <div class="main__title">
            <h1>IV. Statistiques</h1>
        </div>

        <div id="charts">
            
            <h2 class="charts__title">Navigateurs</h2>
            <div class="charts__container">
                <div class="charts__item">
                    <canvas id="browser"></canvas>
                </div>
                <p class="charts__item charts__item--paragraph">Les navigateurs les plus utilisés par les personnes aveugles pour naviguer sur internet sont Firefox, Internet Explorer et Safari.</p>
            </div>

            <h2 class="charts__title">Lecteurs d'écrans</h2>
            <div class="charts__container">
            <p class="charts__item charts__item--paragraph charts__item--inverse">Les personnes aveugles utilisent majoirtairement un lecteur d'écran pour naviguer sur internet.</p>
                <div class="charts__item">
                    <canvas id="screen-reader"></canvas>
                </div>
               
            </div>


            <h2 class="charts__title">Switch Tools</h2>
            <div class="charts__container">
                <div class="charts__item">
                    <canvas id="switch-tools"></canvas>
                </div>
                <p class="charts__item charts__item--paragraph">Les personnes aveugles utilisent majoirtairement un lecteur d'écran pour naviguer sur internet.
                </p>
            </div>

            <h2 class="charts__title">Types d'écran</h2>
            <div class="charts__container">
                <p class="charts__item charts__item--paragraph charts__item--inverse">Les 3 types d'écrans utilisés par les personnes aveugles sont NVDA, JAWS et autres.
                </p>
                <div class="charts__item">
                    <canvas id="type-screen"></canvas>
                </div>
               
            </div>


            <h2 class="charts__title">Smartphones</h2>
            <div class="charts__container">
                <div class="charts__item">
                    <canvas id="phone-tools"></canvas>
                </div>
                <p class="charts__item charts__item--paragraph">Les iphones Apple sont les appareils mobiles préférés utilisés par les aveugles en terme d'accessibilité visuelle pour naviguer sur internet. 
                </p>
            </div>

         
        </div>
    


    </div>

<footer>
        <nav>
            <ul>
                <li><a href="bonnes-pratiques.php">Précédent</a></li>
                <li><a href="#">Retour à la navigation</a></li>
            </ul>
        </nav>
    
    </footer>


    
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.1/dist/chart.min.js"></script>
    <script src="main.js"></script>
</body>
</html>


    <!-- <main>
            <h1 class="main__title">III. Outils à disposition</h1>
            <h2 class="top_title">La loupe</h2>
            <div class="conteneur">
                    <p>Elle peut être mécanique ou numérique selon l'usage. Les loupes numériques sont dotées de fonctions plus avancées comme le changement de contrastes ou le gel sur image, ce qui procure un meilleur confort de lecture. À noter que le zoom induit une perte de vue d'ensemble du contenu.</p>
                
            </div>
            
            <h2>La plage braille</h2>
            <p>Elle fait office d'écran pour le non-voyant. Sous forme rectangulaire comme un clavier, le dispositif électro-mécanique affiche en temps réel des caractères brailles. Elle comporte tout de même un défaut d'envergure, la nécessité de savoir lire du braille.</p>

            <h2>Les lecteurs d'écran</h2>
            <p>Ils déchiffrent et oralisent à haute voix les informations affichées sur un écran d'ordinateur. Les menus, textes et commandes deviennent ainsi lisibles par le biais d'une synthèse vocale ou d'un affichage braille.</p>

            <h2>La synthèse vocale</h2>
            <p>L'utilisateur écoute le contenu par l'intermédiaire d'une voix de synthèse. Elle représente une énorme avancée dans l'accessibilité numérique.</p>
           
    
    </main> -->