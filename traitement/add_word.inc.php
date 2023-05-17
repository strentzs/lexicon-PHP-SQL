<?php
        if (isset($_POST["submit"])) {
                if (!empty($_POST["name"]) || !empty($_POST["genre"]) || !empty($_POST["function"]) || !empty($_POST["function"])) {
                        function removeAccents($str) {
                                $replace = array(
                                    'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C',
                                    'È'=>'E', 'É'=>'E', 'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I',
                                    'Ð'=>'D', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O',
                                    'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'ß'=>'s', 'à'=>'a', 'á'=>'a',
                                    'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e',
                                    'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'d', 'ñ'=>'n',
                                    'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u',
                                    'û'=>'u', 'ü'=>'u', 'ý'=>'y', 'ÿ'=>'y', 'Ŕ'=>'R', 'ŕ'=>'r'
                                );
                                $str = strtr($str, $replace);
                                return $str;
                        }

                        $chosen_word = ucfirst(removeAccents(strtolower($_POST["word"])));
                        $chosen_genre = $_POST["genre"];
                        $chosen_function = $_POST["function"];
                        $chosen_definition = $_POST["definition"];

                        require_once 'conn_db.inc.php';

                        $stmt = mysqli_prepare($conn, "INSERT INTO words (word, genre, function, definition) VALUES (?, ?, ?, ?);");

                        if (!$stmt) {
                            die("Échec de la préparation de la requête : " . mysqli_error($conn));
                        }

                        mysqli_stmt_bind_param($stmt, "ssss", $chosen_word, $chosen_genre, $chosen_function, $chosen_definition);

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