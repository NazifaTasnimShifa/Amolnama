<div align="center">

# 🏫 Amolnama - School Management System

### A Comprehensive Digital Solution for Educational Institutions

[![CodeIgniter](https://img.shields.io/badge/CodeIgniter-3.x-EF4223?style=for-the-badge&logo=codeigniter&logoColor=white)](https://codeigniter.com/)
[![PHP](https://img.shields.io/badge/PHP-7.x-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-5.7+-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![License](https://img.shields.io/badge/License-MIT-green.svg?style=for-the-badge)](LICENSE)

[Features](#-features) • [Installation](#-installation) • [Database Setup](#-database-setup) • [Login Credentials](#-default-login-credentials) • [Author](#-author)

</div>

---

## 📖 About The Project

**Amolnama** is a powerful and intuitive school management system built with the CodeIgniter PHP framework. It digitizes and simplifies the academic and administrative workflows of educational institutions, providing dedicated portals for Admins, Teachers, and Students to create a cohesive and efficient digital learning environment.

---

## ✨ Features

<table>
<tr>
<td width="50%">

### 👥 User Management
- 🔐 **Role-Based Access Control**
- 👤 Separate portals for Admins, Teachers & Students
- 🎓 Complete student profile management
- 👨‍🏫 Comprehensive teacher database
- 📊 Bulk student import via Excel

</td>
<td width="50%">

### 📚 Academic Management
- 🏛️ Class & Section organization
- 📅 Dynamic class routine creation
- 📖 Subject management system
- ⏰ Timetable scheduling
- 📋 Curriculum planning

</td>
</tr>
<tr>
<td width="50%">

### 📝 Examination System
- 📊 Exam scheduling & management
- ✍️ Mark entry & updates
- 📄 Automated marksheet generation
- 📈 Performance analytics
- 🎯 Grade calculation

</td>
<td width="50%">

### 🔧 Additional Features
- ✅ Attendance tracking system
- 📢 Centralized noticeboard
- 💬 Communication tools
- ⚙️ System customization
- 🌐 Multi-language support

</td>
</tr>
</table>

---

## 🚀 Installation

### Prerequisites

Before you begin, ensure you have the following installed:

- 🖥️ Web Server (XAMPP, WAMP, MAMP, or similar)
- 🐘 PHP 7.x or higher
- 🗄️ MySQL 5.7 or higher
- 📦 Git (optional)

### Step-by-Step Guide

#### 1️⃣ Clone the Repository

```bash
# Navigate to your web server's root directory (e.g., htdocs for XAMPP)
cd /path/to/htdocs

# Clone the repository
git clone https://github.com/NazifaTasnimShifa/Amolnama.git

# Or download ZIP and extract to htdocs
```

#### 2️⃣ Database Configuration

##### Create Database

1. Start your web server (Apache & MySQL)
2. Open phpMyAdmin (`http://localhost/phpmyadmin`)
3. Create a new database named `amolnama`
4. Set collation to `utf8_general_ci`

##### Update Database Credentials

Navigate to `application/config/database.php` and update:

```php
$db['default'] = array(
    'dsn'   => '',
    'hostname' => 'localhost',
    'username' => 'root',              // Your MySQL username
    'password' => '',                  // Your MySQL password
    'database' => 'amolnama',          // Database name
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
```

#### 3️⃣ Configure Base URL

Navigate to `application/config/config.php` and set:

```php
$config['base_url'] = 'http://localhost/Amolnama/';
```

#### 4️⃣ Launch Application

Open your browser and navigate to:

```
http://localhost/Amolnama/
```

---

## 🗄️ Database Setup

### Creating Database Tables

Since there's no SQL file included, you'll need to create the necessary tables. Below is the basic structure to get started:

#### Required Tables Structure

```sql
-- Create Admin Table
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Create Teacher Table
CREATE TABLE `teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Create Student Table
CREATE TABLE `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `roll` varchar(50) DEFAULT NULL,
  `class` varchar(100) DEFAULT NULL,
  `section` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
```

### Insert Demo Credentials

Execute the following SQL to create demo users:

```sql
-- 
-- Insert Demo Admin User
-- Password: 1234 (SHA1 hashed)
--
INSERT INTO `admin` (`name`, `email`, `password`) VALUES
('Admin User', 'admin@amolnama.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

-- 
-- Insert Demo Teacher User
-- Password: 1234 (SHA1 hashed)
--
INSERT INTO `teacher` (`name`, `email`, `password`) VALUES
('Teacher User', 'teacher@amolnama.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

-- 
-- Insert Demo Student User
-- Password: 1234 (SHA1 hashed)
--
INSERT INTO `student` (`name`, `email`, `password`) VALUES
('Student User', 'student@amolnama.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');
```

> **⚠️ Note:** The password `1234` is hashed using SHA1. The hash value is `7110eda4d09e062aa5e4a390b0a572ac0d2c0220`

---

## 🔑 Default Login Credentials

After setting up the database and inserting demo data, use these credentials to login:

<table>
<tr>
<th>Role</th>
<th>Email</th>
<th>Password</th>
<th>Portal</th>
</tr>
<tr>
<td>👨‍💼 Admin</td>
<td><code>admin@amolnama.com</code></td>
<td><code>1234</code></td>
<td>Admin Dashboard</td>
</tr>
<tr>
<td>👨‍🏫 Teacher</td>
<td><code>teacher@amolnama.com</code></td>
<td><code>1234</code></td>
<td>Teacher Portal</td>
</tr>
<tr>
<td>🎓 Student</td>
<td><code>student@amolnama.com</code></td>
<td><code>1234</code></td>
<td>Student Portal</td>
</tr>
</table>

> **🔒 Security Reminder:** Please change these default credentials after your first login!

---

## 📁 Project Structure

```
Amolnama/
├── application/
│   ├── config/
│   │   ├── config.php          # Base URL configuration
│   │   ├── database.php        # Database credentials
│   │   └── routes.php
│   ├── controllers/            # Application controllers
│   ├── models/                 # Database models
│   ├── views/                  # View templates
│   └── libraries/              # Custom libraries
├── assets/
│   ├── css/                    # Stylesheets
│   ├── js/                     # JavaScript files
│   └── images/                 # Image assets
├── system/                     # CodeIgniter core files
├── .htaccess
├── index.php
└── README.md
```

---

## 🛠️ Technology Stack

<div align="center">

| Technology | Purpose |
|------------|---------|
| ![CodeIgniter](https://img.shields.io/badge/CodeIgniter-EF4223?style=flat-square&logo=codeigniter&logoColor=white) | PHP Framework |
| ![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat-square&logo=php&logoColor=white) | Backend Language |
| ![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat-square&logo=mysql&logoColor=white) | Database |
| ![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=flat-square&logo=bootstrap&logoColor=white) | Frontend Framework |
| ![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=flat-square&logo=javascript&logoColor=black) | Client-side Scripting |
| ![jQuery](https://img.shields.io/badge/jQuery-0769AD?style=flat-square&logo=jquery&logoColor=white) | JavaScript Library |

</div>

---

## 🤝 Contributing

Contributions are what make the open-source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

---

## 📝 License

Distributed under the MIT License. See `LICENSE` for more information.

---

## 👨‍💻 Author

<div align="center">

### **Nazifa Tasnim Shifa**

[![LinkedIn](https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/nazifa-tasnim-shifa)
[![GitHub](https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white)](https://github.com/NazifaTasnimShifa)

**Software Developer | AI/ML Enthusiast**

</div>

---

## 🐛 Known Issues & Troubleshooting

<details>
<summary><b>Click to expand troubleshooting guide</b></summary>

### Issue: 404 Error on pages other than home

**Solution:** Enable `mod_rewrite` in Apache and ensure `.htaccess` is working.

### Issue: Database connection failed

**Solution:** 
- Verify MySQL service is running
- Check database credentials in `application/config/database.php`
- Ensure database `amolnama` exists

### Issue: Blank page after login

**Solution:** 
- Enable error reporting in `index.php`
- Check PHP error logs
- Verify all required tables exist in database

</details>

---

## 📞 Support

If you encounter any issues or have questions:

- 📧 Create an [Issue](https://github.com/NazifaTasnimShifa/Amolnama/issues)
- 💬 Start a [Discussion](https://github.com/NazifaTasnimShifa/Amolnama/discussions)

---

<div align="center">

### ⭐ Don't forget to star this repository if you found it helpful!

**Made with ❤️ by Nazifa Tasnim Shifa**

</div>