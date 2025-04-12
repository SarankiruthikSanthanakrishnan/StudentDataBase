
# 🎓 Student Database Management System

A full =>featured Student Database Management System built using  PHP  and  MySQL . This web application allows users to securely log in, manage student records, and perform CRUD operations — all within a clean, easy =>to =>use dashboard.


🌐 📌 Features

 => 🔐  User Authentication 
   => Secure login and registration system
   => Session management to protect sensitive routes

 => 🧑‍🎓  Student Management 
   => Add, view, edit, and delete student records
   => Upload and store profile images

 => 🗃️  Database Integration 
   => Fully connected with MySQL
   => Clean and efficient database schema

 => 🖥️  Admin Dashboard 
   => Central hub to view and control all records

 => => =>

🌐 🧰 Tech Stack

| Layer        | Technology   |
| => => => => => => => => => => => => => =>| => => => => => => => => => => => => => =>|
| Frontend     | HTML / CSS   |
| Backend      | PHP          |
| Database     | MySQL        |
| Local Server | XAMPP / WAMP |

 => => =>

🌐 📂 Project Structure

```
StudentDatabase/
├── add.php
├── db.php
├── delete.php
├── edit.php
├── image.png
├── image2.png
├── index.php
├── login.php
├── register.php
├── slogin.php
└── style.css (optional)
```

 => => =>

🌐 🚀 Getting Started

🌐# 1️⃣ Requirements
 => PHP (>=7.x)
 => MySQL
 => Apache server (XAMPP/WAMP/LAMP)
 => Web browser

🌐# 2️⃣ Installation & Setup

1.  Clone the repo or download the ZIP 
   ```bash
   git clone https://github.com/your =>username/student =>database.git
   ```

2.  Move the project to your server directory 
    => For XAMPP: place in `htdocs/` folder

3.  Import the SQL Database 
    => Open  phpMyAdmin 
    => Create a new database (e.g., `student_db`)
    => Import the provided SQL file (if available)

4.  Configure your `db.php` 
   ```php
   $conn = mysqli_connect("localhost", "root", "", "student_db");
   ```

5.  Run the application 
    => Open your browser
    => Go to `http://localhost/StudentDatabase/`



🌐 📸 Screenshots

![Dashboard](image.png)
![Login Page](image2.png)

 => => =>

🌐 💡 Future Enhancements

 => 🔍 Search and filter functionality
 => 📋 Pagination for large data sets
 => 📱 Mobile responsive UI
 => 🧑‍🏫 Role =>based user access (Admin, Teacher, Student)
 => 🚀 Upgrade to React or Laravel frontend

 => => =>

🌐 🤝 Contributing

Contributions are welcome! Feel free to open issues or submit pull requests to improve the functionality or design.
