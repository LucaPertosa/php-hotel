<?php
    $hotels = [
        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome Struttura</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Parcheggio</th>
                <th scope="col" class="text-center">Voto</th>
                <th scope="col" class="text-center">Distanza dal centro (km)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($hotels as $key => $hotel) {?>
                <tr>
                    <th> <?php echo $hotel['name'];?> </th>
                    <td> <?php echo $hotel['description']?> </td>
                    <?php if ($hotel['parking']) { ?>
                        <td>La struttura <?php echo $hotel['name'];?> ha il parcheggio</td>
                    <?php } else { ?>
                        <td>La struttura <?php echo $hotel['name'];?> non ha il parcheggio</td>
                    <?php } ?>
                    <td class="text-center"><?php echo $hotel['vote'];?></td>
                    <td class="text-center"><?php echo $hotel['distance_to_center'];?></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</body>
</html>