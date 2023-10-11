#### ToDo-List
ToDo List basic web application created with HTML, CSS, PHP and MySQL.
The application adds tasks in the table of the database. We can also remove each task.

####Run the app using XAMPP
1. Start the apache server
2. Start the mysql server
    -- if you have mysql installed on your system, starting mysql server on xampp might show an error.
    -- to fix this, do not start the mysql server on xampp, as the mysql server is already running on your system.
3. Pre-requisite to running the index.php
    -- create database on your mysql.
       -- on mysql cli, enter the following command -> create database db_name;
       -- to create table, enter the following -> create table table_name( id int, task varchar(255));
4. Edit the index.php on line 7, enter your mysql password and database name.
5. Copy this project folder, in C:/xampp/htdocs/project_name OR as per the folder path in your system
7. In your browser, enter the URL: http://localhost/project_name/index.php
8. Your web-app should running here.
   
