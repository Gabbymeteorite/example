<!DOCTYPE html>
<html>
    <body>
        <h1>Form</h1>
        <style>
            Fieldset{
                background-color:  rgb(131, 112, 243);
            }
            h1 {
                color:rgb(48, 8, 122);
                text-align:center;
                font-weight:bold;
                font-family: cursive;
                font-size: xx-large;
            }
            
        </style>
    </body>
    <form>
<!-- edit bby mr corrd-->
 <!--here i am :))) -->
        <Fieldset>
            <legend>information</legend>
        <h3>Information:</h3>
        <div>
            <label for="first name">First name</label>
            <input type="text" name="first name" required>
        </div>
        <div>
            <label for="last name">Last name.</label>
            <input type="text" name="last name" required>
        </div>
        <div>
        <div>
            <label for="age">Age.</label>
            <input type="text" name="age" required>
        </div>
        <h3>Gender:</h3>
        <div>
            <label for="male">Male.</label>
            <input type="checkbox" name="male" >
        </div>
        <div>
            <label for="female">Female.</label>
            <input type="checkbox" name="female" >
        </div>
        <h3>Color:</h3>
        <div>
            <label for="red">Red.</label>
            <input type="radio" name="red" >
        </div>
        <div>
            <label for="blue">Blue.</label>
            <input type="radio" name="blue" >
        <div>
        <div>
            <label for="yellow">Yellow.</label>
            <input type="radio" name="yellow" >
        <div>
        <div>
            <label for="purple">Purple.</label>
            <input type="radio" name="purple" >
        <div>
            <button type="submit">Submit</button>
        </div>
        </Fieldset>
    </form>
    </body>
</html>