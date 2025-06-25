<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2 style="text-align: center;">Please Fill Out the Form Below to Add a New Book</h2>
    <form action="insert_data.php" method="post">

        <label for="title">Title:</label>
        <input type="text" id = "title" name="title" placeholder="Enter book title"  required><br><br>

        <label for="author">Author:</label>
        <input type="text" id = "author" name="author" placeholder="Enter author name" required><br><br>

        <lebel for="available">Available:</label>
        <input type="text" name="available" placeholder="available"><br><br>

        <lebel for="pages">Pages:</label>
        <input type="text" id="pages" name="Pages" placeholder="Enter number of pages" required><br><br>

        <lebel for ="isbn">ISBN:</label>
        <input type="text" id="isbn" name="isbn" placeholder="Enter ISBN number" required><br><br>
        <div >
            <input type="submit" id="submit" name="submit" value="Insert Book">
            <a href="index.php"><button type="button" id="cancel" >Cancel </button></a>
        </div>
    </form>  