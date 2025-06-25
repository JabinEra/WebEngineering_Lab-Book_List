<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div>
        <h1>Book List using PHP </h1>
    </div>
    <div>
        <button onclick="location.href='insert.php'">Add Book</button>
    </div>
    <div>
        <table>
            <tr>
                <td>
                    <?php
                    include('load_book.php');
                    ?>
                </td>
            </tr>
        </table>
    </div>
    
</body>
</html> 