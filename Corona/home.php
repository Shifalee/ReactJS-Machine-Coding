<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>
     
</head>
<body  onload="fetch()">
<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto  pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#sympid">symptoms</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#preventid">prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#worldcoronaid">WorldCoronaLive</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="indiacoronalive.php">indiacCronaLive</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="indiadaywise.php">indiaDayWise</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#contactid">contact</a>
      </li>
      
    </ul>
    </div>
    </nav>


    <div class="main_header">
             <div class="row w-100 h-100">
             <div class=" col-lg-5 col-md-5 col-12 order-lg-1 order-2">
             <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
            <img src="Camera Roll/virusphoto.jpg" width="230" height="230">
            </div>
            </div>

            <div class=" col-lg-7 col-md-7 col-12 order-lg-2 order-1">
                    <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
                    <h1>Let's Stay Safe & Fight Together Against Cor  <span class="corona_rot"><img src="Camera Roll/sm.jpg" width="75" height="75"></span>  na Virus</h1>
                   </div>
                   </div>
                  </div>
                  </div>



                   <!--*******************corona latest updates*********************-->
   
   <section class="corona_update container-fluid">
   <div class="mb-3" id="worldcoronaid">
   <h3 class="text-uppercase text-center">COVID-19 LIVE UPDATE OF THE WORLD</h3>
   </div>
      

      <div class="table-responsive">

      <table class=" table table-bordered table-striped text-center" id="tbval">

      <tr>
      <th>Country</th>
      <th>TotalConfirmed</th>
      <th>TotalRecovered</th>
      <th>TotalDeaths</th>
      <th>NewConfirmed</th>
      <th>NewRecovered</th>
      <th>NewDeaths</th>
      </tr>
      </table>
      </div>

   </div>  
   </section>

   <!--***********************about section *********-->

<div  class="container-fluid sub_section pt-5 pb-5" id="aboutid">
<div class="section_header text-center mb-5 mt-4">
  <h1>About COVID-19</h1>
</div>
<div class="row pt-5">
<div class="col-lg-5 col-md-6 col-12 ml-5">
<img src="Camera Roll/corona virus1.png" class="img-fluid">
</div>

<div class=" col-lg-6 col-md-6 col-12">
<h2>  What is COVID-19 (Corona-Virus)</h2>
<p>COVID-19 is the infection disease caused by the most recently discovered coronavirus.This new virus and disease were unknown before the outbreak began in Wuhan,chinna,in December 2019.</p>
<p>Coronavirus are a large family of viruses which may cause illness in animals or humans. In humans,several coronaviruses are known to cause respiratory infections ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome(MERS) and Serve Acute Respiratory Syndrome(SARS). The most recently discovered coronavirus causes coronavirus disease COVID-19.</p>
</div>
</div>


<!----------Corona symptons----------------------->
<div  class="container-fluid  pt-5 pb-5" id="sympid">
<div class="section_header text-center mb-5 mt-4">
  <h1>Coronavirus symptoms</h1>
</div>

<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4 col-12 mt-5">
<figure class="text-center">
<img src="Camera Roll/cough.png" class="img-fluid" width="140" height="140">
<figcaption> cough</figcaption>
</figure>
</div>


<div class="col-lg-4 col-md-4 col-12 mt-5">
<figure class="text-center">
<img src="Camera Roll/runny nose.jpg" class="img-fluid" width="140" height="140">
<figcaption> runny nose</figcaption>
</figure>
</div>


<div class="col-lg-4 col-md-4 col-12 mt-5">
<figure class="text-center">
<img src="Camera Roll/fever1.jpg" class="img-fluid" width="140" height="140" bg-none;>
<figcaption> fever</figcaption>
</figure>
</div>


<div class="col-lg-4 col-md-4 col-12 mt-5">
<figure class="text-center">
<img src="Camera Roll/cold.jpg" class="img-fluid" width="140" height="140">
<figcaption> cold</figcaption>
</figure>
</div>


<div class="col-lg-4 col-md-4 col-12 mt-5">
<figure class="text-center">
<img src="Camera Roll/tiredness1.jpg" class="img-fluid" width="140" height="140">
<figcaption> tiredness</figcaption>
</figure>
</div>

<div class="col-lg-4 col-md-4 col-12 mt-5">
<figure class="text-center">
<img src="Camera Roll/breathing.png" class="img-fluid" width="140" height="140">
<figcaption>difficulty breathing(serve cases)</figcaption>
</figure>
</div>


</div>
</div>
</div>


   <!----------Prevention against Coronavirus----------------------->
   <div  class="container-fluid  pt-5 pb-5" id="preventid">
<div class="section_header text-center mb-5 mt-4">
  <h1> 6 steps Prevention Against Coronavirus</h1>
</div>
   
   <div class="container">
         <div class="row">
              <div class="col-lg-4 col-md-4 col-12 mt-5">
                  <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                        <figure class="text-center">
                         <img src="Camera Roll/handwash.jpg" class="img-fluid" width="90" height="90">
                          <figcaption></figcaption>
                       </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                        <p>Wash your hands regularly for 20 seconds,with soap and water or alcohol-based hand rub.</p>
                        
                        </div>
                 </div>
                 </div>

                 <div class="col-lg-4 col-md-4 col-12 mt-5">
                  <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                        <figure class="text-center">
                         <img src="Camera Roll/mask.jpg" class="img-fluid" width="90" height="90">
                          <figcaption></figcaption>
                       </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                        <p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze. </p>
                        
                        </div>
                 </div>
                 </div>

                 <div class="col-lg-4 col-md-4 col-12 mt-5">
                  <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                        <figure class="text-center">
                         <img src="Camera Roll/distance.jpg" class="img-fluid" width="90" height="90">
                          <figcaption></figcaption>
                       </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                        <p>Avoid close contact (1 meter or 3 feet) with people who are unwell.</p>
                        
                        </div>
                 </div>
                      
                 </div>

                 <div class="col-lg-4 col-md-4 col-12 mt-5">
                  <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                        <figure class="text-center">
                         <img src="Camera Roll/stay home.jpg" class="img-fluid" width="90" height="90">
                          <figcaption></figcaption>
                       </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                        <p>Stay home and self-isolate from others in the household if you feel unsafe.</p>
                        
                        </div>
                 </div>
                 </div>

                 <div class="col-lg-4 col-md-4 col-12 mt-5">
                  <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                        <figure class="text-center">
                         <img src="Camera Roll/news.jpg" class="img-fluid" width="90" height="90">
                          <figcaption></figcaption>
                       </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                        <p>Stay informed by watching news and follow the recommended practices.</p>
                        
                        </div>
                 </div>
                 </div>

                 <div class="col-lg-4 col-md-4 col-12 mt-5">
                  <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                        <figure class="text-center">
                         <img src="Camera Roll/medical attention.jpg" class="img-fluid" width="90" height="90">
                          <figcaption></figcaption>
                       </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                        <p>If you have fever,cough and difficulty breathing,seek medical care early.</p>
                        
                        </div>
                 </div>
               </div>
        </div>
    </div>


    <!--//////////////////////////////////Contact US ASAP /////////////////-->

    <div class="container-fluid pt-5 pb-5" id="contactid">
    <div class="section_header text-center mb-5 mt-4">
    <h1>6 Steps Prevention Against Coronavirus</h1>
    </div>
    </div>


    <div class="container">
    <div class="row">
    <div class="col-lg-8 offset-lg-2 col-12">


    <form action="" method="POST">

    <div class="form-group">
    <label >Username</label>
    <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off">
  </div>



    <div class="form-group">
    <label >Email address</label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" required autocomplete="off">
  </div>

  <div class="form-group">
    <label >Mobile</label>
    <input type="number" class="form-control" name="mobile" placeholder="number" autocomplete="off" required>
  </div>
  

  <div class="form-group">
  <label>Select Symptoms</label>
  <br>
  <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
  <label class="custom-control-label" for="customcheckbox1" >Cold</label>
  </div> 

  <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
  <label class="custom-control-label" for="customcheckbox2" >Fever</label>
  </div>

  <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
  <label class="custom-control-label" for="customcheckbox3" >Difficulty in breath</label>
  </div> 
  
  <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired">
  <label class="custom-control-label" for="customcheckbox4" >Feeling weak</label>
  </div> 
  
  




  <div class="form-group">
    <label for="exampleFormControlTextarea1">Textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">
    </textarea>
  </div>

  <button type="submit" class="btn btn-primary"  name="submit">Submit</button>
</form>
    </div>
    </div>
    </div>
    </div>

    <!--///////////////footer////////-->

    <footer  class="mt-5">
    <div class="footer_style text-white text-center container-fluid">
    <p>Copyright by Shifalee Khan<p>
    </div>


    </footer>

    <script type="text/javascript">
    function fetch(){

    
    $.get("https://api.covid19api.com/summary",
    
    function(data){
      //console.log(data)['countries'].length);
      var tbval=document.getElementById('tbval');
      for(var i=1;i<(data['Countries'].length);i++){
        var x=tbval.insertRow();
        x.insertCell(0);

        tbval.rows[i].cells[0].innerHTML=data['Countries'][i-1]['Country'];
        tbval.rows[i].cells[0].style.background='#7a4a91';
        tbval.rows[i].cells[0].style.color='#fff';
        

        x.insertCell(1);
        tbval.rows[i].cells[1].innerHTML=data['Countries'][i-1]['TotalConfirmed'];
        tbval.rows[i].cells[1].style.background='#4bb7d8';
        
        x.insertCell(2);
        tbval.rows[i].cells[2].innerHTML=data['Countries'][i-1]['TotalRecovered'];
        tbval.rows[i].cells[2].style.background='#4bb7d8';


        x.insertCell(3);
        tbval.rows[i].cells[3].innerHTML=data['Countries'][i-1]['TotalDeaths'];
        tbval.rows[i].cells[3].style.background='#f36e23';


        x.insertCell(4);
        tbval.rows[i].cells[4].innerHTML=data['Countries'][i-1]['NewConfirmed'];
        tbval.rows[i].cells[4].style.background='#4bb7d8';
         

        x.insertCell(5);
        tbval.rows[i].cells[5].innerHTML=data['Countries'][i-1]['NewRecovered'];
        tbval.rows[i].cells[5].style.background='#9cc850';
         
        x.insertCell(6);
        tbval.rows[i].cells[6].innerHTML=data['Countries'][i-1]['NewDeaths'];
        tbval.rows[i].cells[6].style.background='#f36e23';
         
         
         
      }

    }

    
    );
    
    }
    </script>

    <?php
    include 'dbcon.php';
    if(isset($_POST['submit'])){
      $username=$_POST['username'];
      $email=$_POST['email'];
      $mobile=$_POST['mobile'];
      $symp=$_POST['coronasymp'];
      $msg=$_POST['msg'];
      $chk="";
      foreach($symp as $chk1){
        $chk .= $chk1.",";

      }
      $insertquery="insert into coronacae(username,email,mobile,symp,message) value('$uername','$email','$mobile','$chk','$msg')";
      $query=mysqli_query($con,$insertquery);

      if($query){
        ?>
        <script>
        alert("inserted successful");
        </script>
        <?php}
        else{
          ?>
          <script>
          alert("No inserted");
          </script>
          <?php
        }
      }

    ?>
    
    
    ?>



    
</body>
</html>
