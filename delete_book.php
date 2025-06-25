<?php
$books = json_decode(file_get_contents('books.json'), true);
$id = $_GET['id'];

unset($books[$id]);
echo "<h1>Book Deleted Successfully.</h1>";
$books = array_values($books); 
file_put_contents('books.json', json_encode($books, JSON_PRETTY_PRINT));
header("Location: index.php");
exit;
?>
 <a href="index.php"><b>Back to the Home Page..</b></a>