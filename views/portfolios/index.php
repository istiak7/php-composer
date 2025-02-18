
<?php views('/partials/header.php');?>

<?php foreach($portfolios as $porfolio):?>
<li><?=$porfolio['title']?></li>
<?php endforeach;?>

<?php views('/partials/footer.php') ;?>