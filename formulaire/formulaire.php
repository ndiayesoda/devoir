<!DOCTYPE html>
<html>
<head>
  <title> Adresse Client </title>
  <META charset="utf-8"/>
</head>
<body>

 <h1 style="text-align:center">Veuillez renseigner les informations suivantes</h1>
 <form method="POST" action="traitement.php" style="margin-left:350px;margin-right:350px;">
 <fieldset style="background-color:#00eebb;" >
    <legend> <h3>Vos informations</h3> </legend>
  <p><label for="nom"> Nom : </label><input type="text" name="nom" id="nom" style="margin-left:70px;height:30px;" /></p>
    <p><label for="prenom"> Prenom : </label><input type="text" name="prenom" id="prenom" style="margin-left:52px;height:30px;" ></p>
    <p><label for="addresse"> Addresse : </label><input type="text" name="adresse" id="adresse" style="margin-left:40px;height:30px;" /></p>
    <p><label for="ville"> Ville : </label><input type="text" name="ville" id="ville" style="margin-left:70px;height:30px;" /></p>
    <p><label for="code"> Code Postal : </label><input type="text" name="code" id="code" style="margin-left:25px;height:30px;" /></p>
 </fieldset>
  

    <p style="text-align:center"><input type="submit" value="Enregistrer" id="save"/>
 </form>

</body>
</html>