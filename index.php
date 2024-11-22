<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="tabela">
  <?php
    $db = new mysqli('localhost', 'root', '', 'biura_podrozy');
    $sql = "SELECT dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna = 1";
    $result = $db->query($sql);
    while($row = $result->fetch_assoc()) {
      $date = $row['dataWyjazdu'];
      $destination = $row['cel'] ;
      $price = $row['cena'];

      echo '<table><tr><th>dataWyjazdu</th><th>cel</th><th>cena</th></tr>';
while($row = $result->fetch_assoc()) {
  echo "<tr><td>{$row['dataWyjazdu']}</td><td>{$row['cel']}</td><td>{$row['cena']}</td></tr>";
}
echo '</table>';
    }
    $db->close();
    ?>
  </div> 
</body>
</html>