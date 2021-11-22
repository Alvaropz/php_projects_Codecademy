<html>
<body>
  <?php $total = $_GET['numerator'] / $_GET['denominator']?>
    <?= "<p>The total is " . $total . " for the numbers " . $_GET['numerator'] . " and " . $_GET['denominator'] . ".</p>"?>

<a href="index.php">Reset</a>
</body>
</html>