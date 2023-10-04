<div class="inner-nav">
    <div class="container-fluid text-center topnav">
        <a class= "<?= $active;?>" href="<?php echo LANG_URL ?>/spirituality">Spiritual Home</a> 
        <?php 
        foreach($spritiuality_categories as $cat)
        {
            if($spirtiual_current_cat == $cat['id'])
            {
                $active ="active";
            }
            else
            {
                $active ="";
            }
            ?>
                <a class= "<?= $active;?>" href="<?php echo LANG_URL ?>/spirituality/cat/<?= $cat['id'] ?>"><?= $cat['name'] ?></a> 
            <?php
        }
        ?>
    </div>
</div>