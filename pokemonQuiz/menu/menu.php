<!DOCTYPE html>
<html lang="ja" xmlns="http://www.w3.org/1999/html">
<head>
  <meta charset="UTF-8">
  <title>ポケモンクイズ</title>
  <meta name = "viewport" content = "width=320,height=480,initial-scale=1.0,minimum-scale=1.0,maximum-scale=2.0,user-scalable=yes" />
  <link rel = "stylesheet" href = "css/menu.css">
</head>
<body>

<div class="menu">

  <div>

    <img src="img/titlelogo(small).png" style="width: 25vw;
    margin: -20px 0px -60px -10px;">

  </div>
  
  <img  src="img/problemlogo.png" style="height: 10vw;
    width: 50vw;
    margin: 0 0 5vw 24vw;">

  <div class="lebel">
    <ul>

      <form action="http://aso2001017.babyblue.jp/pokemonQuiz/question/question.php" method="post">
        <input type="text" name="levelOfDifficulty" value="1" hidden>
        <li><button1 class="easy"><input type="submit" value="やさしい"></button1></li>
      </form>

      <form action="http://aso2001017.babyblue.jp/pokemonQuiz/question/question.php" method="post">
        <input type="text" name="levelOfDifficulty" value="2" hidden>
        <li><button1 class="normal"><input type="submit" value="ふつう"></button1></li>
      </form>

      <form action="http://aso2001017.babyblue.jp/pokemonQuiz/question/question.php" method="post">
        <input type="text" name="levelOfDifficulty" value="3" hidden>
        <li><button1 class="difficult"><input type="submit" value="むずかしい"></button1></li>
      </form>

    </ul>
  </div>

</div>
</body>
</html>