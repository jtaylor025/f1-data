<?php
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>F1 Data</title>
    <meta name="description" content="Experiments with Formula 1 race data and OO PHP">
    <meta name="author" content="jtaylor025">

    <!-- JQuery -->
    <script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous">
    </script>

    <!-- Latest compiled and minified CSS -->
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous"
    >

    <!-- Optional theme -->
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
        crossorigin="anonymous"
    >

    <!-- Latest compiled and minified JavaScript -->
    <script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous">
    </script>

    <!-- <script language="javascript" type="text/javascript" src="flot/jquery.flot.js"></script> -->

    <!-- bootstrap 4.x is supported. You can also use the bootstrap css 3.3.x versions -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"> -->
    <link href="css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />

    <!-- the main fileinput plugin file -->
    <script src="js/fileinput.min.js"></script>
    <style media="screen">
        .fileUpload {
            height: 400px;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="row">
            <h1>Data upload</h1>
            <form class="fileUpload col-sm-6" action="index.html" method="post">
                <input type="file" id="input-id" name="foo" value="foo">
                <script type="text/javascript">
                    // initialize with defaults
                        $("#input-id").fileinput({
                            uploadAsync: false,
                            allowedFileExtensions: ["xls", "xlsx", "csv"],
                            'uploadUrl': "ctr_file_upload.php",
                            'showPreview' : true

                        });
                        $('#input-id').on('fileuploaded', function(event, data) {
                            var response = data.response;
                            console.log( response.success );
                        });
                        $('#input-id').on('filebatchuploadcomplete', function(event, files, extra) {
                            console.log('File batch upload complete');
                        });
                        // console.log($('#input-id').fileinput('getPreview'));
                </script>
            </form>
        </div>
    </div>

</body>
</html>
