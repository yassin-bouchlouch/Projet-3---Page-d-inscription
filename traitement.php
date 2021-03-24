<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<title>
Test Formulaire PHP
</title>

<style>
table{
  width:600px;
}
td {
    border: 1px solid #333;
}

thead,
tfoot {
    background-color: orange;
    color: #fff;
}
</style>

</head>

<body>


<table class=text-center>
    <thead>
        <tr>
            <th colspan="2">Visiteur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Nom</td>
            <td>Age</td>
        </tr>
        <tr>
            <td><?php echo $_POST['nom'] ?></td>
            <td><?php echo $_POST['age'] ?></td>
        </tr>
    </tbody>
</table> </td>


  




</body>

</html>