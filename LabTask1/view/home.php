
<html>
    <head>
        <title>my home</title>
    </head>
    <body>
        <h1>Registration From</h1>
        <form action ="../control/process.php" method="post">
        <!-- <img src="../image/img_girl.jpg"> -->
        <form>
            <table>
           <tr><td> First Name</td><td> <input type="text"> </td></tr>
           <tr><td> Last Name </td><td> <input type="text"> </td></tr>
           <tr><td> Age </td><td> <input type="text"> </td></tr>
      

          <tr><td> Designation</td>
           <td> <input type="radio"name="Designation">Junior Programmer
            <input type="radio"name="Designation">Senior Programmer
            <input type="radio"name="Designation">Project Lead</td></tr>

            <tr><td> Preferred Language</td>
            <td> <input type="checkbox"name="Language">JAVA
            <input type="checkbox"name="Language">PHP
            <input type="checkbox"name="Language">C++</td></tr>

            <tr><td> E-mail </td><td> <input type="text"> </td></tr>
            <tr><td> password</td><td> <input type="password"></td></tr>

            <tr><td>Please Choose a files :  </td>  
         <td><input type="file" id="myfile" name="myfile"> </td></tr>

            <tr><td> <input type="Submit"name="Submit" value="Submit"  >
            <input type="Reset"  ></td></tr>
            </table>

        </form>
    </body>
</html>
