<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <style>
        .container {
            padding: 0;
            margin: 0;
            width: 1024px;
            display: flex;
            justify-content: center;
        }

        .wrapper {
            width: 600px;
            border: 1px solid #ccc;
            border-radius: 12px;
            margin: 0 auto;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <h1>Hmmm</h1>

            <div class="book-list">
                <ul>
                    <?php foreach ($books as $book): ?>
                        <li><?php echo $book->title ?></li>
                    <?php endforeach ?>
                </ul>
            </div>

        </div>
    </div>
</body>
</html>