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

// get the files posted
// $file = $_FILES['foo'];

// did we get a file?
// if ( isset($file) ) {
//     $data['done']= 'no problem';
//     //     initialPreview: [
//     //         '<img src='woot.jpg' class='file-preview-image' alt='the alt' title='Woot!'>',
//     //     ]
//     // ];
// } else {
//     $data = [
//         'error'=>'Error while uploading images. Contact your ese'
//     ];
// }

// return a json encoded response for plugin to process successfully
// header('Content-type: application/json');
// echo json_encode( $data );
echo json_encode($output);
