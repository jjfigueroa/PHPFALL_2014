<!-- Jairo Figueroa -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mailing List</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
         <div id="content">
            <h1>Account Sign Up</h1>
            <form action="display_results.php" method="post">

            <fieldset>
            <legend>Account Information</legend>
                <label>E-Mail:</label>
                <input type="text" name="email" value="<?php  if (isset($email)){ echo $email; }  ?>" class="textbox"/>
                <br />

                <label>Phone Number:</label>
                <input type="text" name="phone" value="<?php  if (isset($phone)){ echo $phone; }  ?>" class="textbox"/>
            </fieldset>

            <fieldset>
            <legend>Settings</legend>

                <p>How did you hear about us?</p>
                <input type="radio" name="heard_from" value="Search Engine" <?php if (isset($heard) && $heard == 'Search _Engine'){echo 'checked';} ?>/>
                Search engine<br />
                <input type="radio" name="heard_from" value="Friend"<?php if (isset($heard) && $heard == 'Friend'){echo 'checked';} ?> />
                Word of mouth<br />
                <input type=radio name="heard_from" value="Other" <?php if (isset($heard) && $heard == 'Other'){echo 'checked';} ?>/>
                Other<br />

                <p>Contact via:</p>
                <select name="contact_via">
                        <option value="email" <?php if (isset($contact) && $contact === 'email'){echo 'selected';} ?>>Email</option>
                        <option value="text" <?php if (isset($contact) && $contact === 'text'){echo 'selected';} ?>>Text Message</option>
                        <option value="phone" <?php if (isset($contact) && $contact === 'phone'){echo 'selected';} ?>>Phone</option>
                </select>

                <p>Comments: (optional)</p>
                <textarea name="comments" rows="4" cols="50"></textarea>
            </fieldset>

            <input type="submit" value="Submit" />

            </form>
            <br />
        </div>
        
        <?php
// put your code here


?>
        
        
    </body>
</html>