<div class="inner-nav">
    <div class="container-fluid text-center topnav">
    <a class= "<?= ($cat=='') ? 'active' : ''?>" href="<?php echo LANG_URL ?>/bestincities">City Home</a> 
        <?php 
        foreach($categories as $key=>$category)
        {
            if("$key"=="$cat")
            {
                $active ="active";
            }
            else
            {
                $active ="";
            }
            ?>
                <a class= "<?= $active;?>" href="<?php echo LANG_URL ?>/bestincities/index/<?= $key ?>"><?= $category ?></a> 
            <?php
        }
        ?>
    </div>
</div>