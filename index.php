<!DOCTYPE html>
<html>
    <head>
        <!--bootstrap-->
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width" target="_top">'
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118591907-1" target="_top"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-118591907-1');
            </script>

        <title>Italian Dialect Survey</title>

        <!--JQuery-->
        <script src="JS/jquery.js" target="_top"></script>


        <link rel="stylesheet" href="styles/bootstrap.min.css" target="_top">
        <script src="JS/bootstrap.js" target="_top"></script>

        <!--Font-->
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

        <!--CSS -->
        <link rel="stylesheet" href="styles/main.css" target="_top">
        <link rel="icon" href="images/logo.png" target="_top">

    </head>
    <body>
        <!--header-->
        <h1>Italian Dialect Survey</h1>

        <!--Center Buttons-->
        <div class="container-fluid">
            <div style= "text-align: center; margin-top: 15%">
                <button id ="enterBttn">Enter</button>
            </div>
            <div style= "text-align: center; margin-top: 10px">
                <button id ="aboutBttn">About</button>
            </div>
            <div style= "text-align: center; margin-top: 10px">
                <button id= "reBttn">Research</button>
            </div>
        </div>
        
        <!--Pop-up "Modal" -->
        <div class="modal fade" id="popUP" role="dialog">
            <div class="modal-dialog">
                <!-- Popup content-->
                <div class="modal-content">
                    <!--Header Of Popup-->
                    <div class="modal-header" style="padding:35px 50px;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <a class="navbar-brand"><img style="height:150%" "width:150%"  src="images/logo.png"></img></a>
                        <h4 style= "margin-top:25px" id = "title">Survey</h4>
                    </div>

                    <!--Main Content of Popup SURVEY!-->
                    <div id = "content" class="modal-body" style="padding:40px 50px;">

                        <h4>Come riferisci ad un gruppo di ragazzi nel tuo dialetto?</h4>
                        <input type = "radio" value ="Ragazzi"/>Ragazzi</input> 
                        <br/>
                        <input type = "radio" value ="Uaglioni"/>Uaglioni</input> 
                        <br/>
                        <input type = "radio" value ="Tosi"/>Tosi</input> 
                        <br/>
                        <input type = "radio" value ="Contrari"/>Contrari</input> 
                        <br/>
                        <input type = "radio" value ="Gnari"/>Gnari</input> 
                        <br/>
                        <input type = "radio" value ="Piccioccheddusu"/>Piccioccheddusu</input> 
                        <br/>
                        <input type = "radio" value ="Matoc"/>Matoc</input> 
                        <br/>
                        <input type = "radio" value ="Raga'"/>Raga'</input> 
                        <br/>
                        <input type = "radio" value ="Ragàs"/>Ragàs</input> 
                        <br/>
                        <input type = "radio" value ="Cinni"/>Cinni</input> 
                        <br/>
                        <input type = "radio" value ="Citti"/>Citti</input> 
                        <br/>
                        <input type = "radio" value ="Freghi"/>Freghi</input> 
                        <br/>
                        <input type = "radio" value ="Picciotti"/>Picciotti</input>
                        <br/> 
                        <input type = "radio" value ="Pütèi"/>Pütèi</input> 
                        <br/>
                        <input type = "radio" value ="Matèi"/>Matèi</input> 
                        <br/>
                        <input type = "radio" value ="Boce"/>Boce</input> 
                        <br/>
                        <input type = "radio" value ="Bocia"/>Bocia</input> 
                        <br/>
                        <input type = "radio" value ="Butei"/>Butei</input> 
                        <br/>
                        <input type = "radio" value ="Scet"/>Scet</input> 
                        <br/>
                        <input type = "radio" value ="Fioei"/>Fioei</input> 
                        <br/>
                        <input type = "radio" value ="Pischelli"/>Pischelli</input> 
                        
                        <h4>Come diresti la frase ‘Ho capito’?</h4>
                        <input type = "radio" value ="Ho capito"/>Ho capito</input> 
                        <br/>
                        <input type = "radio" value ="Capiscivi"/>Capiscivi</input> 
                        <br/>
                        <input type = "radio" value ="Go capio"/>Go capio</input> 
                        <br/>
                        <input type = "radio" value ="So capit"/>So capit</input>
                        <br/>
                        <input type = "radio" value ="Gho capìt"/>Gho capìt</input>
                        <br/>
                        <input type = "radio" value ="So capite"/>So capit</input>
                        <br/>
                        <input type = "radio" value ="Ho capit'"/>Ho capit'</input>
                        <br/>
                        <input type = "radio" value ="Á laj capi"/>Á laj capi</input>
                        <br/>
                        <input type = "radio" value ="Ho inteso"/>Ho inteso</input>
                        <br/>
                        <input type = "radio" value ="Ho capi"/>Ho capi</input>
                        <br/>
                        <input type = "radio" value ="Ho capiho"/>Ho capiho</input>
                        <br/>
                        <input type = "radio" value ="Capiscetti'"/>Capiscetti'</input> 
                        <br/>
                        <input type = "radio" value ="Agg' capit"/>Agg' capit</input> 
                        <br/>
                        <input type = "radio" value ="A gó capì"/>A gó capì</input> 
                        <br/>
                        <input type = "radio" value ="U capì"/>U capì</input> 
                        <br/>
                        <input type = "radio" value ="Ó capìt"/>Ó capìt</input> 
                        <br/>
                        <input type = "radio" value ="Go capit'"/>Go capit'</input>
                        <br/> 
                        <input type = "radio" value ="Lu capi"/>Lu capi</input> 
                        <br/>
                        <input type = "radio" value ="Appu cumprendiu"/>Appu cumprendiu</input> 
                        <br/>
                        

                        <h4>Come chiameresti una sedia nel tuo dialetto?</h4>
                        <input type = "radio" value = "Sedia"/>Sedia</input> 
                        <br/>
                        <input type = "radio" value = "Seggiola"/>Seggiola</input> 
                        <br/>
                        <input type = "radio" value = "Carega"/>Carega</input> 
                        <br/>
                        <input type = "radio" value = "Scrania"/>Scrania</input> 
                        <br/>
                        <input type = "radio" value = "Scrana"/>Scrana</input> 
                        <br/>
                        <input type = "radio" value = "Seggia"/>Seggia</input> 
                        <br/>
                        <input type = "radio" value = "Hcagna"/>Hcagna</input> 
                        <br/>
                        <input type = "radio" value = "Scragna"/>Scragna</input> 
                        <br/>
                        <input type = "radio" value = "Cadrega"/>Cadrega</input> 
                        <br/>
                        <input type = "radio" value = "Segg"/>Segg</input>
                        <br/>
                        <input type = "radio" value = "Carira"/>Carira</input>
                        <br/>

                        <h4>Come chiameresti una sigaretta?</h4>
                        <input type = "radio" value = "Sigaretta"/>Sigaretta</input> 
                        <br/>
                        <input type = "radio" value = "Sigarett'"/>Sigarett'</input> 
                        <br/>
                        <input type = "radio" value = "Sicaretta"/>Sicaretta</input>
                        <br/>
                        <input type = "radio" value = "Higareta"/>Higareta</input>
                        <br/>
                        <input type = "radio" value = "Paglia"/>Paglia</input> 
                        <br/>
                        <input type = "radio" value = "Cicca"/>Cicca</input> 
                        <br/>
                        <input type = "radio" value = "Ciospa"/>Ciospa</input> 
                        <br/>
                        <input type = "radio" value = "Biu"/>Biu</input> 
                        <br/>
                        <input type = "radio" value = "Paia"/>Paja</input> 
                        <br/>
                        <input type = "radio" value = "Paja"/>Paja</input> 
                        <br/>
                        <input type = "radio" value = "Paina"/>Paina</input> 
                        <br/>
                        <input type = "radio" value = "Zigarru"/>Zigarru</input> 
                        <br/>
                        <input type = "radio" value = "Zigheret"/>Zigheret</input> 
                        <br/>
                        <input type = "radio" value = "Cicchino"/>Cicchino</input>
                

                        <h4>Come chiameresti un tiro di una sigaretta nel tuo dialetto?</h4>
                    
                        <input type = "radio" value = "Tiro"/>Tiro</input> 
                        <br/>
                        <input type = "radio" value = "Tir'"/>Tir'</input> 
                        <br/>
                        <input type = "radio" value = "Tirata"/>Tirata</input> 
                        <br/>
                        <input type = "radio" value = "Na tirata"/>Na tirata</input> 
                        <br/>
                        <input type = "radio" value = "Bocada"/>Bocada</input> 
                        <br/>
                        <input type = "radio" value = "An tir"/>An tir</input> 
                        <br/>
                        <input type = "radio" value = "Nu surk"/>Nu surk</input> 
                        <br/>
                        <input type = "radio" value = "Lancio"/>Lancio</input> 
                        <br/>
                        <input type = "radio" value = "Peo"/>Peo</input> 


                        <h4>Come pronunci la parola aspetta?</h4>
                        <input type = "radio" value = "Aspetta"/>Aspetta</input>
                        <br/> 
                        <input type = "radio" value = "Aspè"/>Aspè</input> 
                        <br/>
                        <input type = "radio" value = "'Spett"/>'Spett</input> 
                        <br/>
                        <input type = "radio" value = "Asc-pett"/>Asc-pett</input> 
                        <br/>
                        <input type = "radio" value = "Aspèta"/>Aspèta</input> 
                        <br/>
                        <input type = "radio" value = "Speta"/>Speta</input> 
                        <br/>
                        <input type = "radio" value = "'Spetta"/>'Spetta</input> 
                        <br/>
                        <input type = "radio" value = "Peta"/>Peta</input> 
                        <br/>
                        <input type = "radio" value = "Hpeta"/>Hpeta</input> 
                        <br/>
                        <input type = "radio" value = "Aspetta"/>Aspetta</input>
                        <br/> 
                        <input type = "radio" value = "Aspitt"/>Aspitt</input>
                        <br/> 

                        <h4>Come dici la parola ‘Gatto’ in dialetto?</h4>
                        <input type = "radio" value = "Gatto"/>Gatto</input>
                        <br/>
                        <input type = "radio" value = "Gat"/>Gat</input> 
                        <br/>
                        <input type = "radio" value = "Gato"/>Gato</input> 
                        <br/>
                        <input type = "radio" value = "Gattu"/>Gattu</input> 
                        <br/>
                        <input type = "radio" value = "Gatte"/>Gatte</input> 
                        <br/>
                        <input type = "radio" value = "Gjat"/>Gjat</input> 
                        <br/>
                        <input type = "radio" value = "Jattu"/>Jattu</input> 
                        <br/>
                        <input type = "radio" value = "Mucill"/>Mucill</input>  
                        <br/>                      
                        <input type = "radio" value = "Micio"/>Micio</input> 
                        <br/>
                        <input type = "radio" value = "Miscio"/>Miscio</input> 
                        <br/>
                        <input type = "radio" value = "Gattud"/>Gattud</input> 
                        <br/>
                        <input type = "radio" value = "Ciùcio"/>Ciùcio</input>
                        <br/>
                        <input type = "radio" value = "‘attu"/>‘attu</input>
                        <br/>
                        <input type = "radio" value = "Ciat"/>Ciat</input>
                        <br/>

                        <h4>Come dici la parola ‘Cane’??</h4>

                        <input type = "radio" value = "Cane"/>Cane</input> 
                        <br/>
                        <input type = "radio" value = "Can"/>Can</input> 
                        <br/>
                        <input type = "radio" value = "Cana"/>Cana</input> 
                        <br/>
                        <input type = "radio" value = "Cuane"/>Cuane</input>
                        <br/>
                        <input type = "radio" value = "Cani"/>Cani</input>
                        <br/>
                        <input type = "radio" value = "Cacciuttiell"/>Cacciuttiell</input>
                        <br/> 
                        <input type = "radio" value = "Cà"/>Cà</input>                    
                        <br/>    
                        <input type = "radio" value = "Chène"/>Chène</input> 
                        <br/>
                        <input type = "radio" value = "Kene"/>Kene</input> 
                        <br/>
                        <input type = "radio" value = "Miscio"/>Miscio</input> 
                        <br/>
                        <input type = "radio" value = "Gattud"/>Gattud</input> 
                        <br/>
                        <input type = "radio" value = "Ciùcio"/>Ciùcio</input>
                        <br/>
                        <input type = "radio" value = "U Cane"/>U Cane</input> 
                        <br/>
                        <input type = "radio" value = "‘attu"/>‘attu</input>

                        <h4>Come si chiama il salame dalle tue parti?</h4>
                        <input type = "radio" value = "Salame"/>Salame</input>
                        <br/>
                        <input type = "radio" value = "Salàdo"/>Salàdo</input>
                        <br/>
                        <input type = "radio" value = "Salam"/>Salam</input> 
                        <br/>
                        <input type = "radio" value = "Salama"/>Salama</input> 
                        <br/>
                        <input type = "radio" value = "Salamu"/>Salamu</input> 
                        <br/>
                        <input type = "radio" value = "Suppizzata"/>Suppizzata</input> 
                        <br/>
                        <input type = "radio" value = "Sartizzu"/>Sartizzu</input> 
                        <br/>
                        <input type = "radio" value = "Salami"/>Salami</input> 
                        <br/>
                        <input type = "radio" value = "Luganega"/>Luganega</input>
                        <br/> 
                        <input type = "radio" value = "Halam"/>Halam</input> 
                        <br/>
                        <input type = "radio" value = "Sasezz"/>Sasezz</input>   
                        

                        <h4>Come chiameresti una ‘Mucca’ nel tuo regione d’Italia?</h4>
                        <input type = "radio" value = "Mucca"/>Mucca</input> 
                        <br/>
                        <input type = "radio" value = "Vaca"/>Vaca</input> 
                        <br/>
                        <input type = "radio" value = "Vacche"/>Vacche</input> 
                        <br/>
                        <input type = "radio" value = "Vacca"/>Vacca</input> 
                        <br/>
                        <input type = "radio" value = "Vaca"/>Vaca</input>
                        <br/>
                        <input type = "radio" value = "‘acha"/>‘acha</input>
                        <br/>
                        <input type = "radio" value = "Bàca"/>Bàca</input> 
                        <br/> 
                        <input type = "radio" value = "Bàga"/>Bàga</input> 
                        <br/> 
                        <input type = "radio" value = "Àca"/>Àca</input> 
                        <br/>
                        <input type = "radio" value = "Bacca"/>Bacca</input>

                        <h4>Come chiameresti alla spezia ‘Prezzemolo’ nel tuo dialetto?</h4>
                        <input type = "radio" value = "Prezzemolo"/>Prezzemolo</input> 
                        <br/>
                        <input type = "radio" value = "Petrusinu"/>Petrusinu</input> 
                        <br/>
                        <input type = "radio" value = "Parsemul"/>Parsemul</input> 
                        <br/>
                        <input type = "radio" value = "Petrosino"/>Petrosino</input>
                        <br/>
                        <input type = "radio" value = "Petrusin’"/>Petrusin’</input> 
                        <br/>
                        <input type = "radio" value = "Parsimolo"/>Parsimolo</input> 
                        <br/>
                        <input type = "radio" value = "Prunsemu"/>Prunsemu</input> 
                        <br/>
                        <input type = "radio" value = "Ptrsin"/>Ptrsin</input> 
                        <br/>
                        <input type = "radio" value = "I parsû"/>I parsû</input>
                        <br/> 
                        <input type = "radio" value = "Parsemul"/>Parsemul</input>
                        <br/>                        
                        <input type = "radio" value = "Erbetta"/>Erbetta</input> 
                        <br/>
                        <input type = "radio" value = "Erbuccio"/>Erbuccio</input> 
                        <br/>
                        <input type = "radio" value = "Erbuni"/>Erbuni</input> 
                        <br/>
                        <input type = "radio" value = "Pederhem"/>Pederhem</input> 
                        <br/>
                        <input type = "radio" value = "Pardesum"/>Pardesum</input> 
                        <br/>
                        <input type = "radio" value = "Pitrusinu"/>Pitrusinu</input> 
                        <br/>
                        <input type = "radio" value = "Petrusín'"/>Petrusín'</input> 
                        <br/>
                        <input type = "radio" value = "Perdesü"/>Perdesü</input>
                        <br/>
                        <input type = "radio" value = "Pedersèm"/>Pedersèm</input>
                        <br/>

                        <br>
                        <br>
                    </div>

                    <!--Footer Of Popup-->
                    <div id = "mfooter" class="modal-footer">
                        <button id = "EnterButton" style="border-color: black; color:gray;"OnClick="ButtonClicked()">Submit!</button>
                    </div>
                </div>
            </div>
        </div>  

        <!--Pop-up "Modal" -->
        <div class="modal fade" id="popUP2" role="dialog">
            <div class="modal-dialog">
                <!-- Popup content-->
                <div class="modal-content">
                    <!--Header Of Popup-->
                    <div class="modal-header" style="padding:35px 50px;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <a class="navbar-brand"><img style="height:150%" "width:150%"  src="images/logo.png"></img></a>
                        <h4 style= "margin-top:25px" id = "title">About Us!</h4>
                    </div>
                    <!--Main Content of Popup loads from CONTEXT!-->
                    <div id = "content2" class="modal-body" style="padding:20px 50px;">
                        <p>
                        This interactive survey uses Machine Learning to determine an Italian speakers native region. Our motivation for
                        building this survey was to explore the possibilities that Machine Learning could have in the study of dialects 
                        and our results prove that Machine Learning is not only accurate but also has a vast amount of applications
                        in dialectology. 
                        <br/>
                        <br/>
                        This project was developed at Fordham University under the supervision of <i>Dr. D. Frank Hsu</i> at the
                        Labratory of Informatics and Data Mining 
                        <br/>
                        <br/>
                        Special thanks to <a href = "http://www.erezyoeli.com"><i>Dr. Erez Yoeli</i></a> of Yale 
                        University for guidance throughout the development of this survey. 
                        </p>
                    </div>

                    <!--Footer Of Popup-->
                    <div id = "mfooter" class="modal-footer">
                    </div>
                </div>
            </div>
        </div>  
        <!--Pop-up "Modal" -->
        <div class="modal fade" id="popUP3" role="dialog">
            <div class="modal-dialog">
                <!-- Popup content-->
                <div class="modal-content">
                    <!--Header Of Popup-->
                    <div class="modal-header" style="padding:35px 50px;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <a class="navbar-brand"><img style="height:150%" "width:150%"  src="images/logo.png"></img></a>
                        <h4 style= "margin-top:25px" id = "title">Research</h4>
                    </div>
                    <!--Main Content of Popup loads from CONTEXT!-->
                    <div id = "content3" class="modal-body" style="padding:40px 50px;">
                        <p>
                        We developed an 11-question survey in Italian to accurately identify a respondents’ region of origin.
                        The survey questions are mostly based on in-person surveys conducted in the summer of 2017,
                        and supplemented with Twitter data, that was geocoded and mined for words that were most 
                        predictive of a Tweet’s origin. In an 80-person pilot survey, the survey’s out of sample AUC average was 88%.
                        The following <a href = "https://github.com/saspau/dialect-survey/blob/master/classify.ipynb"><i>Jupyter Notebook</i></a>
                        created by Sasha Paulovich displays how accurate our algorithms are using cross validation along our entire data set.
                        </p>
                        <br> 
                       
                        <p>
                        Watch Alon Yoeli's YouTube documentary about Italian Dialects!
                        <iframe width="100%" height="300vw" src="https://www.youtube.com/embed/jqvlSCoSEHg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </p>
                        
                        <p>
                        As dialects begin to fade amongst the younger generations of Italians, it is important that we learn as much as 
                        possible about regional Italian dialects for their preservation. There is no better tool for this than machine learning,
                         especially as the volume and variety of available data grows. Now that computational processing is cheaper and more powerful 
                        than ever, it's becoming possible to quickly and automatically produce models that can analyze bigger, more complex data and deliver faster,
                         more accurate results – on a very large scale. 
                    </div>

                    <!--Footer Of Popup-->
                    <div id = "mfooter" class="modal-footer">
                    </div>
                </div>
            </div>
        </div>  
    </body>
    <footer>
        <h5 style = "text-align: center;">Project Developed by Alon Yoeli, Sasha Paulovich, and Mario Merendino</h5>
    </footer>

    <!--Script that opens the modal when 
    a EnterBttn is clicked --> 
    <script>
        $(document).ready(function(){
            $("#enterBttn").click(function(){ 
                $("#popUP").modal();
            });
            $("#aboutBttn").click(function(){ 
                $("#popUP2").modal();
            });
            $("#reBttn").click(function(){ 
                $("#popUP3").modal();
            });
        });
    </script>
    <script src="JS/survey.js"></script>
    <script>
        // select radio buttons group (same name)
        var radioButtons = $("input[type='radio']");
        // save initial ckecked states
        var radioStates = {};
        $.each(radioButtons, function(index, rd) {
            radioStates[rd.value] = $(rd).is(':checked');
        });

        // handle click event
        radioButtons.click(function() {

            // check/unchek radio button
            var val = $(this).val();  
            $(this).prop('checked', (radioStates[val] = !radioStates[val]));    

            // update other buttons checked state
            $.each(radioButtons, function(index, rd) {
                if(rd.value !== val) {
                    radioStates[rd.value] = false; 
                }
            });
        });
        let answer = "";
        let prediction = "";
        function ButtonClicked(){
            var modalContent = document.getElementById("content");
            var clickedRadios = [];
            var radioButtons = $("input[type='radio']:checked");
            if(radioButtons.length == 11){
                var returnString = ""
                for(let i = 0; i < radioButtons.length; i++){
                    returnString = returnString + radioButtons[i].value + ","
                }
                modalContent.innerHTML = "<div style = 'text-align:center;'><img style = 'height:20%;width:20%;'src='images/loading.gif'></img></div>"
                answer = returnString.substring(0, returnString.length-1);
                console.log(answer);
                $.post("ajax/answer.php", { userResponse: answer},function(response){
                    console.log(response);
                    var Button = document.getElementById("EnterButton");
                    Button.style.visibility = "hidden";
                    var modalContent = document.getElementById("content");
                    if(response == ""){
                        modalContent.innerHTML = "<h4>There was an error processing your survey, refresh and try again</h4>";
                        console.log(answer);
                        let list = answer.split(',');
                        for(let i = 0; i < list.length; i++){
                            console.log(list[i]);
                        }
                    }
                    else{
                    prediction = response.substring(2, response.length-3);
                    var correct = "<h4>Are we correct?</h4> <Button OnClick='yesButtonClicked()' style='border-color: black; color:gray;'>Yes</Button><Button OnClick='noButtonClicked()' style='border-color: black; color:gray;'>No</Button>";
                    modalContent.innerHTML = "<h4>We believe you're from: </h4>" + prediction + "<br>" + correct;
                    }
                });
            }
            else{
                alert("Error: Please fill out exactally one response for each question");
            }
            
        }
        function yesButtonClicked(){
            $.post("ajax/submit.php",{userResponse: answer, predicted: prediction},function(response){
                var modalContent = document.getElementById("content");
                var addWord = "<h5>Do you know a word that varies a lot amongst dialects?</h5><br><input style='text-align:left;'  id ='addword'><br><button style = 'border-color: black; color:gray;' OnClick='submitNewWord(prediction)'>Submit New Word</button>";
                modalContent.innerHTML = "<h4>Thank you for contribuiting to this project and making the survey smarter!</h4>" +response +"<br><br>" + addWord;
            });
        }
        function noButtonClicked(){
            var modalContent = document.getElementById("content");
            regionArray = ['Abruzzo', 'Basilicata', 'Calabria', 'Campania', 'Emiglia-Romagna', 'Friuli-Venezia Giulia', 'Lazio', 'Liguria', 'Lombardia', 'Marche', 'Molise', 'Piemonte', 'Puglia', 'Sardegna', 'Sicilia', 'Svizzera Italiana', 'Toscana', 'Trentino-Alto Adige', 'Umbria', "Valle d'Aosta", 'Veneto']
            buttonStr = "";
            for(let i = 0; i < regionArray.length;i++){
                buttonStr = buttonStr + "<button OnClick='CorrectButtonClicked(this.id)'style='text-align:center; border-color: black; color:gray;' id='"+regionArray[i] + "'>" + regionArray[i]+ "</button><br><br>"
            }
            modalContent.innerHTML = "<h4>What is your correct region?</h4><br><br><div style = 'text-align: center;'>" + buttonStr + "</div>";
        }
        function CorrectButtonClicked(Cid){
            prediction = Cid;
            $.post("ajax/submit.php",{userResponse: answer, predicted: Cid},function(response){
                var modalContent = document.getElementById("content");
                var addWord = "<h5>Do you know a word that varies a lot amongst dialects?</h5><input style='text-align:left;' id ='addword'><br><button style = 'border-color: black; color:gray;' OnClick='submitNewWord()'>Submit New Word</button>";
                modalContent.innerHTML = "<h4>Thank you for contribuiting to this project and making the survey smarter!</h4>" +response + "<br><br>" + addWord;
                
            });
        }
        
        function submitNewWord(){
            var word = document.getElementById("addword").value;
            $.post("ajax/submitNewWord.php",{region: prediction, word: word},function(response){
                var modalContent = document.getElementById("content");
                modalContent.innerHTML = "<h4>Thank you for contribuiting to this project and making the survey smarter!</h4>" +response;
            });
        }
    </script>
</html>
