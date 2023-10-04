<!DOCTYPE html>
<html lang="<?= MY_LANGUAGE_ABBR ?>">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" /> 
        <meta name="description" content="<?= $description ?>" />
        <meta name="keywords" content="<?= $keywords ?>" />
        <meta property="og:title" content="<?= $title ?>" />
        <meta property="og:description" content="<?= $description ?>" />
        <meta property="og:url" content="<?= LANG_URL ?>" />
        <meta property="og:type" content="website" />
        <!--<meta property="og:image" content="<?= !is_null($image) ? $image : base_url('assets/img/site-overview.png') ?>" />-->
        <title><?= $title ?></title>
        <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css') ?>" />
        <link href="<?= base_url('templatecss/bootstrap.min.css') ?>" rel="stylesheet" />
        <link href="<?= base_url('assets/css/bootstrap-datepicker.min.css') ?>" rel="stylesheet" />
        <link href="<?= base_url('templatecss/custom.css') ?>" rel="stylesheet" />
		<link href="<?= base_url('templatecss/custom2.css') ?>" rel="stylesheet" />
        <link href="<?= base_url('cssloader/theme.css') ?>" rel="stylesheet" />
        <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
        <script src="<?= base_url('loadlanguage/all.js') ?>"></script>



        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>



        <?php if ($cookieLaw != false) { ?>
            <script type="text/javascript">
                window.cookieconsent_options = {"message": "<?= $cookieLaw['message'] ?>", "dismiss": "<?= $cookieLaw['button_text'] ?>", "learnMore": "<?= $cookieLaw['learn_more'] ?>", "link": "<?= $cookieLaw['link'] ?>", "theme": "<?= $cookieLaw['theme'] ?>"};
            </script>
            <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
        <?php } ?>
    </head>
    <body>
        <div id="wrapper">
            <div id="content">
                <header>
                  
                   <div class="languages-bar">
                        <div class="container-fluid">
                            <div class="countrywrapper">
                            <?php
                            $num_langs = count($allLanguages);
                            if ($num_langs > 0) {
                                ?>
                               
                                <ul class="pull-left">
                                    <?php
                                    $i = 1;
                                    $lang_last = '';
                                    foreach ($allLanguages as $key_lang => $lang) {
                                        ?>
                                        <li <?= $i == $num_langs ? 'class="last-item"' : '' ?>>
                                            <img src="<?= base_url('attachments/lang_flags/' . $lang['flag']) ?>" alt="Language-<?= MY_LANGUAGE_ABBR ?>"><a href="<?= base_url($key_lang) ?>"><?= $lang['name'] ?></a>
                                        </li>
                                        <?php
                                        $i++;
                                    }
                                    ?>
                                </ul>
                                <select name="country" onchange="">
                                    <option <?php if(isset($_SESSION['country_name']) && $_SESSION['country_name'] =='Canada'){ ?> selected <?php } ?>>Canada</option>
                                    <option <?php if(isset($_SESSION['country_name']) && $_SESSION['country_name'] =='India'){ ?> selected <?php } ?>>India</option>
                                </select>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row logo-and-search">
                            
                            <div class="col-md-12">

                                       
										  <div class="navbar-header">
											<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
											  <span class="sr-only">Toggle navigation</span>
											  <span class="icon-bar"></span>
											  <span class="icon-bar"></span>
											  <span class="icon-bar"></span>
											</button>
											 <div class="logo-col">
												<a href="<?= base_url() ?>">
													<img src="<?= base_url('attachments/site_logo/' . $sitelogo) ?>" class="site-logo" alt="<?= $_SERVER['HTTP_HOST'] ?>">
												</a>
												<div id="site-detail">					
													<h1 id="site-title"> 					
														<a href="<?= base_url(MY_LANGUAGE_ABBR) ?>" > My Guru Help </a>
													</h1>  <!-- end .site-title -->
													<div id="site-description"> Centralized for All Needs </div> <!-- end #site-description -->
												</div>
											</div>
										  </div>
										  <div id="navbar" class="navbar-collapse collapse">
											<ul class="nav navbar-nav topmenu1">
											<li>
												<form class="navbar-form" role="search">
												<div class="input-group">
													<input type="text" class="form-control" placeholder="search" name="q">
													<div class="input-group-btn">
														<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
													</div>
												</div>
												</form>    
											</li>
											 
											 <li>
                                             <div class="dropdown show">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-user" aria-hidden="true"></i> My Account
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="<?= base_url();?>vendor/login">Vendor Account</a>
                                                <a class="dropdown-item" href="<?= base_url();?>serviceProvider/login">Service Provider</a>
                                                
                                                <a class="dropdown-item" href="<?= base_url();?>mghDelivery/login">Delivery Account</a>
                                                <a class="dropdown-item" href="<?= base_url();?>employer/login">Employer</a>
												<?php echo ($_SESSION['logged_user'] !="")? '<a class="dropdown-item" href="'.LANG_URL.'/logout">Logout</a>' : '<a class="dropdown-item" href="'.LANG_URL.'/login">Login</a>';?>
                                            </div>
                                            </div>    
                                          </li>
                                          <li><a href="<?= LANG_URL . '/shopping-cart' ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart<span class="sum-scope">
                                                    (<span class="sumOfItems"><?= $cartItems == 0 || $cartItems == NULL ? lang('empty') : $sumOfItems ?></span>)
                                                </span></a></li>
											 
										  </div><!--/.nav-collapse -->
										
                                   
                            </div>
                        </div>
                        <div class="row bg-light">
                            <div class="col-md-12 nopadding">
                                <nav class="navbar topmenu">   
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar2" aria-expanded="false" aria-controls="navbar">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            <?php if ($navitext != null) { ?>
                                                <a class="navbar-brand visible-xs" href="<?= base_url() ?>"><?= $navitext ?></a>
                                            <?php } ?>
                                        </div>
                                        <div id="navbar2" class="navbar-collapse collapse">
                                       
					<ul>

						<li>
							<a href="<?= LANG_URL.'/categories/products';?>"><?php if(MY_LANGUAGE_ABBR=='hi') {
                                echo 'उत्पाद';
                            } elseif(MY_LANGUAGE_ABBR=='en') {
                                echo 'Products';
                            } ?></a>
							<ul>
							<?php
							foreach($products_categories as $key=>$val)
							{
								?>
									<li>
										<a href="<?= LANG_URL.'/categories/'.$val['id']; ?>">
										<?php 
										if (file_exists(FCPATH.'attachments/categories_images/'.$val['id'].'.jpg')) {
											$src = base_url('attachments/categories_images/'.$val['id'].'.jpg');
										}
										else
										{
											$src =  base_url('attachments/no-image.png');
										}
										?>
											<a href="<?= LANG_URL.'/categories/products/'.$val['id'];?>"><img src="<?= $src;?>"><br><?= $val['name'];?></a>
											<?php
                                            if (count($val['children']) > 0) {
												echo '<ul>';
                                                foreach ($val['children'] as $key2=>$val2) {
													?>
													<li><a href="<?= LANG_URL.'/products/'.$val['id'].'/'.$val2['id'];?>"><?= $val2['name'];?></a></li>
													<?php
												}
												echo '</ul>';
											}
											
											?>
									</li>		

								<?php
							}
							
							?>
							</ul>
						</li>	
						<li>
							<a href="<?= LANG_URL.'/categories/services';?>"><?php if(MY_LANGUAGE_ABBR=='hi') {
                                echo 'सेवाएं';
                            } elseif(MY_LANGUAGE_ABBR=='en') {
                                echo 'Services';
                            } ?></a>
						
                        </li>
                        <li>
							<a href="<?= LANG_URL.'/events';?>"><?php if(MY_LANGUAGE_ABBR=='hi') {
                                echo 'आयोजन';
                            } elseif(MY_LANGUAGE_ABBR=='en') {
                                echo 'Events';
                            } ?></a>
						
                        </li>
                        <li>
							<a href="<?= LANG_URL.'/myaccount/search';?>"><?php if(MY_LANGUAGE_ABBR=='hi') {
                                echo 'नौकरियां';
                            } elseif(MY_LANGUAGE_ABBR=='en') {
                                echo 'Jobs';
                            } ?></a>
						
                        </li>
                        <li>
							<a href="<?php echo base_url() ?>deals"><?php if(MY_LANGUAGE_ABBR=='hi') {
                                echo 'डील';
                            } elseif(MY_LANGUAGE_ABBR=='en') {
                                echo 'Deals';
                            } ?></a>
                        </li>
                        <li>
							<a href="<?= LANG_URL."/spirituality"?>"><?php if(MY_LANGUAGE_ABBR=='hi') {
                                echo 'आध्यात्मिकता';
                            } elseif(MY_LANGUAGE_ABBR=='en') {
                                echo 'Spirituality';
                            } ?></a>
                        </li>
                        <li>
							<a href="<?= LANG_URL."/bestincities"?>"><?php if(MY_LANGUAGE_ABBR=='hi') {
                                echo 'शहर में सबसे अच्छा';
                            } elseif(MY_LANGUAGE_ABBR=='en') {
                                echo 'Best in City';
                            } ?></a>
						</li>
						<!--<li><a href="#">Jobs</a></li>-->
					</ul>	

                                    </div>
                                </nav>
                                
                            </div>

                        </div>
                    </div>

                </header>
                <?php 
                if(current_url() != base_url())
                {
                    include_once('search_box.php');
                }
                
                ?>