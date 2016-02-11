<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        rend("../templates/register_form.php", ["title" => "Register"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // TODO
        //check if first name, last name, username or password are blank
        if ($POST["first_name"] == NULL || $POST["last_name"] == NULL || $_POST["username"] == NULL || $_POST["password"] == NULL)
        {
            apologize("Username/password cannot be empty.");
        }
        else
        {
            //check if password and confirm password match
            if ($_POST["password"] !== $_POST["confirmation"])
            {
                apologize("Passwords do not match.");
            }
            else
            {
                //add new user
                query("INSERT INTO users (first_name, last_name, username, hash) VALUES(?, ?, ?, ?)", 
					$POST["first_name"], $POST["last_name"], $_POST["username"], crypt($_POST["password"]));
                query("INSERT INTO profile (id) VALUES(?)", $_SESSION["id"]);

                //check if insert failed
                if (query === false)
                {
                    apologize("You were not registered");
                }
                else
                {
                    //remember user ID and auto-log in
                    $rows = query("SELECT LAST_INSERT_ID() AS id");
                    $id = $rows[0]["id"];
                    $_SESSION["id"] = $id;
                    $_SESSION["username"] = $_POST["username"];

                    redirect("/index.php");
                }
            }
        }
    }

?>
