<?php 

require('connect.php');

$stmt = $conn->prepare("select possede.id, dresseur.nom_dresseur, pokemon.nom_pokemon, type.type_value, team.team_value from possede INNER JOIN dresseur ON dresseur.id = possede.dresseur_id INNER JOIN pokemon ON pokemon.id = possede.pokemon_id INNER JOIN type ON type.id = pokemon.type_id INNER JOIN team ON team.id = dresseur.team_id ");
$stmt->execute();
$resultat = $stmt->fetchall();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="description de la page">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Other CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- External CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Custom CSS -->
    <style>


    </style>

</head>
<body>

    <!-- CONTENT START -->

    <div class="container">
        <div class="row">
            <div class="col-12">

                <table class="table table-striped">
                    <th>       
                        <td>ID</td>
                        <td>Nom du dresseur</td>
                        <td>Nom du pokemon</td>
                        <td>Type du pokémon</td>
                        <td>Team</td>
                        <td>Action</td>
                    </th>

                    <?php 

                    foreach ($resultat as $key => $value) {
                    ?>
                    <tr>
                        <td><?= $value['id'] ?></td>
                        <td><?= $value['nom_dresseur'] ?></td>
                        <td><?= $value['nom_pokemon'] ?></td>
                        <td><?= $value['type_value'] ?></td>
                        <td><?= $value['team_value'] ?></td>
                        <td></td>
                    </tr>
                    <?php
                    }
                    ?>

                </table>

            </div>
        </div>
    </div>

    <!-- CONTENT END -->

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Custom JS (parallax, etc) -->


    <!-- JS File -->
    <script src="js/main.js"></script>

    <!-- InPage JS -->
    <script>

    </script>

</body>
</html>