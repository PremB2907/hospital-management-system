# 🏥 Hospital Management System

### Role-Based PHP + MySQL Web Application

![PHP](https://img.shields.io/badge/PHP-8.x-blue)
![MySQL](https://img.shields.io/badge/MySQL-Database-orange)
![Bootstrap](https://img.shields.io/badge/Bootstrap-UI-purple)
![XAMPP](https://img.shields.io/badge/XAMPP-Local%20Server-red)
![License](https://img.shields.io/badge/License-MIT-green)
![Status](https://img.shields.io/badge/Status-Active-success)

A full-stack **Hospital Management System (HMS)** built using **PHP, MySQL, Bootstrap, and JavaScript**.
It supports role-based authentication for **Patients, Doctors, and Admin**, and provides complete appointment and record management.

---

# 🚀 Features

## 👤 Patient Module

* Registration & Login
* Book Appointment
* View Appointment History
* Cancel Appointments
* View Prescriptions

## 🩺 Doctor Module

* Secure Login
* View Assigned Appointments
* Search Patients
* Manage Appointment Records

## 🛠 Admin Module

* Manage Patients
* Add / Remove Doctors
* View & Manage Appointments
* Update Payment Status
* Review Feedback
* Optional Email Notifications

---

# 🛠 Tech Stack

| Layer    | Technology                         |
| -------- | ---------------------------------- |
| Frontend | HTML5, CSS3, Bootstrap, JavaScript |
| Backend  | PHP                                |
| Database | MySQL                              |
| Server   | XAMPP (Apache + MySQL)             |
| PDF      | TCPDF                              |
| Email    | PHPMailer (Optional)               |

---

# 📸 Screenshots

## 🏠 Home Page

*Add your screenshot here*

```
assets/screenshots/home.png
```

## 👤 Patient Dashboard

*Add your screenshot here*

```
assets/screenshots/patient-dashboard.png
```

## 🩺 Doctor Dashboard

*Add your screenshot here*

```
assets/screenshots/doctor-dashboard.png
```

## 🛠 Admin Panel

*Add your screenshot here*

```
assets/screenshots/admin-panel.png
```

To display screenshots in GitHub:

```markdown
![Home](assets/screenshots/home.png)
```

---

# ⚙️ Installation Guide

## 1️⃣ Clone Repository

```bash
git clone https://github.com/yourusername/hospital-management-system.git
```

Move project to:

```
C:\xampp\htdocs\
```

---

## 2️⃣ Start Services

Start from XAMPP:

* Apache
* MySQL

---

## 3️⃣ Setup Database

1. Open `http://localhost/phpmyadmin`
2. Create database:

```
myhmsdb
```

3. Import:

```
myhmsdb.sql
```

---

## 4️⃣ Run Project

```
http://localhost/hospital
```

---

# 🔐 Default Admin Login

```
Username: admin
Password: admin123
```

---

# 📧 Email Configuration (Optional)

Edit:

```
include/mail.php
```

Example SMTP setup:

```php
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'your-email@gmail.com';
$mail->Password = 'your-app-password';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
```

⚠️ Never commit real credentials.

---

# 🛡 Security Improvements Recommended

* Use `password_hash()` instead of plain text passwords
* Implement prepared statements
* Move credentials to environment variables
* Enable HTTPS
* Add CSRF protection

---

# 🤝 Contribution Guidelines

Contributions are welcome!

### Steps to Contribute:

1. Fork the repository
2. Create a new branch:

```bash
git checkout -b feature-name
```

3. Make your changes
4. Commit:

```bash
git commit -m "Added new feature"
```

5. Push:

```bash
git push origin feature-name
```

6. Open a Pull Request

---

# 📜 License

This project is licensed under the **MIT License**.

You are free to:

* Use
* Modify
* Distribute

As long as proper credit is given.

Create a file named `LICENSE` and add:

```
MIT License

Copyright (c) 2026 Prem B

Permission is hereby granted, free of charge, to any person obtaining a copy...
```

(Full MIT license text can be copied from opensource.org)

---

# 📈 Future Enhancements

* Appointment approval workflow
* Pagination
* Payment history tracking
* REST API support
* MVC refactor
* Role middleware

---

# 💡 What This Project Demonstrates

* Multi-role authentication
* CRUD operations
* Session management
* Database-driven UI
* Dynamic fee auto-fetch
* Modular PHP structure
* Admin control system

---

# 👨‍💻 Author

**Prem B**

If you found this project useful, consider giving it a ⭐ on GitHub.

---

