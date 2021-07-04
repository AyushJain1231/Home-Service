









<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<style type="text/css">.register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
</style>
	
</head>
<body>

<!-- https://image.ibb.co/n7oTvU/logo_white
 --> 
 <div class="container register ">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="IMG/lo1.png" style="width: 150px; height: 150px;" alt=""/>
                        <h3>Welcome</h3>
                        <br>
                        <h6>Fill Your Personal<br> Details!</h6>
                       
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" >
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Provider</a>
                            </li>
                            
                        </ul>
                         <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Registration Form</h3>
                                <form action="pform.php" method="post">
                       
                                <div class="row register-form" >


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="FirstName" placeholder="First Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="Email" placeholder="Your Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="Address" placeholder="Address *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="Adhaar" placeholder="Adhaar Card Number *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="Service">
                                                <option class="hidden"  selected disabled>Service Type</option>
                                                <option>Appliances Service</option>
                                                <option>Carpenter Service</option>
                                                <option>Electrician Service</option>
                                                <option>Home Cleaning Service</option>
                                                <option>Painter Service</option>
                                                <option>Plumber Service</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="LastName" placeholder="Last Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="phone" minlength="10" maxlength="10" class="form-control" name="Phone" placeholder="Your Phone *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="City" class="form-control" placeholder="City *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="Pan" class="form-control" placeholder="Pan Card Number *" value="" />
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                        
                                        
                                        <button type="submit" class="btnRegister" name="submit">Register</button>
                                    </div>
                                 
                                </div>
                                   </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 
 <br>
   
   <div class="container text-center">
   	<a href=" HomeServiceApp.php" > <button type="button" class="btn btn-danger btn-lg" style="text-align: center;"> Back to Home Page</button></a>
   </div>
   
   <br>
   <br>
   <br>       
       
</body>
</html>
