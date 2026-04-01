<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přehled - student.stredniskola.com</title>
    <style>
        body {
            font-family: Verdana;
        }
        ul {
            list-style: none;
        }
        ul a {
            text-decoration: none;
            color: darkblue;

        }
        ul li {
            margin: 0.5em;
            padding: 0.5em;
            border: 2px solid lightblue;
        }

    </style>
</head>
<body>
  <?php
  $dirs = array_filter(glob('*'), 'is_dir');

  echo "<h1>Dostupné složky:</h1><ul>";
  if (empty($dirs)) {
      echo "<li>žádné složky nenalezeny</li>";
  } else {
      foreach ($dirs as $dir) {
          echo "<li><a href=\"$dir/\">$dir</a></li>";
      }
  }
  echo "</ul>";
  ?>  
</body>
</html>
