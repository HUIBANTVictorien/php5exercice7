<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>exercice 7 partie 3 php</title>
</head>
<body>
  <?php
  $age = 25;
  $genre = 'homme';
  function majorOrMinor($age, $genre) {
    if ($age >= 18 && $genre == 'homme') {
      return ('Vous êtes un homme et vous êtes majeur');
    }
    elseif ($age < 18 && $genre == 'homme') {
      return ('Vous êtes un homme et vous êtes mineur');
    }
    elseif ($age < 18 && $genre == 'femme') {
      return ('Vous êtes une femme et vous êtes mineur');
    }
    elseif ($age >= 18 && $genre == 'femme') {
      return ('Vous êtes une femme et vous êtes majeur');
    }
  }
  echo majorOrMinor($age, $genre);
  ?>
</body>
</html>
