<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
        	<?php ?>
        </title>
        
        <!--STYLESHEET-->
        <!--=================================================-->
        <!--Open Sans Font [ OPTIONAL ] -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin" rel="stylesheet">
        <!--Bootstrap Stylesheet [ REQUIRED ]-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--Nifty Stylesheet [ REQUIRED ]-->
        <link href="css/nifty.min.css" rel="stylesheet">
        <!--Font Awesome [ OPTIONAL ]-->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        
        <!--SCRIPT-->
        <!--=================================================-->
        <!--Page Load Progress Bar [ OPTIONAL ]-->
        <link href="css/pace.min.css" rel="stylesheet">
        <script src="js/pace.min.js"></script>
    </head>
    
    <body>
    <div id="container"> 
        <form action="register.php" method="post">
            <fieldset>
            
                <!-- First and Last Name -->
                <div class="form-group">
                    <input autofocus class="form-control" name="first_name" placeholder="First Name" type="text" required/>
                </div>
                <div class="form-group">
                    <input autofocus class="form-control" name="last_name" placeholder="Last Name" type="text" required/>
                </div>
                
                <!-- Username (preferably the same as Slack) -->
                <div class="form-group">
                    <input autofocus class="form-control" name="username" placeholder="Username" type="text" required/>
                </div>
                
                <!-- Password -->
                <div class="form-group">
                    <input class="form-control" name="password" placeholder="Password" type="password" required/>
                </div>
                
                <!-- Confirm Password -->
                <div class="form-group">
                    <input class="form-control" name="confirmation" placeholder="Password" type="password"/>
                </div>
                
                <!-- Submit Button -->
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Register</button>
                </div>
                
            </fieldset>
        </form>
    </div>

</body>
</html>
