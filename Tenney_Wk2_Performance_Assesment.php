<html> 

<head>
    <title>Tenney Wk 2 Performance Assesment</title>
</head>

<body> 
    <form method='POST'>
        <h3>Enter your name here: <input type="text" name="name"></h3>
        <h3>Enter your date of birth here: <input type="date" name="birthday"></h3>
        <h3>Enter your favorite color here: <input type="text" name="color"></h3>
        <h3>Enter your favorite place to visit here:<input type="text" name="place"></h3>
        <h3>Enter your nickname here:<input type="text" name="nickname"></h3>
        <input type="submit" value="Submit Values">
    </form>
    <?php
        //Declare and clear variables for display
        $name = '';
        $birthday ='';
        $color ='';
        $place ='';
        $nickname ='';
        
        //Retrive values from query string anf store in a local variable
        //as long as the query string exists.
        if (isset($_POST['name'])) {
            $name = $_POST['name'];
            //echo "<p>name is set in POST</p>";
        }    
        if (isset($_POST['birthday']))
            $birthday = $_POST['birthday'];
        if (isset($_POST['color']))
            $color = $_POST['color'];
        if (isset($_POST['place']))
            $place = $_POST['place'];
        if (isset($_POST['nickname']))
            $nickname = $_POST['nickname'];

        var_dump($name);
        var_dump($birthday);
        
            //Display the values enterd as long as there is a value.
        if (strlen($name) > 0)
            echo "<h3> The name you enterd is: $name </h3>";
        else
            echo "<h3> You're missing your name!</h3>";
        if (strlen($birthday) > 0)
            echo "<h3>Your birthday is: $birthday</h3>";
        else
            echo "<h3> You're missing your birthday!</h3>";
        if (strlen($color) > 0)
            echo "<h3>Your favorite color is: $color</h3>";
        else
            echo "<h3> You're missing your favorite color!</h3>";
        if (strlen($place) > 0)
            echo "<h3>Your favorite place is: $place</h3>";
        else
            echo "<h3>You're missing your favorite place!</h3>";
        if (strlen($nickname) > 0)
            echo "<h3>Your nickname is: $nickname</h3>";
        else
            echo "<h3>You're missing your nickname!</h3>";
    ?>
</body>

</html>