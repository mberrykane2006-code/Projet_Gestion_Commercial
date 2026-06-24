<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produits</title>
</head>
<body>
 
    <!-- CSS inclus dans le HTML -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: coral;
        }

        form {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: pink;
            border-radius: 8px;
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input, button {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }

        button {
            background-color: salmon;
            color: white;
            border: none;
            margin-top: 15px;
            cursor: pointer;
        }

        button:hover {
            background-color: darkgreen;
        }
    </style>
</head>
<body>

<form action="#" method="post">
    <h2>produit</h2>

    <label>ID Produit</label>
    <input type="number" name="id" required>

    <label>Nom du produit</label>
    <input type="text" name="nom" required>

    <label>Prix</label>
    <input type="number" name="prix" step="0.00" required>

    <label>Quantité</label>
    <input type="number" name="quantite" required>

    <button type="submit">Enregistrer</button>
</form>




</body>
</html>
