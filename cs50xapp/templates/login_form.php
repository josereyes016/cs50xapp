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
        <form action="login.php" method="post">
            <fieldset>
                <div class="form-group">
                    <input autofocus class="form-control" name="username" placeholder="Username" type="text" required/>
                </div>
                <div class="form-group">
                    <input class="form-control" name="password" placeholder="Password" type="password" required/>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Log In</button>
                </div>
            </fieldset>
        </form>
        
        <div>
            Or <a href="../public/register.php">register</a> here.
        </div>
    </div>

</body>
</html>