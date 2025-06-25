<?php
    include('read_json.php');
    $newBook = [];
    $newBook['title'] = $_POST['title'];
    $newBook['author'] = $_POST['author'];
    $newBook['available'] = $_POST['available'];
    $newBook['pages'] = $_POST['Pages'];
    $newBook['isbn'] = $_POST['isbn'];

   // echo $_POST['title'];
   $bookArray[] = $newBook;
   $newJson = json_encode($bookArray);
   if(file_exists($fileName) and !empty($_POST['title']) and !empty($_POST['author'])){
       file_put_contents($fileName, json_encode($bookArray, JSON_PRETTY_PRINT));
       echo "<h1>Successfully Inserted. </h1>";
   }
   else{
        echo "<h1>Insertion Failed..!</h1>";
   }
?>
<a href='index.php'<b>Back to the Home Page..</b></a>
