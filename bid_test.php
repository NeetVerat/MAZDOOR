<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <button onclick="clickMe()"> Click </button>
  <?php
  function php_func()
  {
    echo "Stay Safe";
  }
  ?>


  <script>
  function clickMe() {
    var result = "<?php php_func(); ?>"
    document.write(result);
  }
  </script>
</body>

</html>