<?php include_once   './component/header.php';

var_dump($produit);

$produit2 = [
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


foreach($produit2 as $cle => $valeur){
    
    echo $cle . " : " . $valeur["name"] . "<br>";
    echo $cle . " : " . $valeur["prix"] . "<br>";
    echo $cle . " : " . $valeur["category"] . "<br>";
    
}
?>    


<p>home</p>

<div class="section">




</div>






<?php include_once __DIR__ . '../component/footer.php'; ?>