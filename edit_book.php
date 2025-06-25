<?php
    include('read_json.php');

    $id  = isset($_GET['id']) ? $_GET['id'] : 0;

    $prev = isset($bookArray[$id]) ? $bookArray[$id] : (object)[
        'title' => '',
        'author' => '',
        'available' => '',
        'pages' => '',
        'isbn' => ''
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Book</title>
    <link rel="stylesheet" href="css/insert-style.css">
</head>
<body>

    <h2 style="text-align: center;">Update Book Details</h2>

    <form action="update_book.php" method="post">

        <label for="title">Title Name:</label><br>
        <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($prev->title); ?>"><br><br>

        <label for="author">Author Name:</label><br>
        <input type="text" id="author" name="author" value="<?php echo htmlspecialchars($prev->author); ?>"><br><br>

        <label for="available">Available:</label><br>
        <input type="text" id="available" name="available" value="<?php echo htmlspecialchars($prev->available); ?>"><br><br>

        <label for="pages">Pages:</label><br>
        <input type="text" id="pages" name="pages" value="<?php echo htmlspecialchars($prev->pages); ?>"><br><br>

        <label for="isbn">ISBN:</label><br>
        <input type="text" id="isbn" name="isbn" value="<?php echo htmlspecialchars($prev->isbn); ?>"><br><br>

        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <div>
            <input type="submit" id="submit" value="Update Details">
            <a href="index.php"><button type="button" id="cancel">Cancel</button></a>
        </div>

    </form>

</body>
</html>
