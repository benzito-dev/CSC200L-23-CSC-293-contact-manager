# Student Registration System

## Student Info
- *Name:*paul ushie
- *Matric Number:* 23\CSC\251
- *Course Code:* CSC 282 

## Assignment Title
*Student Registration System*

## Project Description
This project is a simple PHP and MySQL web application for registering students. It allows users to:
- Fill a registration form with *Full Name, Email, Department, Matric Number*.  
- Validate and save student details into a MySQL database.  
- View all registered students in a table.  
- Delete student records when needed (extra credit feature).  

## Files in this Repository
- db.php → Handles database connection.  
- index.php → Registration form (main entry page).  
- process.php → Processes form data, validates inputs, and saves to database.  
- view.php → Displays registered students.  
- delete.php → Deletes a student record.  
- students_db.sql → SQL file to create the database and table.  
- README.md → Documentation file.  
- (Snapshots of the interface are also included).  

## Database Setup
1. Open *phpMyAdmin* in XAMPP (http://localhost/phpmyadmin).  
2. Create a new database:
   ```sql
   CREATE DATABASE student_db;
3. Inside the database, create the student_records table:
   CREATE TABLE student_records (
    	id INT AUTO_INCREMENT PRIMARY KEY,
      fullname VARCHAR(100),
    	email VARCHAR(100),
      department VARCHAR(50),
      matric VARCHAR(50)
   );
4. Import student_db.sql if provided.

##How to Run the Project
1. Install XAMPP and start Apache & MySQL.
2. Copy all project files into htdocs/student-app/ folder
3. Open your browser and go to:
  (http://localhost/student-registration/index.php)

4. Register students using the form.
5. View registered students via the "View Registered Students" link.
6. Use the delete button to remove a record if needed.
