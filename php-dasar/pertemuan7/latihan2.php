<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Art List</title>
</head>
<body>
    
    <ul>
        <li>
            <img src="img/<?= $print["images"];?>">
        </li>
        <li>Title   :<?= $print["title"];?></li>
        <li>IDR   :<?= $print["price"];?></li>
        <li>Artist:<?= $print["artist"];?></li>
        <li>Email  :<?= $print["email"];?></li>
    </ul>
</body>
</html>