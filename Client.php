<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
</head>
<body>
    <form action="/submit-client" method="post">
    <center><h1><u>Page Client</u></h1></center>
    <fieldset>
        
        <legend><h1>Informations du Client</h1></legend>
        <center>
            <label for="Id">ID :</label> 
            <input type="text" id="Id" name="Id"> <br>
            <br><label for="nom">Nom :</label> 
            <input type="text" id="nom" name="nom"> <br>
            <br><label for="prenom">Prénom :</label> 
            <input type="text" id="prenom" name="prenom"> <br>
            <br><label for="email">Email :</label>
            <input type="email" id="email" name="email"> <br>
            <br><label for="telephone">Téléphone :</label>
            <input type="tel" id="telephone" name="telephone"> <br>
            <br><label for="adresse">Adresse :</label>
            <input type="text" id="adresse" name="adresse">
        </center>
        <br>
        <center>
            <button type="submit">Valider</button>
        </center>
    </fieldset>
</form>
</body>
</html>