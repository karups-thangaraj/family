<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='UTF-8'/>
    <title>Add New Family Member </title>
    <link rel='stylesheet' href='css/addmemberstyles.css'/>
  </head>
  <body>
    <header class='member-form-header'>
        
        <form action='insertMember.php' method='post' class='member-form'>

            <h1>New Member Submission</h1>
            <p><em>Want to add new family member? Use this form.</em></p>
       
            <div class='form-row'>
                <label for='fullname'>Full Name</label>
                <input id='fullname' name='fullname' type='text'/>
            </div>


            <div class='form-row'>
                <label for='gender'>Gender(M/F)</label>
                <input id='gender' name='gender' type='text'/>
            </div>

            
            <div class='form-row'>
                <label for='DoB'>Date of Birth</label>
                <input id='DoB' name='DoB' type='date'/>
            </div>

            <div class='form-row'>
                <input type="submit" name="submit"  value="Add Family Member" />
            </div>



        </form>

    </header>
  </body>
</html>
