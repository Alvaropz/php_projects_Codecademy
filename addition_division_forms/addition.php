<html>
<body>
  <?php $total = $_GET['first_n'] + $_GET['second_n']?>
  <?= "<p>The total is " . $total . " for the numbers " . $_GET['first_n'] . " and " . $_GET['second_n'] . ".</p>"?>

<a href="index.php">Reset</a>
</body>
</html>