<html>
<body>
<h3>Enter information about an enrollment to add to the database:</h3>

<a href="http://csce.uark.edu/~cdd008/PR5/dbms.html">Go Back</a>
<form action="jdbc_insert_enrollment.php" method="post">
    Student ID:     <input type="int"   name="StudentID">   <br>
    Dept Code:      <input type="text"  name="DeptCode">    <br>
    Course Number:  <input type="text"  name="CourseNum">   <br>
    <input name="submit" type="submit" >
</form>
<br><br>

</body>
</html>
<!--CREATE TABLE Enrollment(StudentId int,DeptCode varchar(48), CourseNum varchar(10));-->
<?php
if (isset($_POST['submit'])) 
{
    // replace ' ' with '\ ' in the strings so they are treated as single command line args
    $studentid = escapeshellarg($_POST[StudentID]);
    $deptcode = escapeshellarg($_POST[DeptCode]);
    $coursenum = escapeshellarg($_POST[CourseNum]);
                                                                                    //What is the order?
    $command = 'java -cp .:mysql-connector-java-5.1.40-bin.jar jdbc_insert_enrollment ' . $studentid . ' ' . $deptcode . ' ' . $coursenum;

    // remove dangerous characters from command to protect web server
    $command = escapeshellcmd($command);
    echo "<p>command: $command <p>";
 
    // run jdbc_insert_course.exe
    system($command);           
}
?>