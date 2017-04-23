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
                <a href="index.html"><img src="img/dance.jpeg"height="100%" width="100%"></a> 
                
            </div>
            <div class="col-md-6">
                <div class="col-md-10">
                </br>
                </br>
                <center><h1>REGISTER -- 5..6..7..8.. Dance Out Loud</H1></center>
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

</body>


<?php
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
    {

        $name=$_POST['name'];
        $email=$_POST['email'];
        $contact=$_POST['contactno'];
        
        $college=$_POST['college'];
        $event="danceoutloud";
       

        $sql = "insert into danceoutloud  values(?,?,?,?,?,?)";
        $stmt = mysqli_prepare($db,$sql); 
        mysqli_stmt_bind_param($stmt,'dsssss',$id,$name,$email,$college,$contact,$event);
        mysqli_stmt_execute($stmt);
        $check = mysqli_stmt_affected_rows($stmt);
         if($check){
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Registered')
                window.location.href='dancecompetition.php';
                </SCRIPT>");
            }

        mysqli_close($db);
    }
?>