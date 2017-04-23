<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <linl rel="stylesheet"  href="css/style.css">
    <linl rel="stylesheet"  href="css/form.css">

    <!-- Favicon-->
	<link rel="shortcut icon" href="img/logo/favicon.png" >
    
</head>
<?php include("connection.php");?>
<body>
<div id="container">
    <div class="row">
            <div class="col-md-6">
                <a href="index.html"><img src="img/bg-4.png"height="80%" width="100%">
                <CENTER><h3>VIDYA ACADEMY OF SCIENCE AND TECHNOLOGY</h3>
                <h4>MARCH 31 --- APRIL 1</H4></CENTER></a>
            </div>
            <div class="col-md-6">
                <div class="col-md-10">
                </br>
                </br>
                <center><h1>REGISTER -- SINGLE EVENT</H1></center>
                </BR>
                </BR>
                <form class="form-horizontal"method="post" action="">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="name">Name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" required="required" name="name" placeholder="Enter name">
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" required="required" name="email" placeholder="Enter email">
                            </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-sm-2" for="email">College:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="college" required="required" name="college" placeholder="Enter College">
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="contactno">Contact No:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="contactno"  required="required" name="contactno" placeholder="Enter contact no">
                            </div>
                    </div>

                   
  
  
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="continents">HOSTING DEPARTMENT:</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="continents" required="required" id="continents">
                                    <option disabled selected value selected> -- select Department -- </option>
                                    <option value = "civil">CIVIL</option>
                                    <option value = "computerscience" >COMPUTER_SCIENCE</option>
                                    <option value = "electrical">ELECTRICAL_ELECTRONICS</option>
                                    <option value = "electronics">ELECTRONICS_COMMUNICATION</option>
                                    <option value = "mechanical">MECHANICAL_ENGINEERING</option>
                                    <option value = "production">PRODUCTION_ENGINEERING</option>
                                    <option value = "mca">MCA</option>
                                    <option value = "iedc">IEDC</option>
                                </select> 
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="selectcountries">EVENT:</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="selectedcountries" required="required" id="selectcountries">
                                    
                                </select>
                            </div>
                    </div>
                    <center>
                    <div class="form-group">

                        <input TYPE="submit" name="upload" title="register" value="Register"/>
                        
                    
                    
                    </div>
                    </center>
                </form>
            </div>
            <div class="col-md-2"></div>
            </div>
            </div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>


<script>
/*
 -------------------------------------------------------
 syntax 
 MAIN.createRelatedSelector(
    from   -> the filtering element           
    to     -> the element for filtered options
    obj    -> An object containing the options per
              option of the filtering (from) element
    [sort] -> optional sorting method for sorting
              of the complete or filtered options list
 --------------------------------------------------------
*/

//create the interdepent selectors
function initSelectors(){
 // next 2 statements should generate error message, see console
 MAIN.createRelatedSelector(); 
 MAIN.createRelatedSelector(document.querySelector('#continents') );
 
 //countries
 MAIN.createRelatedSelector
     ( document.querySelector('#continents')           // from select element
      ,document.querySelector('#selectcountries')      // to select element
      ,{                                               // values object 
        CIVIL: ['The cadal masuta'],
        COMPUTER_SCIENCE: ['Destroy The Decibel','NFS-Gaming','Fifa-Gaming','CodeX-Coding','Blind Coding','Maze Runner 2.0','Lumiere-Short Film Competition'],
        ELECTRICAL_ELECTRONICS: ['e-Quest','Mat Cracker','VIBGYOR','Drone Race','Circuitrix'],
        ELECTRONICS_COMMUNICATION: ['Robowar','Anuyayin'],
		MECHANICAL_ENGINEERING: ['CAD MASTER','AUTO QUIZ','VEHICLE DIAGNOSIS'],
        MCA :['Nirdhishta--DEBUGGING','Bhittipathra--POSTER Making','Shrishta--TROLL MAKING','Ranabhumi--GAMING','Bhavachithra--Spot Photography','Vegita--JAM-Just A Minute'],
        PRODUCTION_ENGINEERING: ['LATHE MASTER','Mr Manager','Fino Maniac'],
        showAllOption: false
      }
      ,function(a,b){return  a>b ? 1 : a<b ? -1 : 0;}   // sort method
 );

 
}

//create MAIN namespace
(function(ns){ // don't pollute the global namespace
    
 function create(from, to, obj, srt, showAllOption){
  if (!from) {
         throw CreationError('create: parameter selector [from] missing');
  }
  if (!to) {
         throw CreationError('create: parameter related selector [to] missing');
  }
  if (!obj) {
         throw CreationError('create: related filter definition object [obj] missing');
  }
  
  //retrieve all options from obj and add it
  obj.all = (function(o){
     var a = [];
     for (var l in o) {
       a = /array/i.test (o[l].constructor) ? a.concat(o[l]) : a;
     }
     return a;
  }(obj));
 // initialize and populate to-selector with all
  populator.call( from
                  ,null
                  ,to
                  ,obj
                  
  );
    
  // assign handler    
  from.onchange = populator;

  function initStatics(fn,obj){
   for (var l in obj) {
       if (obj.hasOwnProperty(l)){
           fn[l] = obj[l];
       }
   }
   fn.initialized = true;
  }
     
 function populator(e, relatedto, obj, srt){
    // set pseudo statics
    var self = populator;
    if (!self.initialized) {
        initStatics(self,{optselects:obj,optselectsall:obj.all,relatedTo:relatedto,sorter:srt || false});
    }
     
    if (!self.relatedTo){
        throw 'not related to a selector';
    }
    // populate to-selector from filter/all
    var selectedOptLabel = this.options[this.selectedIndex].firstChild.nodeValue;
    var optsfilter = this.selectedIndex < 1
                   ? self.optselectsall 
                   : self.optselects[selectedOptLabel]
       ,cselect = self.relatedTo
       ,opts = cselect.options;
       
    if (self.optselects.showAllOption) {
    	optsfilter = optsfilter.concat(['**ALL']);
    }
    this.setAttribute('data-currentsubset', selectedOptLabel);
    if (self.sorter) optsfilter.sort(self.sorter);
    opts.length = 0;
    
    for (var i=0;i<optsfilter.length;i+=1){
        opts[i] = new Option(optsfilter[i],i);
    }
  }
 }
    
 // custom Error
 function CreationError(mssg){
     return {name:'CreationError',message:mssg};
 }

 // return the create method with some error handling   
 window[ns] = { 
     createRelatedSelector: function(from,to,obj,srt) {
          try { 
              if (arguments.length<1) {
                 throw CreationError('no parameters');
              } 
              create.call(null,from,to,obj,srt); 
          } 
          catch(e) { console.log('createRelatedSelector ->',e.name,'\n'
                                   + e.message +
                                   '\ncheck parameters'); }
        }
 };    
}('MAIN'));
//initialize
initSelectors();
</script>
</body>


<?php
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
    {

        $name=$_POST['name'];
        $email=$_POST['email'];
        $contact=$_POST['contactno'];
        $dept=$_POST['continents'];
        $college=$_POST['college'];
        $event1=$_POST['selectedcountries'];
        if ($dept=="computerscience"){
            switch($_POST['selectedcountries']){
                case 0:$event="destroy the decibel";break;
                case 1:$event="nfs gaming";break;
                case 2:$event="fifa gaming";break;
                case 3:$event="codex coding";break;
                case 4:$event="blind coding";break;
                
                case 5;$event="maze runner";break;
                case 6:$event="lumiere short film competition";break;
            }
        }
        else if($dept=="civil"){
            switch($_POST['selectedcountries']){
                case 0:$event="the cadal masuta";break;
            }
        }

        else if($dept=="mechanical"){
            switch($_POST['selectedcountries']){
                case 0:$event="cad master";break;
                case 1:$event="auto quiz";break;
                case 2:$event="vehicle diagnosis";break;
            }
        }

        else if($dept=="production"){
            switch($_POST['selectedcountries']){
                case 0:$event="Lathe Master";break;
                case 1:$event="Mr Manager";break;
                case 2:$event="Fino Maniac";break;
            }
        }

        else if($dept=="mca"){
            switch($_POST['selectedcountries']){
                case 0:$event="debugging";break;
                case 1:$event="poster making";break;
                case 2:$event="troll making";break;
                case 3:$event="gaming";break;
                case 4:$event="spot photography";break;
                case 5:$event="JAM";break;
            }
        }

        else if($dept=="electronics"){
            switch($_POST['selectedcountries']){
                case 0:$event="robowar";break;
                case 1:$event="anuyayin";break;
            }
        }

        else if($dept=="electrical"){
            switch($_POST['selectedcountries']){
                case 0:$event="E-QUEST";break;
                case 1:$event="MAT CRACKER";break;
                case 2:$event="VIBGYOR";break;
                case 3:$event="DRONE RACE";break;
                case 4:$event="CIRCUITRIX";break;
            }
        }

        $sql = "insert into regdetails  values(?,?,?,?,?,?,?)";
        $stmt = mysqli_prepare($db,$sql); 
        mysqli_stmt_bind_param($stmt,'dssssss',$id,$name,$email,$college,$contact,$dept,$event);
        mysqli_stmt_execute($stmt);
        $check = mysqli_stmt_affected_rows($stmt);
         if($check){
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Registered')
                window.location.href='reg.php';
                </SCRIPT>");
            }

        mysqli_close($db);
    }
?>