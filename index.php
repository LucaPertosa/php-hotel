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
    if(isset($_GET['parking'])) { 
        if($_GET['parking'] == "yes") { 
            $hotels = array_filter($hotels, function($hotel) { 
                return $hotel['parking'] == true; 
            }); 
        };
    };
    if(isset($_GET['vote'])) { 
        $vote = $_GET['vote']; 
        $hotels = array_filter($hotels, function($hotel) use ($vote) { 
            return $hotel['vote'] >= $vote; 
        });
    };
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
    <form action="index.php" method="get">
        <div class="container mt-3 mb-3"> 
            <div class="row"> 
                <div class="col-4"> 
                    <div class="form-group"> 
                        <label for="parking">Filtro Parcheggio</label> 
                        <select class="form-control" id="parking" name="parking"> 
                            <option value="">Tutti</option>
                            <option value="yes">Parcheggio Disponibile</option>
                        </select> 
                    </div> 
                </div> 
                <div class="col-4"> 
                    <div class="form-group"> 
                        <label for="vote">Filtro Voto</label> 
                        <input type="number" class="form-control" id="vote" name="vote" step="1" min="1" max="5" placeholder="3"> 
                    </div> 
                </div> 
                <div class="col-2 pt-4"> 
                    <button type="submit" class="btn btn-primary">Filtra</button> 
                </div> 
            </div> 
        </div>
    </form>
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