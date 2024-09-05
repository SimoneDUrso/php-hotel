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

    // Recupera il valore del filtro dal parametro GET
    $filter_parking = isset($_GET['parking']) && $_GET['parking'] === '1';
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
    <div class="container my-5">
        <h2 class="text-center my-5"><strong>Hotel trovati</strong></h2>

        <!-- Form per il filtro del parcheggio -->
        <form action="./index.php" method="GET" class="mb-4 d-flex justify-content-end">
            <div class="d-flex align-items-center">
                <input class="mx-2" type="checkbox" name="parking" value="1" id="parking" <?php echo $filter_parking ?>>
                <label for="parking">
                    Mostra solo hotel con parcheggio
                </label>
                <button type="submit" class="btn btn-primary ms-3">Filtra</button>
            </div>
        </form>

        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Hotel</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Parcheggio</th>
                            <th scope="col">Voto</th>
                            <th scope="col">Distanza dal centro (km)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($hotels as $hotel) { ?>
                            <?php if (!$filter_parking || ($filter_parking && $hotel['parking'])) { ?>
                                <tr>
                                    <td><?php echo $hotel['name']; ?></td>
                                    <td><?php echo $hotel['description']; ?></td>
                                    <td><?php echo $hotel['parking'] ? 'Sì' : 'No'; ?></td>
                                    <td><?php echo $hotel['vote']; ?></td>
                                    <td><?php echo $hotel['distance_to_center']; ?> km</td>
                                </tr>
                            <?php } ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>