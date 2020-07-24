<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='UTF-8'/>
    <title>Members Study Submission</title>
    <link rel='stylesheet' href='css/insertstudystyles.css'/>
  </head>
  <body>
    <header class='study-form-header'>
        
        <form action='' method='get' class='study-form'>

            <h1>Member Study Submission</h1>
            <p><em>Want to capture study details for family members? Use this form.</em></p>
       
            <div class='form-row'>
                <label for='full-name'>Name</label>
                <input id='full-name' name='full-name' type='text'/>
            </div>

            <div class='form-row'>
                <label for='email'>Email</label>
                <input id='email'
                    name='email'
                    type='email'
                    placeholder='joe@example.com'/>
            </div>

            <div class='form-row'>
                <label for='t-shirt'>T-Shirt Size</label>
                <select id='t-shirt' name='t-shirt'>
                    <option value='xs'>Extra Small</option>
                    <option value='s'>Small</option>
                    <option value='m'>Medium</option>
                    <option value='l'>Large</option>
                </select>
            </div>

            <div class='form-row'>
                <label class='checkbox-label' for='available'>
                    <input id='available'
                        name='available'
                        type='checkbox'
                        value='is-available'/>
                    <span>I’m actually available the date of the talk</span>
                </label>
            </div>

            <div class='form-row'>
                <button>Submit</button>
            </div>



        </form>

    </header>
  </body>
</html>
