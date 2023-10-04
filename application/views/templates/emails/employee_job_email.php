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
                            Hi <?=$profile[0]->name;?>,<br> <br>
                            Welcome to My Guru Help!<br> <br>
                            You have applied for a job successfully . Please Login to explore more jobs.<br><br>
                        </p>
                        <br>  <br>
                        <a href="<?php echo base_url(); ?>/login" target="_blank" style="background-color: #f4bc33;color:black;padding: 13px;">Login</a>
                        <br>  <br>
                            Here is the link to access your area: <a href='<?php echo base_url(); ?>/myaccount/jobview/<?=$job[0]->id;?>' target="_blank">View Job</a><br><br>
                            Please Contact My Guru Help Manager if you have any questions<br><br>
                            Once again, thank you!!!<br><br>
                        <div style="text-align: Right;">
                            With warm regards,<br>
                            My Guru Help
                        </div>
                    </div>
                </div>   
            </div>   
        </div>
        <center>2020 © My Guru Help. ALL Rights Reserved.</center>
        </body>
    </html> 