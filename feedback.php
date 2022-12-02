<?php
include("header.php");
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <title>Feedback</title>
  <!---title logo--->
  <link rel="shortcut icon" type="image/jpg" href=".\assets\logo.jpg"/>
  <!------end----->
  <!----meta ---->
  <meta charset="utf-8">
  <meta name="author" content="Ajay Gupta">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!----bootstrap cdn----->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-----------CSS Links---------->
  <!-- CSS only -->
  <link rel="stylesheet" type="text/css" href="./css/feedback.css">
  <!------------END------------>
  <!------------JQUERY------------>
   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <!------------------END------------>
 </head>
 <body>
 
<br>
<br>
<br><br>
<section>
<h1 align="center">Customer Feedback</h1>
   <div class="box">

    <div class="post">
      <div class="text">Thanks for rating us!</div>
      <div class="edit">Edit</div>
    </div>
     <div class="star-widget">
      <input type="radio" name="rate" id="rate-5"><label for="rate-5" class="fa fa-star "></label>
      <input type="radio" name="rate" id="rate-4"><label for="rate-4" class="fa fa-star"></label>
      <input type="radio" name="rate" id="rate-3"><label for="rate-3" class="fa fa-star"></label>
      <input type="radio" name="rate" id="rate-2"><label for="rate-2" class="fa fa-star"></label>
      <input type="radio" name="rate" id="rate-1"><label for="rate-1" class="fa fa-star"></label>
      <br><br>
       <form action="#">
         <div class="textarea">
           <textarea cols="30" placeholder="Describe your experience..."></textarea>
         </div>
          <div class="btn">
           <button type="submit">Post </button>
         </div>
       </form>
     </div>
   </div>
</section>
 <?php
 include("footer.php");
 ?>
        <script type="text/javascript">
          const btn=document.querySelector("button");
          const post=document.querySelector(".post");
          const widget=document.querySelector(".star-widget");
          const editBtn=document.querySelector(".edit");
          btn.onclick=()=>{
            widget.style.display ="none";
            post.style.display ="block";
           editBtn.onclick=()=>{
            widget.style.display ="block";
            post.style.display ="none";
          }
            return false;
          }
        </script>
 </body>
 </html>