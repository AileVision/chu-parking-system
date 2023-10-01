<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste</title>
</head>
<body>
    
    <ul>
        <li>{{ $moto->id }}</li>
        <li>{{ $moto->immatriculation }}</li>
        <li>{{ $moto->tel_proprietaire }}</li>
    </ul>
    <br>
    <hr>
    <br>

    <ul>
        <li>{{ $entree->id }}</li>
        <li>{{ $entree->user_id }}</li>
        <li>{{ $entree->moto_id }}</li>
        <li>{{ $entree->entree_datetime }}</li>
    </ul>
    
</body>
</html>