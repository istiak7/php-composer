<?php views('/partials/header.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create post </title>
</head>
<body>
    <form action="<?= url('createpost')?>" method="post">
        <label for="title">Title</label>
        <input type="text" name="title" id="title"><br>
        <label for="content">Content</label>
        <textarea name="content" id="content" cols="30" rows="10"></textarea><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php views('/partials/footer.php') ;?>