<!DOCTYPE html>
<head>

  <meta charset="utf-8" />

  <title>Welcome to My Guru Help</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

</head>
<html>
        <body>
        <div align="center">
             <div style="max-width: 680px; min-width: 500px; border: 2px solid #e3e3e3; border-radius:5px; margin-top: 20px">   
                <div>
                    <img src="<?php echo base_url(); ?>/attachments/site_logo/logo.png" width="250" alt="My Guru Help" border="0"  />
                </div> 
                <div  style="background-color: #fbfcfd; border-top: thick double #cccccc; text-align: left;">
                    <div style="margin: 30px;">
                        <p>
                            Dear Company,<br> <br>
                            Welcome to My Guru Help!<br> <br>
                            We have a received a request for your "<?=$job[0]->job_title;?>". Please Login to check the details<br><br>
                        </p>
                        <br> <br>
                        <a href="<?php echo base_url(); ?>/employer/login" target="_blank" style="background-color:#f4bc33;color:black;padding:13px;">Login</a>
                        <br>  <br>                      
                            Here is the link to access your area: <a href='<?php echo base_url(); ?>/myaccount/jobview/<?=$job[0]->id;?>' target="_blank">View Job</a><br><br>
                        <div style="text-align: Right;">
                            Regards,<br>
                            My Guru Help Team
                        </div>
                    </div>
                </div>   
            </div>   
        </div>
        <center>2020 © My Guru Help. ALL Rights Reserved.</center>
        </body>
    </html> 