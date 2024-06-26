<?php

require_once __DIR__ . '/Models/Production.php';

$productions = [
    new Production('Avatar', 'english', 8),
    new Production('Inceprion', 'italian', 7),
    new Production('Pippo', 'gibberish', 10),
];

// var_dump($productions);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <div id="app">
        
    <main>
        <div class="container">
            <div class="row">
                <?php 
                    for ($i = 0; $i < count($productions); $i++) {
                        ?>
                            <div class="card col-4 m-4" style="width: 18rem;">
                                <img src="https://www.desktopbackground.org/download/1280x900/2011/06/03/213403_movies-generic-pickupmovie-home-theater-backdrops-wallpapers_1920x1080_h.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $productions[$i]->getTitle(); ?></h5>
                                    <p class="card-text"><?php echo $productions[$i]->getLanguage(); ?></p>
                                    <p class="card-text"><?php echo $productions[$i]->getRating(); ?></p>
                                </div>
                            </div>
                        <?php 
                    }
                ?>
            </div>
        </div>
    </main>



    </div>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>