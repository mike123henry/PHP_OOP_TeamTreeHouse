<?php
include "class/recipes.php";

$recipe1 = new Recipe();
$recipe1->source = "Grandma Henry";
$recipe1->setTitle("the first recipe");
$recipe1->addIngredient("egg", 1);
$recipe1->addIngredient("flour", 2, "cups");

$recipe2 = new Recipe();
$recipe2->source = "Betty Crocker";
$recipe2->setTitle ("Yet another recipe");

echo $recipe1->getTitle();
foreach ($recipe1->getIngredients() as $ing) {
    echo "\n" . $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
}
echo "\n";
?>