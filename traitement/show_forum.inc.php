<?php
        require_once 'traitement/traitement.inc.php';
        $sql = "SELECT text, username  FROM text;";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                $chosen_username = $row["username"];
                $chosen_text = $row["text"];
                echo '<p><span class="italic">« '.$chosen_username.' »</span>  ・  '.$chosen_text.'  ・  Le ';
                $date = date('j F Y, à H\hi');
                echo $date.'</p>';
                echo '<hr>';
                }
        }
?>