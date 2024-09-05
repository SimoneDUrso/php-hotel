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

    foreach($hotels as $hotel){
        var_dump($hotel['name']);
        foreach($hotel as $key => $value){
            var_dump($key." => ".$value);
        }
        echo "-----------------------------------------------------";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Hotels</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php foreach($hotels as $hotel){ ?>
                <div class="col-3 g-5">
                        <h2><strong> <?php echo $hotel['name'] ?> </strong></h2>
                        <p><strong>Descrizione:</strong> <?php echo $hotel['description'] ?> </p>
                        <p><strong>Parcheggio:</strong> <?php echo $hotel['parking'] ?> </p>
                        <p><strong>Voto utenti:</strong> <?php echo $hotel['vote'] ?> </p>
                        <p><strong>Distanza dal centro:</strong> <?php echo $hotel['distance_to_center'] ?> </p>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>