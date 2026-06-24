<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livreur</title>
    <style>
        body{
    font-family: 'Arial', sans-serif;
    background-color: #FFFDD0;
    display: flex;
    align-items: center;
    height:110vh;
    justify-content: center;
}

form{
    display: flex;
    flex-direction: column;
    padding: 10px;
    border-radius: 10px;
    background-color:#D2691E;
    width: 30vw;
}

h1{
    text-align: center;
}

.ko{
    background-color: black;
    color: white;
}

label{
    margin-bottom: 10px;
}

input{
    margin-bottom: 10px;
    padding: 5px;
    width: 29vw;
    border-radius: 7px;
    margin-left: 0cm;
}

select{
    padding: 5px;
    width: 29vw;
    border-radius: 7px;
    margin-left: 0cm;
}

footer{
    padding: 0;
    margin: 0;
    background-color: aquamarine;
}

</style>
</head>
<body>
    <form action="">
    <h1>Mon Livreur</h1>
    <hr color="black" width="100%">
<div class="ok">
<div>
<label for="">ID :</label>
<input type="text" placeholder="" required > <br>
</div>
<div>
    <label for="">Prénom :</label>
    <input type="text" placeholder="" required > <br>
</div>
<div>
    <label for="">Nom :</label> 
    <input type="text" placeholder="" required> 
</div>
<div>
    <label for="">Numéro professionnel :</label>
    <input type="tel" placeholder="" required > <br>
</div>
<div>
    <label for="">Matricule de moto :</label> 
    <input type="text" placeholder="" required> 
</div>
</div> <br>
<input type="submit" value="ENTRER" class="ko">
</form> <br>
</div>  

</body>
</html>