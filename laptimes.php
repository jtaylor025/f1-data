<?php
/*
 * Building the laptime data spreadsheet
 *
*/
?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>F1 Data</title>
    <meta name="description" content="Experiments with Formula 1 race data and PHPOffice">
    <meta name="author" content="jtaylor025">
    <script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous">
    </script>
    <!-- <script language="javascript" type="text/javascript" src="flot/jquery.flot.js"></script> -->
</head>

<body>
    <h1>Grabbing the lap data for Lewis</h1>
    <?php

        // find out how many races and what season
        // Set XML address
        // $u = "http://ergast.com/api/f1/current";
        //
        // // attempt xml connection in "try" block
        // try {
        //   $x = simplexml_load_file($u);
        //   if ($x == null ) {
        //       throw new Exception("<p>Xml has not been set. Xml is null</p>");
        //   }
        //    echo "<p>Race calender received. Xml variable is " . gettype($x) . "</p>";
        // }
        //
        // //catch exception if the xml connection fails
        // catch (Exception $e) {
        //      echo "Xml call didn't work. Exception: " . $e->getMessage();
        // }
        //
        // // set variable to limit results call
        // $races = $x->RaceTable->Race->count();
        // echo $races;

        /** Include PHPExcel */
        require_once dirname(__FILE__) . '/Classes/PHPExcel.php';

        // variables
        // $rnd = 1;
        $i = 0;
        $gotData = true;

        /** Create a new PHPExcel Object **/
        $excel = new PHPExcel();
        //First sheet
        $sheet = $excel->getActiveSheet();

        // do {
            // Set XML address
            $url = "http://ergast.com/api/f1/2017/13/drivers/hamilton/laps";

            // $url = "http://ergast.com/api/f1/2017/$rnd/results";

            // attempt xml connection in "try" block
            try {
              $xml = simplexml_load_file($url);
              if ($xml == null ) {
                  throw new Exception("<p>Xml has not been set. Xml is null</p>");
              }
               echo "<p>Laps received. Xml variable is " . gettype($xml) . "</p>";
               $gotData = true;
            }

            //catch exception if the xml connection fails
            catch (Exception $e) {
                 echo "Xml call didn't work. Exception: " . $e->getMessage();
                 $gotData = false;
            }

            // Add new sheet
            // $objWorkSheet = $excel->createSheet($i); //Setting index when creating

            // write content //
            // set sheet title
            // $objWorkSheet
                // ->setCellValue('A1' , $xml->RaceTable->Race->RaceName)
                // ->setCellValue('B1' , $xml->RaceTable->Race->Date);

            // add in race data
            // $row = 2;
            // foreach($xml->RaceTable->Race->ResultsList->Result as $result) {
            //    // write to excel
            //    $objWorkSheet
            //        ->setCellValue('A'.$row , $result['position'])
            //        ->setCellValue('B'.$row , $result->Driver->GivenName . " " . $result->Driver->FamilyName)
            //        ->setCellValue('C'.$row , $result->Constructor->Name)
            //        ->setCellValue('D'.$row , $result->Grid)
            //        ->setCellValue('E'.$row , $result->Time)
            //        ->setCellValue('F'.$row , $result->FastestLap->Time)
            //        ->setCellValue('G'.$row , $result['points']);
            //    $row++;
            // }

            // Rename sheet
            // $objWorkSheet->setTitle("Round $rnd");

            // $rnd++;
            // $i++;

        // } while ();

        // $file = PHPExcel_IOFactory::createWriter($excel,'Excel2007');
        // $file->save('race-results-2017.xlsx');
    ?>
</body>
</html>
