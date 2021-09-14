<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <h1><hArray</h1>
  <?php
  $coworkers = array('서정완','허은진','서인하','서미교');
  echo $coworkers[1].'<br>';
  echo $coworkers[3].'<br>';
  var_dump(count($coworkers));
  echo '<br>';
  array_push($coworkers, '홍길동');
  var_dump($coworkers);
   ?>

  </body>
</html>
