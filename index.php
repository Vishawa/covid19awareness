<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include 'link/links.php';
    include 'css/style.php';
    ?>
</head>
<body onload="fetch()">
<nav class="navbar navbar-expand-lg nav_style p-2">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact</a>
      </li>
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
<div class="main_header">
  <div class="row w-100 h-100">
    <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
      <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
        <img src="images/eksath.png" alt="" width="280" height="280">
      </div>
    </div>
    <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
      <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
        <h1>    Let's Stay Safe & Fight Together Against Cor<span class="corona_rot"><img src="images/corona.png" alt="" width="60" height="60"></span>na Virus</h1>
      </div>
</div>
</div>
</div>

<!-- *****************corona latest updates************************* -->

<section class="corona_update container-fluid">
  <div class="mb-3">
    <h3 class="text-center text-uppercase ">covid-19 updates</h3>
  </div>
  <div class="table-responsive table">
    <table class="table table-bordered table-stripped text-center " id="tbval">
      <tr>
        <th>Country</th>
        <th>TotalConfirmed</th>
        <th>TotalDeaths</th>
        <th>NewConfirmed</th>
        <th>NewDeaths</th>
      </tr>
    </table>
  </div>
</section>
<!-- <section class="corona_update">
  <div class="mb-3">
    <h3 class="text-uppercase text-center">covid-19 updates</h3>
  </div>
  <div class="d-flex justify-content-around align-items-center">
    <div>
    <h2 class="count">2,804,790</h2>
    <p>Passengers screened at airport</p>
    </div>
    
    <div>
    <h2 class="count">2,804,790</h2>
    <p>Active COVID-19 cases*</p>
    </div>

    <div>
    <h2 class="count">2,200,790</h2>
    <p>Cured/dischared</p>
    </div>

    <div>
    <h2 class="count">20000</h2>
    <p>Death cases</p>
    </div>
  </div>
</section> -->
<!-- *******************About Section********************* -->
<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
  <div class="section_header text-center mb-5 mt-4">
    <h2>About COVID-19</h2>
  </div>
  <div class="row pt-5">
    <div class="col-lg-5 col-md-6 col-12 ml-2 mr-2">
      <img src="images/aboutcorona.jpg" class="img-fluid" alt="">
    </div>

    <div class="col-lg-6 col-md-5 col-12">
      <h3>What is COVID-19(Corona-Virus)</h3>
      <p>COVID-19 is the infectious disease caused by the most recently 
        discovered coronavirus. This new virus and disease were known
        before the outbreak began in Wuhan, China , in December 2019.</p>
      <p>Coronavirus are a large family of viruses which may cause
        illness in animals or humans.In humans several coronaviruses
        are known to cause respiratory infections ranging from the
        common cold to more severe diseases such as Middle East
        Respiratory Syndrome(MERS) and Severe Acute Respiratory
        Syndrome(SARS).The most recently discovered coronavirus
        causes coronavirus disease COVID-19. </p>
    </div>
  </div>
</div>

<!-------------------------CORONAVIRUS SYMPTOMS------------------------>
<div class="container-fluid pt-5 pb-5 sub_section" id="sympid">
  <div class="section_header text-center mb-5 mt-4">
    <h2>Coronavirus Symptoms</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-5-col-12 mt-5">
      <figure>
      <img src="images/cough.png" class="img-fluid" width="120" height="120" alt="">
      </figure>
      <figcaption>Cough</figcaption>
    </div>
    <div class="col-lg-4 col-md-5-col-12 mt-5">
      <figure>
      <img src="images/cold.png" class="img-fluid" width="120" height="120" alt="">
      </figure>
      <figcaption>Cold</figcaption>
    </div>
    <div class="col-lg-4 col-md-5-col-12 mt-5">
      <figure>
      <img src="images/runny-nose.png" class="img-fluid" width="120" height="120" alt="">
      </figure>
      <figcaption>Runny Nose</figcaption>
    </div>
    <div class="col-lg-4 col-md-5-col-12 mt-5">
      <figure>
      <img src="images/difficulty-breathing.png" class="img-fluid" width="120" height="120" alt="">
      </figure>
      <figcaption>Shortness of Breath</figcaption>
    </div>
    <div class="col-lg-4 col-md-5-col-12 mt-5">
      <figure>
      <img src="images/fever.png" class="img-fluid" width="120" height="120" alt="">
      </figure>
      <figcaption>Fever</figcaption>
    </div>
    <div class="col-lg-4 col-md-5-col-12 mt-5">
      <figure>
      <img src="images/tiredness.png" class="img-fluid" width="120" height="120" alt="">
      </figure>
      <figcaption>Tiredness</figcaption>
    </div>
  </div>
</div>
</div>
</div>

<!-- Prevention Against Coronavirus -->
<div class="container-fluid pt-5 pb-5 sub_section" id="preventid">
  <div class="section_header text-center mb-5 mt-4">
    <h2>6 Steps of Prevention Against Coronavirus</h2>
 </div>
 <div class="container">
   <div class="row">
     <div class="col-lg-4 col-md-4 col-12 mt-5">
       <div class="row">
         <div class="col-lg-4 col-md-4 col-12">
           <figure class="text-center">
             <img src="images/soap.png" class="img-fluid" width="90" height="90" alt="">
           </figure>
         </div>

         <div class="col-lg-8 col-md-8 col-12">
           <p>Wash your hand regularly for atleast 20 seconds with soap and water.</p>
         </div>
       </div>
     </div>

     <div class="col-lg-4 col-md-4 col-12 mt-5">
       <div class="row">
         <div class="col-lg-4 col-md-4 col-12">
           <figure class="text-center">
             <img src="images/medical-mask.png" class="img-fluid" width="90" height="90" alt="">
           </figure>
         </div>

         <div class="col-lg-8 col-md-8 col-12">
          Wear your masks properly and avoid touching nose, mouth and your eyes.
         </div>
       </div>
     </div>

     <div class="col-lg-4 col-md-4 col-12 mt-5">
       <div class="row">
         <div class="col-lg-4 col-md-4 col-12">
           <figure class="text-center">
             <img src="images/keep-distance.png" class="img-fluid" width="90" height="90" alt="">
           </figure>
         </div>

         <div class="col-lg-8 col-md-8 col-12">
          Maintain a social distance of atleast 2 metres from each other in public places.
         </div>
       </div>
     </div>
  

     <div class="col-lg-4 col-md-4 col-12 mt-5">
       <div class="row">
         <div class="col-lg-4 col-md-4 col-12">
           <figure class="text-center">
             <img src="images/stay-at-home.png" class="img-fluid" width="90" height="90" alt="">
           </figure>
         </div>

         <div class="col-lg-8 col-md-8 col-12">
          Stay at home as far as possible, avoid going outside of your home unneccesarily.
         </div>
       </div>
     </div>


     <div class="col-lg-4 col-md-4 col-12 mt-5">
       <div class="row">
         <div class="col-lg-4 col-md-4 col-12">
           <figure class="text-center">
             <img src="images/tv.png" class="img-fluid" width="90" height="90" alt="">
           </figure>
         </div>

         <div class="col-lg-8 col-md-8 col-12">
          Keep yourself updated by regularly watching news about coronavirus.
         </div>
       </div>
     </div>
   

     <div class="col-lg-4 col-md-4 col-12 mt-5">
       <div class="row">
         <div class="col-lg-4 col-md-4 col-12">
           <figure class="text-center">
             <img src="images/doctor.png" class="img-fluid" width="90" height="90" alt="">
           </figure>
         </div>

         <div class="col-lg-8 col-md-8 col-12">
          In case of above symptoms call a doctor or go and see a doctor if needed.
         </div>
       </div>
    </div>
   </div>
  </div>
</div>


<!-- ---------------------Contact Us ------------------------------->
<div class="container-fluid pt-5 pb-5" id="contactid">
  <div class="section_header text-center mb-5 mt-4">
    <h2>Contact Us</h2>
 </div>
 <div class="container">
   <div class="row">
     <div class="col-lg-8 offset-lg-2 col-12">
     <form action= "" method="POST">

     <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control"  placeholder="Username" name="username" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label >Email</label>
    <input type="email" class="form-control"  placeholder="name@example.com" name="email" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label >Mobile</label>
    <input type="number" class="form-control"  placeholder="Mobile no." name="mobile" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label>Select Symptoms</label><br>
    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
      <input type="checkbox" class= "custom-control-input" id= "customcheckbox1" name= "coronasym[]" value= "cold">
      <label class= "custom-control-label" for= "customcheckbox1">cold</label>
    </div>

    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
      <input type="checkbox" class= "custom-control-input" id= "customcheckbox2" name= "coronasym[]" value= "fever">
      <label class= "custom-control-label" for= "customcheckbox2">fever</label>
    </div>

    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
      <input type="checkbox" class= "custom-control-input" id= "customcheckbox3" name= "coronasym[]" value= "breathlessness">
      <label class= "custom-control-label" for= "customcheckbox3">difficulty in breathing</label>
    </div>

    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
      <input type="checkbox" class= "custom-control-input" id= "customcheckbox4" name= "coronasym[]" value= "tired">
      <label class= "custom-control-label" for= "customcheckbox4">feeling weak</label>
    </div>
  </div>
  
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="msg" rows="3"></textarea>
      </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form> 
     </div>
   </div>
 </div>
</div>

<script>
  function fetch(){
    $.get("https://api.covid19api.com/summary",

    function(data){
      // console.log(data['Countries'].length);
      var tbval=document.getElementById('tbval');

      for(var i=1; i<(data['Countries'].length); i++){
        var x=tbval.insertRow();
        x.insertCell(0);

        tbval.rows[i].cells[0].innerHTML=data['Countries'][i-1]['Country'];
        tbval.rows[i].cells[0].style.background="#7a4a91";
        tbval.rows[i].cells[0].style.color="#fff";

        x.insertCell(1);
        tbval.rows[i].cells[1].innerHTML=data['Countries'][i-1]['TotalConfirmed'];
        tbval.rows[i].cells[1].style.background='#4bb7d8';

        // x.insertCell(2);
        // tbval.rows[i].cells[2].innerHTML=data['Countries'][i-1]['TotalRecovered'];
        // tbval.rows[i].cells[2].style.background='#4bb7d8';

        x.insertCell(2);
        tbval.rows[i].cells[2].innerHTML=data['Countries'][i-1]['TotalDeaths'];
        tbval.rows[i].cells[2].style.background='#f36e23';

        x.insertCell(3);
        tbval.rows[i].cells[3].innerHTML=data['Countries'][i-1]['NewConfirmed'];
        tbval.rows[i].cells[3].style.background='#4bb7d8';

        // x.insertCell(5);
        // tbval.rows[i].cells[5].innerHTML=data['Countries'][i-1]['NewRecovered'];
        // tbval.rows[i].cells[5].style.background='#9cc850';

        x.insertCell(4);
        tbval.rows[i].cells[4].innerHTML=data['Countries'][i-1]['NewDeaths'];
        tbval.rows[i].cells[4].style.background='#f36e23';
       }
    }
    )
  }
</script>
<!------------------top cursor------------------------->
<div class="container scrolltop float-right pr-5">
  <i class="fa fa-arrow-up" onclick= "topFunction()" id= "myBtn"></i>
</div>

<!---------------------footer---------------------------->
<footer class= "mt-5">
  <div class="footer_style text-white text-center container-fluid">
    <p> Covid19@sarscov2</p>
  </div>
</footer>


<script type= "text/javascript">
  mybutton= document.getElementById(myBtn);

  window.onscroll = function() {scrollFunction()};
  function scrollFunction(){
    if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
      mybutton.style.display = "block";
    } else{
      mybutton.style.display = "none";
    }
  }
  function topFunction(){
    document.body.scrollTop = 0; //For Safari
    document.documentElement.scrollTop = 0;// For Chrome, Firefox,IE and Opera
  }

</script>
</body>
</html>

<?php

include 'dbcon.php';

if(isset($_POST['submit'])){
  $username= $_POST['username'];
  $email= $_POST['email'];
  $mobile= $_POST['mobile'];
  $symp= $_POST['coronasym'];
  $msg= $_POST['msg'];
}

$chk= "";

foreach($symp as $chk1){
  $chk .= $chk1.",";
}

$insertquery= "insert into coronacase(username, email, mobile, symp, message)values('$username','$email','$mobile','$chk','$msg')";
$query= mysqli_query($con, $insertquery);
if($query){
  ?>
  <script>
      alert("Inserted successful");
  </script>
  <?php
} else{
  ?>
  <script>
      alert("Not Inserted");
  </script>
  <?php
}


?>