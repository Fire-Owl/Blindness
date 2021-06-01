<?php include "../includes/header.php";?>

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
    <script src="../scripts/main.js"></script>
    <?php include "../includes/footer.php";?>

  