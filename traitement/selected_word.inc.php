<?php
        if (isset($_POST["subbmit"])) {
                if (!empty($_POST["selected_word"])) {
                        $selected_word = $_POST["selected_word"];

                        require_once 'conn_db.inc.php';

                        $stmt = $conn->prepare("SELECT word, function, definition FROM words WHERE word = ?;");
                                $stmt->bind_param("s", $selected_word);
                                $stmt->execute();
                                $result = $stmt->get_result();

                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    $word = $row["word"];
                                    $function = $row["function"];
                                    $definition = $row["definition"];
                                    
                                    header('Location: ../index.php?word=' . urlencode($word) . '&function=' . urlencode($function) . '&definition=' . urlencode($definition));
                                    exit();
                                } else {
                                    echo "Aucun résultat trouvé.";
                                }
                        header('Location: ../index.php?mot=sélectionné');
                        exit();
                }
        }
?>