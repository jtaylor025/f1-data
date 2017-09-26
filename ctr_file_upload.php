<?php

// 'images' refers to your file input name attribute
if (empty($_FILES['foo'])) {
    $output = ['error'=>'No files found for upload.'];
    // or you can throw an exception
    return; // terminate
}

// 'images' refers to your file input name attribute
if (isset($_FILES['foo'])) {
    $output = ['success'=>'Woohoo, it worked. Now what?'];
    // or you can throw an exception
    // return; // terminate
}

// its a start
echo json_encode($output);
