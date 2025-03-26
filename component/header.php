<?php include_once __DIR__ . "/../config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="<?= BASE_URL ?>asset/style.css">

</head>

<body>

    <?php

  

    $menu = ["home", "profil", "backoffice"];
    $menu2 = [

        "home" => "'../pages/home.php'",
        "profil" => "'../pages/profil.php'",
        "backoffice" => "'../pages/backoffice.php'"
    ];

    $lien=[
         "'../pages/home.php'",
         "'../pages/profil.php'",
         "'../pages/backoffice.php'"
    ];


    foreach($menu as $item){
        echo "<a href=" . $lien[$item] . ">" . $item. "</a><br>";
    }



    $produit = [
        [
            "name" => "ordinateur",
            "prix" => 1000,
            "category" => "informatique"
        ],
        [
            "name" => "chaise",
            "prix" => 3000,
            "category" => "meubles"
        ],
        [
            "name" => "chaussures",
            "prix" => 20,
            "category" => "vêtements"
        ]
    ];

    ?>

    <header>


        <?php if (isset($user) && array_key_exists("image", $user) && !empty($user["image"])): ?>
            <div class="image_user"><img src="<?php echo $user["image"]; ?>" alt="image_user"></div>

        <?php
        else: ?>
            <div class="image_user">
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png" alt="image_user">
            </div>
        <?php endif;
        
        if(isset($user)){

            echo "<button style='position:absolute; right:10px; top:1px; '>deconnexion</button>";
        }else{
            echo "<button style='position:absolute; right:10px; top:1px; '>connexion</button>";
        }
        
        
        
        ?>



        <nav>

            <div class="menu">

                <?php foreach ($menu as $item) {

                    if ($item === "home") {
                        echo "<a href='" . BASE_URL . "index.php'>$item</a><br>";
                    }

                    if (array_key_exists("role", $user) && !empty($user["role"])) {

                        if ($item == "user" && $user["role"] === "user") {
                            echo "<a href='". BASE_URL ."pages/home.php'>" . $item . "</a>";
                        }


                        if ($item == "backoffice" && $user["role"] === "admin") { ?>
                            <a href='<?= BASE_URL ?>pages/profil.php'>profil</a>
                            <a href='<?= BASE_URL ?>pages/backoffice.php'>back</a>
                <?php
                        }
                    }
                } ?>
            </div>

        </nav>


    </header>

    <section class="container" style=" height: 80vh">