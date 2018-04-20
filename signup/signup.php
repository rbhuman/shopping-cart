<?php

?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="signup.style.css">
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
            <legend><a href="http://www.jquery2dotnet.com"><i class="glyphicon glyphicon-globe"></i></a> Sign up!</legend>
            <form action="signupdb.php" method="post" class="form" role="form">
            <div class="row">
                <div class="col-xs-6 col-md-6">
             <div class="pw"></div>
                    <input class="form-control" name="firstname" placeholder="First Name" type="text"
                         />
                </div>
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" name="lastname" placeholder="Last Name" type="text" />
                </div>
            </div>
            <input class="form-control" name="email" placeholder="Your Email" type="email" />
           
            <input class="form-control" name="username" placeholder="username" type="text"  />
          
            <input class="form-control" name="password" placeholder="New Password" type="password"  />
            <input class="form-control" name="password1" placeholder="Re Enter Password" type="password"  />
            <label for="">
                Birth Date</label>
            <div class="row">
                <div class="col-xs-4 col-md-4">
                    <select class="form-control" name="months">
                        <option value="">Month</option>
                        <option value="Jan">Jan</option>
                        <option value="Feb">Feb</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="Aug">Aug</option>
                        <option value="Sept">Sept</option>
                        <option value="Oct">oCT</option>
                        <option value="Nov">Nov</option>
                        <option value="Dec">Dec</option>

                    </select>
                </div>
                <div class="col-xs-4 col-md-4">
                    <select class="form-control" name="days">
                        <option value="Day">Day</option>
                        <option value="sun">Sunady</option>
                        <option value="mon">Monday</option>
                        <option value="tue">Tuesday</option>
                        <option value="wed">Wednesday</option>
                        <option value="thrs">Thrusday</option>
                        <option value="fri">Friday</option>
                        <option value="sat">Sarurday</option>
                    </select>
                </div>
                <div class="col-xs-4 col-md-4">
                    <select class="form-control" name="years">
                        <option value="Year">Year</option>
                        <option value="1990">1990</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                    </select>
                </div>
            </div>
            <label class="radio-inline" >
                <input type="radio" name="gender" id="inlineCheckbox1" value="male" />
                Male
            </label>
            <label class="radio-inline">
                <input type="radio" name="gender" id="inlineCheckbox2" value="female" />
                Female
            </label>
            <br />
            <br />
            <button class="btn btn-lg btn-primary btn-block" type="submit">
                Sign up</button>
            </form>
        </div>
    </div>
</div>