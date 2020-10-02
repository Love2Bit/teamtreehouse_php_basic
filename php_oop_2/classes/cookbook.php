<?php
include "recipe.php";
include "render.php";

$recipe1 = new Recipe();
$recipe1->setSource = "Grandma Holligan";
$recipe1->setTitle("My First Recipe");
$recipe1->addIngredients("egg", 1);
$recipe1->addIngredients("flour", 2, "cup");

$recipe2 = new Recipe();
$recipe2->setSource = "Betty Crocker";
$recipe2->setTitle("My Second Recipe");

$recipe1->addInstructions("This is my first instruction");
$recipe2->addInstructions("This is my second instruction");

$recipe1->addTag("Breakfast");
$recipe1->addTag("Main Course");

$recipe1->setYield("6 servings");

echo render::displayRecipe($recipe1);

echo $recipe1->getYield();
echo $recipe1->getSource();