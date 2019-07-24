<?php
    if(isset($_PUT['submit'])){
   $name=$_PUT['name'];
   $email=$_PUT['email'];
   $phone=$_PUT['phone'];
   $msg=$_PUT['msg'];
?>
<html>
  <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
      <title> sastra school of education/login form </title>
      <link type="text/css" rel="stylesheet" href="style.css"  media="screen"/>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


      <style>
        .row{
            width:50%;
            height:20%;
           }
       </style>
  

  
  <script>
      $( '#contact-form').submit(function(e) {
     var name = document.getElementById('name').addEventListener("input", submit),
         email = document.getElementById('email').addEventListener("input", submit),
         phone = document.getElementById('phone').addEventListener("input", submit);
     
    if(!name.value || !email.value || !phone.value)
   {
     alertify.error('please check your entries')
    }
     else{
        e.preventDefault()
   $(this).get(0).reset()
   alertify.success('message sent')
    
       }   
    
    })
</script>
   </head>
 <body>
   <div class="headerx">
      <marquee direction="right" class="text-info bg-info ailgn-tops" >  "ENTER YOUR DETAILS HERE TO GET STUDENT FORM" </marquee>
   
   </div>
   <div class="row ">
    <div class="col-sm-2" >
               <img class="img-rounded img-responsive"  src=log0.jpg alt="LOGO" style="width:100%;" >
    </div>
    </div>

 
  <div class="signin">   
    <h2 font-family:Impact font-weight:bold color: red>  LOGIN HERE</h2>
   <form action="<?php echo $PHP_SELF;?>" method="PUT" name="form" class="form-box">
   
        <label for="name">user name</label><br>
        <input type="text" class="inp" name="name"  placeholder=" enter your name" required><br>
      
        <label for="email">email id</label><br>
        <input type="email"  class="inp" name="email"  placeholder="  enter your email address" required><br>

       
        <label for="phone">moblie no</label><br>
        <input type="tel" name="phone" class="inp" placeholder="  enter your mobile number" required><br>
        
        <p name="msg" class="hiddentext" style="visibility:hidden"> https://s3.amazonaws.com/www.sastrastudents3.com/studentform.html</p><br>
       
        <input type="submit" class="snd-btn button" name="submit" value="send">
    </form>
     <a href="thank.html">IF YOU ARE SUBMITTED ABOVE DETAILS</a>
  </div>
       
</body>
</html>
<?
 $From='ganeshtedi123@gmail.com';
   $subject='FORM SUBMISSION';
   $message='Name: ".$name.""\n" "Phone: ".$phone.""\n". "wrote the following"."\n\n" .$msg;
  $headers="to: ".$email;
   if(mail($to, $subject, $message, $headers)){
     echo " sent successfully!!! thank you"." ".$name."; }
   else{
      echo " soething went wrong!"; }  
?>