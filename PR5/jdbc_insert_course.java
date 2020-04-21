import java.sql.*;

/*
jdbc_insert_student.java    // java program that is called by php that just does the insert; calls jdbc_db.java to connect and do the actual insert
jdbc_db.java // class (no main program) that has useful methods

CREATE TABLE Course(DeptCode varchar(48), CourseNum varchar(10), Title varchar(64),CreditHours decimal(3,2)); 
*/

public class jdbc_insert_course
{
   // The main program that inserts a restaurant
   public static void main(String[] args) throws SQLException
   {
      String Username = "cdd008";              // Change to your own username
      String mysqlPassword = "John11";    // Change to your own mysql Password

      // Connect to the database
      jdbc_db myDB = new jdbc_db();
      myDB.connect(Username, mysqlPassword);
      myDB.initDatabase();

      // For debugging purposes:  Show the database before the insert
      StringBuilder builder = new StringBuilder();
      String query1 = "SELECT * from Course";
      builder.append("<br> Table Course before:" + myDB.query(query1) + "<br>");

      // Parse input string to get course Name and Address

      String deptcode = "DEPTCODE";
      String coursenum = "COURSENUM";
      String title = "TITLE";
      String credithours = "CREDITHOURS";

      // Read command line arguments
      // args[0] is the first parameter
      deptcode = args[0];
      coursenum = args[1];
      title = args[2];
      credithours = args[3];

      // Insert the new course
      String input =  deptcode + ",'" + coursenum + "','" + title + "','" + credithours + "'";
      myDB.insert("Course", input);    // insert new course

      // For debugging purposes:  Show the database after the insert
      builder.append("<br><br><br> Table Course after:" + myDB.query(query1));
      System.out.println(builder.toString());

      myDB.disConnect();
   }
}
