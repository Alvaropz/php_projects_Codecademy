<h1>Welcome to the Repetitive Cafe</h1>
<?php 
  $drinks = ["Coke" => 1.50, "Pepsi" => 1.30, "Macchiato" => 1.30, "Capuccino" => 1.50, "Crema di Caffè" => 1.70, "Caffè shakerato" => 1.50, "Caffè" => 1.10];
  $pastries = ["Chocolate", "Strawberry", "Vanilla", "Orange", "Banana", "Lemon", "Cheese Cake"];
  $other_dishes = ["Fries" => 3.50, "Sandwich" => 5.50, "Croquetas" => 5.50, "Tortilla Española" => 12.50, "Jack Potato" => 3.50]
?>

<h3>Drinks!</h3>
<ul>
  <?php foreach ($drinks as $drink => $price) :?>
  <li><?="$drink: {$price}€"?></li>
  <?php endforeach;?>
</ul>

<h3>Pastries! ($2 each)</h3>
<ul>
  <?php for($i = 0; $i < count($pastries); $i++) : ?>
    <li><?=$pastries[$i]?></li>
  <?php endfor;?>
</ul>

<h3>Other Dishes!</h3>
<ul>
  <?php foreach($other_dishes as $dish => $price) : ?>
    <li><?="$dish: {$price}€"?></li>
  <?php endforeach;?>
</ul>