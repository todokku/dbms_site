import java.sql.*;


//THIS AINT DONE YET
/*
jdbc_insert_student.java    // java program that is called by php that just does the insert; calls jdbc_db.java to connect and do the actual insert
jdbc_db.java // class (no main program) that has useful methods

CREATE TABLE Enrollment(StudentId int,DeptCode varchar(48), CourseNum varchar(10)); 
*/

public class jdbc_view_enrollment
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

      String studentid = "STUDENTID";

      studentid = args[0];

      // For debugging purposes:  Show the database before the insert
      StringBuilder builder = new StringBuilder();
      String query1 = "SELECT * from Course WHERE STUDENTID= " 
                     + args[0];

                     String studentid = "STUDENTID";

                     studentid = args[0];
//      builder.append("<br> Table Course before:" + myDB.query(query1) + "<br>");

      builder.append("<br><br><br> Table Course:" + myDB.query(query1));
      System.out.println(builder.toString());

      myDB.disConnect();
   }
}
