<?php views('/partials/header.php');?>


<h2>show all post here...</h2><br>
<?php foreach ($data as $key => $value): ?>
    <?php echo $value['title'] .'     '. $value['content']. '<br>';?>
    <?php endforeach; ?>

<?php views('/partials/footer.php') ;?>