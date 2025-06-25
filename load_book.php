<?php
include('read_json.php');
$output = " ";
if(sizeof($bookArray)>0){
    $output ='<table border ="1 width="100%" cellspacing="0" cellpadding="5">
    <tr>
        <th>Title</th>
        <th> Author </th>
        <th> Available </th>
        <th> Pages</th>
        <th> ISBN</th>
        <th> Edit</th>
        <th> Delete</th>
    </tr> ';
    foreach($bookArray as $key => $books){
        $output .= "<tr> 
        <td>{$books->title}</td>
        <td>{$books->author}</td>
        <td>{$books->available}</td>
        <td>{$books->pages}</td>
        <td>{$books->isbn}</td>
        <td><a href='edit_book.php?id={$key}'><button class='edit'>Edit</button></a></td>
        <td><a href='delete_book.php?id={$key}'><button class='delete'>Delete</button></a></td>
        </tr>";

    }

    $output .= "</table>";
    echo $output;
    
}
else{
    echo "<h3> No Record Found. </h3>";
}

?>