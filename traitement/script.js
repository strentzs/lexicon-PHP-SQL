function sortTable() {
    // Récupération de la table et des lignes
    const table = document.querySelector("table");
    const rows = table.querySelectorAll("tbody tr");

    // Initialisation de l'array de données
    let data = [];

    // Boucle sur chaque ligne pour récupérer les valeurs de colonnes
    rows.forEach((row) => {
        const columns = row.querySelectorAll("td");
        const rowData = [];

        // Boucle sur les 3 premières colonnes pour récupérer la valeur de texte
        for (let i = 0; i < 4; i++) {
            rowData.push(columns[i].textContent.trim());
        }

        // Ajout de la ligne à l'array de données
        data.push(rowData);
        });

        // Tri des données en ordre alphabétique en fonction de la première lettre de la première colonne
        data.sort((a, b) => a[0].localeCompare(b[0]));

        // Remplacement du texte des cellules avec les données triées
        data.forEach((rowData, rowIndex) => {
        const columns = rows[rowIndex].querySelectorAll("td");

        // Mise à jour de chaque cellule avec la nouvelle valeur triée
        rowData.forEach((cellData, columnIndex) => {
            columns[columnIndex].textContent = cellData;
        });
    });

}

function showWords() {
    const generateResult = document.getElementById('generateResult');
    const form = document.getElementById('hidden');
    const firstColumnElements = document.querySelectorAll("table thead tr th:first-child, table tbody tr td:first-child");

    const textArray = [];
    firstColumnElements.forEach(element => {
    textArray.push(element.textContent);
    });

    console.log(textArray);

    const randomWords = [];
    while (randomWords.length < 3) {
        const randomIndex = Math.floor(Math.random() * textArray.length);
        const randomWord = textArray[randomIndex];
        if (!randomWords.includes(randomWord)) {
            randomWords.push(randomWord);
        }
    }

    console.log(randomWords);
    
    generateResult.textContent = `Pour vous entraîner, vous êtes invités à écrire un petit texte, qui sera archivé ci-dessous, afin de vous entraîner à pratiquer ! Vos trois mots sont : ${randomWords.join(", ")}`;

    form.style.display = 'block';
}