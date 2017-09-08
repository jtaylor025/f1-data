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
    <script language="javascript" type="text/javascript" src="flot/jquery.flot.js"></script>
</head>

<body>
    <h1>F1 data</h1>
    <p>The index.php file.</p>
    <?php
        $url = 'http://ergast.com/api/f1/current/last/results';
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
            echo "getF1Data didn't work. Exception: " . $e->getMessage();
        }

        // get first book title
        $racename = $xml->RaceTable->Race->RaceName;
        // show title
        echo $racename;
    ?>
</body>
</html>
