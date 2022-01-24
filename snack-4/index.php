<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $lorem_paragraphs = [];
    $very_long_lorem = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis eum earum quia porro eveniet eaque cum, mollitia corporis assumenda. Veniam autem similique recusandae hic, odit facilis suscipit magni ab. eum! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde, quam sapiente. Architecto natus officia dolorum totam asperiores laboriosam, adipisci numquam, cumque recusandae. excepturi soluta officiis iste molestiae neque consequuntur accusamus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores similique repellendus ratione debitis facilis! Sunt, culpa perferendis. magni soluta quos consequuntur. consequatur sint ratione, quibusdam aperiam praesentium quas consectetur velit. Lorem ipsum dolor sit amet consectetur adipisicing elit. A omnis optio architecto quibusdam animi aspernatur harum corporis ipsum sunt! Aliquam. voluptas unde obcaecati repudiandae reiciendis! Ex soluta. voluptatibus omnis quasi.';
    $lorem_paragraphs = explode('.', $very_long_lorem);

    for ($i = 0; $i < count($lorem_paragraphs); $i++) {
    ?>
    <p><?php echo($lorem_paragraphs[$i]); ?></p>
    <?php } ?>
</body>
</html>