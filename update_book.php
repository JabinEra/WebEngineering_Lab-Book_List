<?php
    include('read_json.php');
    $id = $_POST['id'];
    $prev = $bookArray[$id];

    $bookArray[$id]->title = $_POST['title'];
    $bookArray[$id]->author = $_POST['author'];
    $bookArray[$id]->available = $_POST['available'];
    $bookArray[$id]->pages = $_POST['pages'];
    $bookArray[$id]->isbn = $_POST['isbn']; 

    $jsonData = json_encode($bookArray, JSON_PRETTY_PRINT);
    file_put_contents($fileName, $jsonData);

    
?>
 <h2>Successfully Updated</h2>
     <a href="index.php"><b>Back to the Home Page..</b></a>
