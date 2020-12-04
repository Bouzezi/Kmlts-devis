<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Kam-webagentur</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />

    <!-- Google fonts-->
    <link href="./css/Montserrat.css" rel="stylesheet" type="text/css" />
    <link href="./css/DroidSerif.css" rel="stylesheet"
        type="text/css" />
    <link href="./css/Roboto.css" rel="stylesheet" type="text/css" />
    <link href="./css/animate.min.css" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/form.css" rel="stylesheet" />


    <!-- Bootstrap core JS-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="js/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="assets/mail/jqBootstrapValidation.js"></script>
    <script src="assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

        <!-- Font Awesome icons (free version)-->
        <script src="js/all.js" crossorigin="anonymous"></script>
    <script src="./js/translate.js"></script>
    <script src="./js/personaliser.js"></script>
    
    
    <script src="https://unpkg.com/web-vitals@0.2.4/dist/web-vitals.es5.umd.min.js"></script>

 
    <style>
        .masthead{
            background-image:url("../assets/img/2-min.png") !important;
        }
    </style>

<!-- sideBar-->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
<!-- <link rel="stylesheet" href="css/style.css"> -->
<link rel="stylesheet" href="css/app.css">
<script>
addEventListener('DOMContentLoaded', function() {
  webVitals.getCLS(console.log);
  webVitals.getFID(console.log);
  webVitals.getLCP(console.log);
});
</script>
</head>


<script>
    
    function next(x){
            var y=x-1;
            var test=false;
            console.log("this is :"+y);
            
            

            if($("#next"+y).parent().children('div').children('div').hasClass('selected')){
                if(($("#next"+y).parent().children('div').children('div').hasClass('Q3Autre') && $('.Q3Autre').hasClass('selected')) ||
                  ($("#next"+y).parent().children('div').children('div').hasClass('Q5Autre') && $('.Q5Autre').hasClass('selected'))){ 
                    if($("#next"+y).parent().children('div').children('div').children('input[type=text]').val()==""){
                        test=false;
                        console.log("meeeeeeeeeeeeeeeee1");
                    }else{
                        test=true;
                        console.log("meeeeeeeeeeeeeeeee2");
                    }
                }else {
                    test=true;
                    console.log("meeeeeeeeeeeeeeeee3");
                }
            }    
            
            if(test==true ){
                $('.fieldset'+y).addClass('d-none');
                $('.fieldset'+x).removeClass('d-none');
                $('#step'+x).addClass('active');
            }else   
                {

                    swal ( "Fehler" ,  "Diese Frage ist erforderlich!" ,  "error" );
                }         
    } 
    function nextInput(x){
        nb=0;
        var y=x-1;
        var test=false;
        var v=$("#next"+y).parent().children('div').first().children('span').attr('id');
        var c = parseInt(v);
        console.log("this is first element: "+c);
        for(let i=c;i<=($("#next"+y).parent().children('div').length-1)+c;i++){
            console.log("this is i = "+i);
            if( $("#q"+y+"r"+i).val()==""){
                console.log("this is the element = "+i);
                    $("#"+i).removeClass('d-none');
                    $("#q"+y+"r"+i).addClass("error");
                    test=false;
            }
            if($(this).attr('id')=="q7r12"){
                    if(/^(?:(?:\+)49)-[0-9]{3}-[0-9]{3}-[0-9]{3}/.test($("#q7r12").val()) == false ){
                        $(this).addClass("error");
                            $('#12').removeClass('d-none');
                            test=false;
                    }
                }
                if($(this).attr('id')=="q7r13"){
                    if(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test($("#q7r13").val())  == false ){
                        $(this).addClass("error");
                            $('#13').removeClass('d-none');
                            test=false;
                    }
                }
        }
        for(let i=c;i<=($("#next"+y).parent().children('div').length-1)+c;i++){
            if( $("#q"+y+"r"+i).val()!=""){
                   nb++;
                    
            }
        }
        if(nb==$("#next"+y).parent().children('div').length){
            if(x!=8){
                $('.fieldset'+y).addClass('d-none');
                $('.fieldset'+x).removeClass('d-none');
                $('#step'+x).addClass('active');
            }
            
            test=true;
        }
        return test;
    } 

   

    function previous(x){
        var y=x+1;
        $('.fieldset'+y).addClass('d-none');
        $('.fieldset'+x).removeClass('d-none');    
        
    }

    
  
</script>
<?php
    if(isset($_POST['submitButton']))
    {
        include('actionKmlts.php');
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("Erfolg!"," danke shon , unser team wird sie innerhalb von 24 stunden kontaktieren","success");';
        echo '}, 1000);</script>';
    } 
   
?>

<body  onload="load('de')"  >
<form action="index.php" method="POST" name="form1" id="myForm" >
    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-7">
                <div class="cardAnfrage b-0">
                    <h1 class="heading">KMLTS Anfrage</h1><br/>
                    <ul id="progressbar" class="text-center">
                        <li class="active step0" id="step1" onclick="enable('1')"><span class="number">1</span></li>
                        <li class="step0" id="step2" onclick="enable('2')"><span class="number">2</span></li>
                        <li class="step0" id="step3" onclick="enable('3')"><span class="number">3</span></li>
                        <li class="step0" id="step4" onclick="enable('4')"><span class="number">4</span></li>
                        <li class="step0" id="step5" onclick="enable('5')"><span class="number">5</span></li>
                        <li class="step0" id="step6" onclick="enable('6')"><span class="number">6</span></li>
                        <li class="step0" id="step7" onclick="enable('7')"><span class="number">7</span></li>
                       
                    </ul>

                    <fieldset class="fieldset1">
                        <div class="form-card">
                            <h5 id="name-label" data-tag="kmltsQ1" class="sub-heading"></h5>
                            <div class="row px-1 radio-group radios" id="1-6">
                             
                                <div class="card-block text-center radio " id="div1">
                                  
                                    <label data-tag="kmltsQ1R1" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="kmltsQ1" id="div1r1"  placeholder="" value="kmltsQ1R1" class="form-control" hidden  >
                                </div>

                                <div class="card-block text-center radio" id="div2">
                                  
                                    <label data-tag="kmltsQ1R2"   class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="kmltsQ1" id="div2r2" placeholder="" value="kmltsQ1R2" class="form-control" hidden> 
                                </div>
                                
                                <div class="card-block text-center radio" id="div3">
                                   
                                    <label data-tag="kmltsQ1R3"   class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="kmltsQ1" id="div2r2" placeholder="" value="kmltsQ1R3" class="form-control" hidden> 
                                </div>
                                
                                <div class="card-block text-center radio" id="div4">
                                    
                                    <label data-tag="kmltsQ1R4"   class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="kmltsQ1" id="div2r2" placeholder="" value="kmltsQ1R4" class="form-control" hidden> 
                                </div>
                                
                                <div class="card-block text-center radio" id="div5">
                                    
                                    <label data-tag="kmltsQ1R5"   class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="kmltsQ1" id="div2r2" placeholder="" value="kmltsQ1R5" class="form-control" hidden> 
                                </div>
                                
                                <div class="card-block text-center radio" id="div6">
                                   
                                    <label data-tag="kmltsQ1R6"   class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="kmltsQ1" id="div2r2" placeholder="" value="kmltsQ1R6" class="form-control" hidden > 
                                </div>

                            </div>
                         <button type="button" id="next1" class="btn-block btn-primary mt-3 mb-1 " onclick="next(2)">Nächster<i class="fas fa-long-arrow-alt-right right"></i></button>     
                        </div>
                    </fieldset>



                    <fieldset class="fieldset2 d-none">
                        <div class="form-card">
                            <h5 id="name-label" data-tag="kmltsQ2" class="sub-heading"></h5>
                            
                                  
                            <div class="form-group">
                                 <label class="form-control-label" data-tag="kmltsQ2R1"></label>
                                <input type="text"  name="kmltsQ2R1" id="q2r1" placeholder="" class="form-control " > 
                                <span class="erreur d-none" id="1">Bitte schreiben Sie Ihren Abflugort</span>
                             </div>
                            
                             <div class="form-group">
                                 <label class="form-control-label" data-tag="kmltsQ2R2"></label> 
                                <input type="text"  name="kmltsQ2R2" id="q2r2" placeholder="" class="form-control " >
                                <span class="erreur d-none" id="2">Bitte schreiben Sie Ihren Ankunftsort</span>
                            </div>

                            
                         <button type="button" id="next2" class="btn-block btn-primary mt-3 mb-1 " onclick="nextInput(3)">Nächster<i class="fas fa-long-arrow-alt-right right"></i></button>  
                         <button type="button" class="btn-block btn-secondary mt-3 mb-1 prev" onclick="previous(1)"><i class="fas fa-long-arrow-alt-left left"></i>BISHERIGE</button>   
                        </div>
                    </fieldset>

                  


                    <fieldset class="fieldset3 d-none">
                        <div class="form-card">
                        <h5 id="name-label" data-tag="kmltsQ3" class="sub-heading"></h5>
                            <div class="row px-1 radio-group radios" id="9-13">
                              
                                <div class="card-block text-center radio " id="div9">
                                    <label data-tag="kmltsQ3R1" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="kmltsQ3"   placeholder="" value="kmltsQ3R1" class="form-control"  hidden>
                                </div>
                                <div class="card-block text-center radio" id="div10">
                                   
                                    <label data-tag="kmltsQ3R2" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="kmltsQ3"   placeholder="" value="kmltsQ3R2" class="form-control"  hidden>
                                </div>
                                <div class="card-block text-center radio" id="div11">
                                   
                                    <label data-tag="kmltsQ3R3" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="kmltsQ3"   placeholder="" value="kmltsQ3R3" class="form-control" hidden >
                                </div>
                                <div class="card-block text-center radio " id="div12">
                                   
                                    <label data-tag="kmltsQ3R4" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="kmltsQ3"   placeholder="" value="kmltsQ3R4" class="form-control"  hidden>
                                </div>
                                <div class="card-block text-center radio Q3Autre" id="div13" onclick="enableInput('Q3')">
                                    
                                    <label data-tag="kmltsQ3R5" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="kmltsQ3"   placeholder="" value="kmltsQ3R5" class="form-control"  hidden>
                                </div>

                                <div class="form-group input autre">
                                <input type="text" id="Q3" name="kmltsQ3text" placeholder="" class="form-control inputAutre3">
                                </div> 
                            
                            </div> 
                            <button type="button" id="next3" class="btn-block btn-primary mt-3 mb-1 next" onclick="next(4)">Nächster<i class="fas fa-long-arrow-alt-right right"></i></button>
                            <button type="button" class="btn-block btn-secondary mt-3 mb-1 prev" onclick="previous(2)"><i class="fas fa-long-arrow-alt-left left"></i>BISHERIGE</button>
                        </div>
                    </fieldset>




                    
                        
                  
                    <fieldset class="fieldset4 d-none">
                        <div class="form-card">
                            <h5 id="name-label" data-tag="kmltsQ4" class="sub-heading"></h5>
                            <h6 id="name-label" data-tag="kmltsQ4Q1" class="sub-heading"></h6>
                        
                            
                            <div class="form-group">
                                 <label class="form-control-label" data-tag="kmltsQ4Q1R1"></label>
                             <input type="number" min="1" step="1" id="q4r3" oninput="validity.valid||(value='');" name="kmltsQ4Q1R1" placeholder="" class="form-control " > 
                             <span class="erreur d-none" id="3" >Bitte schreiben Sie Ihre Lieferlänge</span>
                             </div>

                            <div class="form-group">
                                 <label class="form-control-label" data-tag="kmltsQ4Q1R2"></label> 
                            <input type="number" min="1" step="1" id="q4r4" oninput="validity.valid||(value='');" name="kmltsQ4Q1R2" placeholder="" class="form-control " > 
                            <span class="erreur d-none" id="4">Bitte schreiben Sie Ihre Lieferbreite</span>
                            </div>

                            <div class="form-group">
                                 <label class="form-control-label" data-tag="kmltsQ4Q1R3"></label> 
                             <input type="number" min="1" step="1" id="q4r5" oninput="validity.valid||(value='');" name="kmltsQ4Q1R3" placeholder="" class="form-control " > 
                             <span class="erreur d-none" id="5">Bitte schreiben Sie Ihre Lieferhöhe</span>
                             </div>
                            
                            

                            <button type="button" id="next4" class="btn-block btn-primary mt-3 mb-1 next" onclick="nextInput(5)">Nächster<i class="fas fa-long-arrow-alt-right right"></i></button>
                            <button type="button" class="btn-block btn-secondary mt-3 mb-1 prev" onclick="previous(3)"><i class="fas fa-long-arrow-alt-left left"></i>BISHERIGE</button>
                        </div>
                    </fieldset>



                    <fieldset class="fieldset5 d-none">
                        <div class="form-card">
                            <h5 id="name-label" data-tag="kmltsQ4" class="sub-heading"></h5>
                            <h6 id="name-label" data-tag="kmltsQ4Q2" class="sub-heading"></h6>
                            
                        
                            <div class="form-group">
                                <label data-tag="kmltsQ4Q2R1" class="form-check-label sub-desc" ></label>
                                <input type="number" min="1" step="1" id="q5r6" oninput="validity.valid||(value='');"  name="kmltsQ5text" placeholder="" class="form-control">
                                <span class="erreur d-none" id="6">Bitte schreiben Sie Ihr Liefergewicht</span>
                            </div>     

                            <button type="button" id="next5" class="btn-block btn-primary mt-3 mb-1 next" onclick="nextInput(6)">Nächster<i class="fas fa-long-arrow-alt-right right"></i></button>
                            <button type="button" class="btn-block btn-secondary mt-3 mb-1 prev" onclick="previous(4)"><i class="fas fa-long-arrow-alt-left left"></i>BISHERIGE</button>
                        </div>
                    </fieldset> 



                    <fieldset class="fieldset6 d-none">
                        <div class="form-card">
                            <h5 id="name-label" data-tag="kmltsQ4" class="sub-heading"></h5>
                            <h6 id="name-label" data-tag="kmltsQ4Q3" class="sub-heading"></h6>

                            <div class="form-group">                                
                                <label data-tag="kmltsQ4Q3R1" class="form-check-label sub-desc" ></label>
                                <input type="number"  min="1" step="1" id="q6r7" oninput="validity.valid||(value='');"  name="kmltsQ6text" placeholder="" class="form-control">
                                <span class="erreur d-none" id="7">Bitte schreiben Sie die Menge</span>
                            </div> 

                            <button type="button" id="next6" class="btn-block btn-primary mt-3 mb-1 next" onclick="nextInput(7)">Nächster<i class="fas fa-long-arrow-alt-right right"></i></button>
                            <button type="button" class="btn-block btn-secondary mt-3 mb-1 prev" onclick="previous(5)"><i class="fas fa-long-arrow-alt-left left"></i>BISHERIGE</button>
                        </div>
                    </fieldset>
              
                  
                   
                    <fieldset class="fieldset7 d-none" >
                        <div class="form-card">
                            <h5 class="sub-heading mb-4" data-tag="globalQ12"></h5>
                            <div class="form-group input">
                                <label class="form-control-label" data-tag="name"></label>
                                <input type="text"  name="name" id="q7r8" placeholder="" class="form-control"  >
                                <span class="erreur d-none" id="8">Bitte schreiben Sie Ihren Namen</span>
                              </div>
                            <div class="form-group input">
                                 <label class="form-control-label" data-tag="vorname"></label> 
                                <input type="text"  name="vorname" id="q7r9" placeholder="" class="form-control" >
                                <span class="erreur d-none" id="9">Bitte schreiben Sie Ihren Vorname</span>
                             </div>
                            <div class="form-group input">
                                <label class="form-control-label" data-tag="NomCompagnie"></label> 
                                <input type="text"  name="unternehmens" id="q7r10" placeholder="" class="form-control" >
                                <span class="erreur d-none" id="10">Bitte schreiben Sie Ihren unternehmens name</span>
                              </div>
                            <div class="form-group input">
                                <label class="form-control-label" data-tag="adresse"></label> 
                                <input type="text" name="adresse" id="q7r11" placeholder="" class="form-control" >
                                <span class="erreur d-none" id="11">Bitte schreiben Sie Ihre Adresse</span>
                             </div>
                            <div class="form-group input">
                                <label class="form-control-label"  data-tag="telefon"></label> 
                                <input type="text"  name="Telefon" id="q7r12" placeholder="+49-123-123-123" class="form-control" >
                                <span class="erreur d-none" id="12">Bitte schreiben Sie Ihre gültige Nummer</span>
                             </div>
                            <div class="form-group input">
                                <label class="form-control-label" data-tag="email"></label> 
                                <input type="text"  name="Email" id="q7r13" placeholder="" class="form-control" >
                                <span class="erreur d-none" id="13">Bitte schreiben Sie Ihre gültige E-Mail</span>
                             </div>
                            <button type="submit" id="next7" name="submitButton" class="btn-block btn-primary mt-3 mb-1 next mt-4" >Senden<i class="fas fa-long-arrow-alt-right right"></i></button>
                            <button type="button" class="btn-block btn-secondary mt-3 mb-1 prev" onclick="previous(6)"><i class="fas fa-long-arrow-alt-left left"></i>BISHERIGE</button>
                        </div>
                    </fieldset>
                   
                </div>
            </div>
        </div>
    </div>
   
</form>
    <script>
     $("#myForm").submit(function( e ) {
        if(nextInput(8)==false)
        e.preventDefault();
        
        
    });
  
        $(document).ready(function(){
            $('#myForm input[type="text"]').blur(function(){
                if(!$(this).val()){
                    $(this).addClass("error");
                    $(this).parent().children('span').removeClass('d-none');   
                }
                if($(this).attr('id')=="q7r12"){
                    if(/^(?:(?:\+)49)-[0-9]{3}-[0-9]{3}-[0-9]{3}/.test($("#q7r12").val()) == false ){
                        $(this).addClass("error");
                            $('#12').removeClass('d-none');
                    }
                }
                if($(this).attr('id')=="q7r13"){
                    if(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test($("#q7r13").val())  == false ){
                        $(this).addClass("error");
                            $('#13').removeClass('d-none');
                    }
                }
                
                
               
            });
            $('#myForm input[type="number"]').blur(function(){
                if(!$(this).val()){
                    $(this).addClass("error");
                    $(this).parent().children('span').removeClass('d-none');
                }
            });
        });
         $(document).ready(function(){
            $('#myForm input[type="text"]').focus(function(){
                
                   
                    $(this).removeClass("error");
               
                    $(this).parent().children('span').addClass('d-none');
                
            });
            $('#myForm input[type="number"]').focus(function(){
                
                   
                $(this).removeClass("error");
           
                $(this).parent().children('span').addClass('d-none');
            
            });
        }); 

        function disableAll() {
            for (let allfieldset = 1; allfieldset < 14; allfieldset++) {
                $(".fieldset"+allfieldset).addClass("d-none");
            }
        }
        function enable(x){
             
            if($('#step'+x).hasClass('active')){
                disableAll(); 
                $('.fieldset'+x).removeClass('d-none');
            }
            
        
        }
        function enableInput(a){
            console.log(a);
            $("#"+a).parent().removeClass('autre');   
        }






        $('.card-block').click(function() {         
            
            console.log(this.id);
            var myid="#"+this.id;
            
            var id=$(myid).parent().attr('id');
            console.log(id);

            if(!$(".Q2Autre").hasClass('selected')){
                $("#Q2").val('');
            }

            if(!$("#Q2").parent().hasClass('autre') && $(".Q2Autre").hasClass('selected') ){
                $("#Q2").parent().addClass('autre');
            }
            console.log(myid);

            if(!$(".Q3Autre").hasClass('selected')){
                $("#Q3").val('');
            }
            if($(".Q3Autre").hasClass('selected') ){
                $("#Q3").parent().addClass('autre');   
            }
                    
           if(!$(".Q4Autre").hasClass('selected')){
                $("#Q4").val('');
            }
            if($(".Q4Autre").hasClass('selected') ){
                $("#Q4").parent().addClass('autre');   
            }

            if(!$(".Q5Autre").hasClass('selected')){
                $("#Q5").val('');
            }
            if($(".Q5Autre").hasClass('selected') ){
                $("#Q5").parent().addClass('autre');   
            }
            if(!$(".Q6Autre").hasClass('selected')){
                $("#Q6").val('');
            }
            if($(".Q6Autre").hasClass('selected') ){
                $("#Q6").parent().addClass('autre');   
            }
                 
                 

            
             if(!$(myid).parent().hasClass('checkboxes')){
                    if(id.indexOf('-')>1){
                        for (let i=parseInt(id.substring(0,id.indexOf('-')));i<=parseInt(id[id.indexOf('-')+1]+id[id.indexOf('-')+2]);i++){
                            console.log(i);
                            $("#div"+i.toString()).children("input").removeAttr('checked', false);
                            $("#div"+i.toString()).removeClass('selected');
                        }
                    }
                    else{
                            for (let i=parseInt(id.substring(0,id.indexOf('-')));i<=parseInt(id.substring(id.indexOf('-')+1,id.length));i++){
                                console.log(i);
                                $("#div"+i.toString()).children("input").removeAttr('checked', false);
                                $("#div"+i.toString()).removeClass('selected');
                            }
                            
                    }
                    $(myid).children("input").attr('checked', true);
                    $(myid).addClass('selected');       
            }else {
                if($(myid).hasClass('selected')){
                    $(myid).children("input").removeAttr('checked', false);
                    $(myid).removeClass('selected');
                }else
                {
                    $(myid).children("input").attr('checked', true);
                    $(myid).addClass('selected');  
                }
            } 
            
            //console.log($(myid).children("input"));
            
          
        }); 
        
          




    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>


</body>

</html>   