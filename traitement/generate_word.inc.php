<?php
        if (isset($_POST["subbbmit"])) {
                
                require_once 'conn_db.inc.php';

                $sql = "SELECT word FROM words ORDER BY RAND() LIMIT 3;";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                        echo '<ul>';
                        while ($row = mysqli_fetch_assoc($result)) {
                        $chosen_word = $row["word"];
                        echo '<li>' . $chosen_word . '</li>';
                        }
                        echo '</ul>';
                } else {
                        echo "Aucun mot trouvé.";
                }
        }
?>