<?php
include "class/recipes.php";
include "class/render.php";
include "inc/allrecipes.php";

echo Render::displayRecipe($belgian_waffles);

// $recipe1 = new Recipe("the first recipe");
// $recipe1->setSource("Grandma Henry");
// $recipe1->addIngredient("egg", 1);
// $recipe1->addIngredient("flour", 2, "cups");

// $recipe2 = new Recipe("Yet another recipe");
// $recipe2->setSource("Betty Crocker");

// // echo $recipe1->getTitle();
// // foreach ($recipe1->getIngredients() as $ing) {
// //     echo "\n" . $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
// // }
// // echo "\n";

// $recipe1->addInstruction("This is instruction #1");
// $recipe1->addInstruction("This is instruction #2");

// // echo implode("\n", $recipe1->getInstructions());
// // echo "\n";

// $recipe1->addTag("Breakfast");
// $recipe1->addTag("Main Course");

// // echo implode(", ", $recipe1->getTags());
// // echo "\n";

// $recipe1->setYield("6 servings");
// // echo $recipe1->getYield();
// // echo "\n";

// // echo $recipe1->getSource();
// // echo "\n";

// //echo Render::displayRecipe($recipe1);
// echo "\n";
// echo $recipe1;
// echo "\n";
// echo new Render();
// echo "\n";
?>