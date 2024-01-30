<?php  

include 'head.php';
 
 
 include 'header.php';

?> 

<script type= "text/javascript">

$(document).ready(function () {

  $("#MyForm").on("submit", function (e) {

    e.preventDefault();

    $("#submit").hide();
    $("#preloader").show();

    $.ajax({

      type: "POST",

      url: "db3.php",

      data: new FormData(this),

      beforeSend: function () {

        $("#preloader").show();


      },

      contentType: false,

      cache: false,

      processData: false,

      success: function (result) {

        alert(result);

      },

      complete: function (data) {

        $("#submit").show();
        $("#preloader").hide();

      },

    });

  });

});

</script>


 
   <body class= "body3">
    <div class= "container3">
    <div class= "col-md-12">
    <h2 style= "text-align: center; padding-top: 300px;"> Welcome To Your DashBoard </h2>
   <p style= "text-align: center;"> Want to request for a panel? </p>

 <form id="MyForm" enctype="multipart/form-data">
 
  <input type= "text" name= "request" style= "padding-bottom: 280px; padding-top: 17px; border-radius: 8px;" class= "form-control" placeholder= "make your request..." required /></br>
 
  <button class= "btn btn-success" style= "margin-bottom: 80px;" id= "submit" name="submit"> Request </button>

  <div id="preloader" style="display:none; width: 38%; margin-top: 280px; margin-right: 200px;  background-color: whitesmmoke;">

      <img src="https://icons8.com/preloaders/preloaders/1480/Fidget-spinner.gif" alt="" srcset="">

  </div>
 </form>
 </div>
</div>
 </body>
 