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
<div>
    or <a href="login.php">log in</a> to your account
</div>
