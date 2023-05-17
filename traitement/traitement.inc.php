<?php
        if (isset($_POST["subbbbmit"])) {
                if (!empty($_POST["text"])) {
                        $username = $_POST["username"];
                        $text = $_POST["text"];

                        require_once 'conn_db.inc.php';

                        $stmt = mysqli_prepare($conn, "INSERT INTO text (username, text) VALUES (?, ?);");

                        if (!$stmt) {
                                die("Échec de la préparation de la requête : " . mysqli_error($conn));
                        }

                        mysqli_stmt_bind_param($stmt, "ss", $text, $username);

                        if (mysqli_stmt_execute($stmt)) {
                                echo "Utilisateur ajouté avec succès !";
                        } else {
                                echo "Erreur : " . mysqli_error($conn);
                        }

                        mysqli_stmt_close($stmt);
                        mysqli_close($conn);
                
                        header('Location: ../index.php?ajout=succès');
                        exit();
                }
        }
?>