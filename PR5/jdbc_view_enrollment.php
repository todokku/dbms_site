<html>
<body>
<h3>Enter information about an enrollment to add to the database:</h3>

<a href="http://csce.uark.edu/~cdd008/project_java/jdbc_insert_restaurant.php">Go Back (currently unlinked)</a>
<form action="jdbc_insert_student.php" method="post">
    Student ID: <input type="int" name="StudentID"><br>
    <input name="submit" type="submit" >
</form>
<br><br>

</body>
</html>



<!-- THIS AINT DONE YET CHIEF -->

<!--CREATE TABLE Enrollment(StudentId int,DeptCode varchar(48), CourseNum varchar(10));-->
<?php
if (isset($_POST['submit'])) 
{
    // replace ' ' with '\ ' in the strings so they are treated as single command line args
    $studentID = escapeshellarg($_POST[StudentID]);
                                                                                    //What is the order?
    $command = 'java -cp .:mysql-connector-java-5.1.40-bin.jar jdbc_view_enrollment ' . $studentID;

    // remove dangerous characters from command to protect web server
    $command = escapeshellcmd($command);
    echo "<p>command: $command <p>";
 
    // run jdbc_insert_course.exe
    system($command);           
}
?>