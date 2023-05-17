<!DOCTYPE html>
<html>
        <head>
                <meta charset="utf-8">
                <link rel="stylesheet" href="style/style.css">
                <title>Lexicon</title>
        </head>

        <body>
                <div class="container">
                        <header>
                                <h1>Lexicon</h1>
                        </header>
                        <div class="sub_container">
                                <div class="block" id="B1">
                                        <div class="sub_block" id="SB1">
                                                <h3>Ajouter un mot</h3>
                                                <form action="traitement/add_word.inc.php" method="post">
                                                        <input type="text" name="word" id="word" placeholder="Votre mot"> <br />

                                                        <select name="genre" id="genre">
                                                                <option disabled selected>Son genre</option>
                                                                <option value="masculin">Masculin</option>
                                                                <option value="feminin">Féminin</option>
                                                                <option value="neutre">Neutre</option>
                                                        </select> <br />

                                                        <select name="function" id="function">
                                                                <option disabled selected>Sa fonction</option>
                                                                <option value="adjectif">Adjectif</option>
                                                                <option value="adverbe">Adverbe</option>
                                                                <option value="expression">Expression</option>
                                                                <option value="nom_commun">Nom commun</option>
                                                                <option value="nom_propre">Nom propre</option>
                                                                <option value="verbe">Verbe</option>
                                                        </select> <br />

                                                        <textarea name="definition" id="definition" cols="30" rows="10" placeholder="Votre définition..."></textarea> <br />

                                                        <input type="submit" value="Créer" name="submit">
                                                </form>
                                        </div>
                                </div>
                                <div class="block" id="B2">
                                        <div class="sub_block" id="SB2">
                                        <h3>Tableau des mots</h3>

                                        <p><i>Filtrer par</i></p>

                                        <button onclick="sortTable()">Ordre alphabétique</button>

                                        <table>
                                                <thead>
                                                        <tr>
                                                                <td>Mot</td>
                                                                <td>Genre</td>
                                                                <td>Fonction</td>
                                                                <td>Définition</td>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                        <?php
                                                                require_once 'traitement/show_results.inc.php';
                                                        ?>
                                                </tbody>
                                        </table>
                                        </div>
                                </div>
                        </div>
                        <div class="sub_container">
                                <div class="block" id="B3">
                                        <div class="sub_block" id="SB3">
                                                <h3>Forum des écrits</h3>
                                                <p>
                                                        <?php
                                                                require_once 'traitement/add_forum.inc.php';
                                                        ?>
                                                        <?php
                                                                require_once 'traitement/show_forum.inc.php';
                                                        ?>
                                                </p>
                                        </div>
                                </div>
                                <div class="block" id="B4">
                                        <div class="sub_block" id="SB4">
                                        <h3>Génation de mots aléatoires</h3>

                                        <button onclick="showWords()">Sélectionner 3 mots aléatoires</button>

                                        <p id="generateResult"></p>

                                        <form id="hidden" action="traitement/traitement.inc.php" method="post" style="display: none;">
                                                <label for="username">Votre pseudo</label> <br />
                                                <input type="text" name="username" id="username" placeholder="Votre pseudo"> <br />

                                                <label for="text">Votre écrit</label> <br />
                                                <textarea name="text" id="text" cols="30" rows="10" placeholder="Votre récit..."></textarea> <br />

                                                <input type="submit" value="Envoyer" name="subbbbmit">
                                        </form>
                                        </div>
                                </div>
                        </div>
                </div>

                <script src="traitement/script.js"></script>
                <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        </body>
</html>