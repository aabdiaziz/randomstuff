<?php
?>
<h1>Fill in Form</h1>
<form action="InsertAdult.php" method="post">
    What is your Name?: <input type="text" name="name"><br>
    What is your Birth Date? (in the format YYYY/MM/DD): <input type="date" name="DOB"><br>
    Whats is your Gender? (optional e.g. M,F or nothing):<input type="text" name="gender"><br>
    <br>
    <br>
    <br>
    <br>
    <h1>Child Optional Data</h1>
    <br>
    <br>
    <!--    Children -->
    What is your child's name?: <input type="text" name="childName"><br>
    What is their DOB?: <input type="date" name="childDOB"><br>
    What is their Favourite Color?: <input type="text" name="childFColor"><br>
    <br>
    <br>
    <h1>Pets Optional Data</h1>
    <br>
    <br>
    <!--    Children -->
    What is your pet type?: <input type="text" name="petType"><br>

    <input type="submit">
</form>

