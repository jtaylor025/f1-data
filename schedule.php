<?php
/*
 * F1 Race data app
 *
*/
?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>F1 Data</title>
    <meta name="description" content="Experiments with Formula 1 race data and OO PHP">
    <meta name="author" content="jtaylor025">
    <script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous">
    </script>
    <!-- <script language="javascript" type="text/javascript" src="flot/jquery.flot.js"></script> -->
</head>

<body>
    <h1>F1 Race Schedule</h1>
    <?php
        $url = 'http://ergast.com/api/f1/current';

        // attempt xml connection in "try" block
        try {
          $xml = simplexml_load_file($url);
          if ($xml == null ) {
              throw new Exception("<p>Xml has not been set. Xml is null</p>");
          }
           echo "<p>Xml variable is " . gettype($xml) . "</p>";
        }
        //catch exception if the xml connection fails
        catch (Exception $e) {
             echo "Xml call didn't work. Exception: " . $e->getMessage();
        }

        // get season year
        $season = $xml->RaceTable['season'];
        // show title
        echo "<h2>$season</h2>";

        // Get results in ordered list
        echo "<table>";
        echo "<tr><th>Round</th><th>Race name</th><th>Date</th></tr>";
        foreach($xml->RaceTable->Race as $race) {
           echo "<tr>";
           echo "<td>" . $race['round'] . "</td> ";
           echo "<td>" . $race->RaceName . "</td>";
           echo "<td>" . $race->Date . "</td>";
           echo "<td><a href=\"#\">Results</a></td>";
           echo "</tr>";
        }

        echo "</table>";


    ?>
</body>
</html>
