<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$arrCategories = array();
foreach ($all_categories as $categorie) {
    if (isset($_GET['category']) && is_numeric($_GET['category']) && $_GET['category'] == $categorie['sub_for']) {
        $arrCategories[] = $categorie;
    }
    if (!isset($_GET['category']) || $_GET['category'] == '') {
        if ($categorie['sub_for'] == 0) {
            $arrCategories[] = $categorie;
        }
    }
}
?>

<style>
.avatar {
  display: inline-block;
  width: 150px;
  height: 150px;
  border-radius: 50%;

  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
}
.topnav {
  overflow: hidden;
  background-color: #f4bc33;
}

.topnav a {
  float: left;
  /*color: #f2f2f2;*/
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #222;
  color: white;
}

.topnav a.active {
  /*background-color: #4CAF50;*/
  color: white;
}
#submitphoto{
  margin-bottom:10px;
}
</style>
<!-- <div class="inner-nav">
    <div class="container topnav">
        <a href="myaccount/profile" class="active">Basic Info</a> 
        <a href="myaccount/education">Education</a> 
        <a href="myaccount/experience">Experience</a> 
        <a href="myaccount/appliedjobs">Applied Jobs</a> 
        <a href="myaccount/subscripiton">Subscripiton</a> 
        <a href="myaccount/search">Search Jobs</a>
    </div>
</div> -->

<div class="container">
    <div class="body">
        <form action="post" id="pro_search" class="navbar-form" role="search">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search" id="search_string" name="q">
			</div>
            <div id="prod_search">
               
            </div>
            <div id="prod_category">
                
            </div>
		</form>
    </div>
 </div>
        <?= $links_pagination ?>
        <?php include 'bodyFooter.php' ?>

	
<script>	
$(document).on('keyup', '#search_string', function(){
    var searchstr = $("#search_string").val();
    var get_len = searchstr.length;
    if(get_len > 3)
    {
        $.ajax({
                url: "<?php echo base_url();?>/home/ajax_search",
                type:'POST',
                dataType: "html",
                data: "search="+searchstr,
                success: function(response)
                {
                    var get_Res = response.split("$$");
                    $("#prod_search").html('');
                    $("#prod_search").html(get_Res[0]);
                    $("#prod_category").html('');
                    $("#prod_category").html(get_Res[1]);
                }
        });
    }
    else
    {
        $("#prod_search").html('');
        $("#prod_category").html('');
    }
    
	return false;
});


$("#pro_search").submit(function(e){
    var searchstr = $("#search_string").val();
    var get_len = searchstr.length;
    if(get_len > 3)
    {
        $.ajax({
                url: "<?php echo base_url();?>/home/ajax_search",
                type:'POST',
                dataType: "html",
                data: "search="+searchstr,
                success: function(response)
                {
                    var get_Res = response.split("$$");
                    $("#prod_search").html('')
                    $("#prod_search").html(get_Res[0]);
                    $("#prod_category").html('')
                    $("#prod_category").html(get_Res[1]);
                }
        });
    }else
    {
        $("#prod_search").html('');
        $("#prod_category").html('');
    }
    
	return false;
});
</script>	