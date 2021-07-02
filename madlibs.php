<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yomogi&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Otomanopee+One&family=Yomogi&display=swap" rel="stylesheet">

    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="stylesheet.css">

    <title>Madlibs</title>
  </head>

  <body>
    <header>
      Madlibs - Have fun playing!
      <hr>
    </header>

    <main>

      <form class="form1" action="madlibs.php" method="get">
        <p>Please enter the following words.</p>
        <p>Adjective: <input type="text" name="adjective1"></p>
        <p>Holiday: <input type="text" name="holiday"></p>
        <br>

        <p>Adjective: <input type="text" name="adjective2"></p>
        <p>Adjective: <input type="text" name="adjective3"></p>
        <p>Adjective: <input type="text" name="adjective4"></p>
        <p>Year: <input type="number" name="year"></p>
        <p>Adjective: <input type="text" name="adjective5"></p>
        <p>Noun: <input type="text" name="noun1"></p>
        <p>Plural Noun: <input type="text" name="plural_noun1"></p>
        <p>Verb Ending in -ing: <input type="text" name="verb_ing1"></p>
        <p>Adjective: <input type="text" name="adjective6"></p>
        <p>Noun: <input type="text" name="noun2"></p>
        <p>Plural Noun: <input type="text" name="plural_noun2"></p>
        <p>Location: <input type="text" name="location"></p>
        <p>Adjective: <input type="text" name="adjective7"></p>
        <p>Verb Ending in -ing: <input type="text" name="verb_ing2"></p>
        <p>Exclamation: <input type="text" name="exclamation"></p>
        <br>

        <p>Adjective: <input type="text" name="adjective8"></p>
        <p>Adverb: <input type="text" name="adverb"></p>
        <p>Adjective: <input type="text" name="adjective10"></p>
        <p>Adjective: <input type="text" name="adjective11"></p>
        <p>Plural Noun: <input type="text" name="plural_noun3"></p>
        <input class="submit_format" type="submit">
      </form>
      <br>

      <div class="game_result">

        <?php
          $adjective1 = $_GET["adjective1"];
          $adjective2 = $_GET["adjective2"];
          $adjective3 = $_GET["adjective3"];
          $adjective4 = $_GET["adjective4"];
          $adjective5 = $_GET["adjective5"];
          $adjective6 = $_GET["adjective6"];
          $adjective7 = $_GET["adjective7"];
          $adjective8 = $_GET["adjective8"];
          $adjective10 = $_GET["adjective10"];
          $adjective11 = $_GET["adjective11"];

          $holiday = $_GET["holiday"];
          $year = $_GET["year"];
          $location = $_GET["location"];
          $exclamation = $_GET["exclamation"];
          $adverb = $_GET["adverb"];

          $noun1 = $_GET["noun1"];
          $noun2 = $_GET["noun2"];

          $plural_noun1 = $_GET["plural_noun1"];
          $plural_noun2 = $_GET["plural_noun2"];
          $plural_noun3 = $_GET["plural_noun3"];

          $verb_ing1 = $_GET["verb_ing1"];
          $verb_ing2 = $_GET["verb_ing2"];

          echo "<p>Hi, it's a/an $adjective1 $holiday.</p>";

          echo "<p>I must say, it's been a $adjective2, $adjective3, yet $adjective4 $year.";
          echo " Our $adjective5 $noun1 messed up all the $plural_noun1.";
          echo " Now, I'm $verb_ing1 all over again.";
          echo " Open the $adjective6 $noun2, and enjoy the tasty $plural_noun2.";
          echo " $location is the $adjective7 place ever.";
          echo "We are $verb_ing2 upon a great feast, $exclamation!</p>";

          echo "<p>The $holiday during the pandemic is a bit $adjective8 - ";
          echo "but Safwan our hero sure knows how to crack jokes ";
          echo "and make the day $adverb. ";
          echo "Wish you all $adjective10 and $adjective11 $plural_noun3 ahead.</p>";
         ?>
      </div>

      <footer>
        Game built by: Asfaria Chowdhury<br>
        Github: <a href="https://github.com/AsfariaChowdhury" target="_blank">See more projects</a><br>
        Email: asfaria.chowdhury@northsouth.edu


      </footer>

    </main>
  </body>
</html>
