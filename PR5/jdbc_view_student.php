<html>
<body>
<h3>Enter information about a student to add to the database:</h3>

<a href="http://csce.uark.edu/~cdd008/project_java/jdbc_insert_restaurant.php">Go Back (currently unlinked)</a>
<form action="jdbc_insert_student.php" method="post">
    <button type="submit" value="Submit">View Student</button>
</form>
<br><br>

</body>
</html>



<!-- THIS AINT DONE YET CHIEF -->

<!--CREATE TABLE Student(StudentId int,studentName varchar(64), Major varchar(8));-->
<?php
if (isset($_POST['submit'])) 
{
    // replace ' ' with '\ ' in the strings so they are treated as single command line args

    $command = 'java -cp .:mysql-connector-java-5.1.40-bin.jar jdbc_view_student';

    // remove dangerous characters from command to protect web server
    $command = escapeshellcmd($command);
    echo "<p>command: $command <p>";
 
    // run jdbc_insert_student.exe
    system($command);
}
?>