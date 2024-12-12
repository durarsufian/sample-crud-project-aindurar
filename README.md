Description: 
A basic todo list application using PHP and MySQL showcasing fundamental CRUD (Create, Read, Update, Delete) operations.

Key Features:
- User-Friendly Interface: A simple, intuitive bootstrap web interface for managing tasks.
- CRUD Operations:
    - Create: Add new tasks to the list.
    - Read: View existing tasks in the list.
    - Update: Modify existing tasks.
    - Delete: Remove completed or unwanted tasks.
- Database Integration: Utilizes MySQL to store and retrieve task data.
- PHP Backend: Utilizes PHP to handle form submissions, database queries, and application logic.

Contents:
- index.php: The main page of the application, displaying tasks and providing function for adding, editing, and deleting tasks.
- add.php: Handles the process of adding new tasks to the database.
- delete.php: Handles the process of deleting existing tasks from the database.
- update.php: Handles the process of updating existing tasks in the database.
- db.php: Contains database connection details and functions for interacting with the database.
- crud.sql: Defines the structure of the database table for storing tasks.

Getting Started:
1. Set Up Your Local Environment:
   - Download and install XAMPP server from the official website (https://www.apachefriends.org/index.html).
   - Once installed, start the Apache and MySQL services from the XAMPP Control Panel.

2. Create the Project Directory:
   - Create a new folder named "crud_app" on your computer.
   - Place the extracted files (index.php, add.php, delete.php, update.php, and db.php) into this folder.
   - Move the "crud_app" folder to the XAMPP's "htdocs" directory. This is the default directory for web applications in XAMPP.
     
3. Set Up the Database:
   - Open your web browser and go to http://localhost/phpmyadmin.
   - Create a new database named "crud".
   - Import the crud.sql file into the newly created "crud" database. This will create the necessary table structure.

4. Open the Project in a Code Editor:
   - Open your preferred code editor (e.g., Visual Studio Code or Sublime Text).
   - Open the "crud_app" folder in your code editor. This will allow you to view and edit the source code.

5. Run the Application:
   - Open web browser and enter http://localhost/crud_app/ into the address bar.
   - This will open the main page of your CRUD application in the browser.
     
Now you can interact with the application by adding new tasks, view existing tasks, edit existing tasks and delete unwanted tasks.

Note:
Make sure you have PHP installed and configured on your system. XAMPP typically includes PHP.
If you encounter any errors, check the error logs in the XAMPP directory for more information.
By following these steps, you should be able to successfully set up and run CRUD application on your local machine.

Credits:
Developed by Aindurar Rania Balqis Binti Mohd Sufian
