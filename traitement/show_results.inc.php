<?php
        require_once 'conn_db.inc.php';

        $sql = "SELECT word, genre, function, definition FROM words;";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                $chosen_word = $row["word"];
                $chosen_genre = $row["genre"];
                $chosen_function = $row["function"];
                $chosen_definition = $row["definition"];
                echo '<tr>';
                echo '<td>'.$chosen_word.'</td>';
                echo '<td>';
                if (!empty($chosen_genre)) {
                        echo ucfirst($chosen_genre);
                } else {
                        echo 'null';
                }
                echo '</td>';
                echo '<td>';
                if ($chosen_function === "nom_commun") {
                        echo '<span class="italic">';
                        echo 'Nom commun';
                        echo '</span>';
                } elseif ($chosen_function === "nom_propre") {
                        echo '<span class="italic">';
                        echo 'Nom propre';
                        echo '</span>';
                } elseif ($chosen_function === "verbe") {
                        echo '<span class="italic">';
                        echo 'Verbe';
                        echo '</span>';
                } elseif ($chosen_function === "adjectif") {
                        echo '<span class="italic">';
                        echo 'Adjectif';
                        echo '</span>';
                } elseif ($chosen_function === "adverbe") {
                        echo '<span class="italic">';
                        echo 'Adverbe';
                        echo '</span>';
                } elseif ($chosen_function === "expression") {
                        echo '<span class="italic">';
                        echo 'Expression';
                        echo '</span>';
                }
                echo '</td>';
                echo '<td>'.$chosen_definition.'</td>';
                echo '</tr>';
        }
        } else {
        echo "Aucun mot trouvé.";
        }
?>