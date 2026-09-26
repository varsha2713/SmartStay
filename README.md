# 🏠 SMARTSTAY – Smart House Rental & Property Management Platform

> A web-based platform that simplifies house rental management by connecting property owners and tenants through a centralized, user-friendly system.

## 📌 Overview

SMARTSTAY is a full-stack web application designed to streamline the house rental process for both **property owners and tenants**.

The platform enables owners to list and manage rental properties, upload property images, manage tenant details, and track rental information, while tenants can explore available properties and manage their rental-related activities.

The system focuses on reducing manual rental management, improving transparency, and providing a smoother digital experience for both owners and tenants.

---

## 🎯 Problem Statement

Traditional house rental management often involves:

- Manual property listing and enquiry handling
- Difficulty maintaining tenant and rental records
- Lack of centralized property information
- Manual management of move-in and rental details
- Limited visibility of property images and details

SMARTSTAY addresses these challenges through a centralized digital platform.

---

## ✨ Key Features

### 👤 User Authentication
- Secure registration and login
- Role-based access for Owners and Tenants
- Session-based authentication

### 🏡 Property Management
- Owners can add rental properties
- Add property details such as location, rent and availability
- Upload property images
- Edit and manage listed properties
- View property details

### 🔍 Property Discovery
- Tenants can browse available properties
- View property information and images
- Explore suitable rental options

### 👥 Tenant Management
- Owners can manage tenant information
- Track tenant-property relationships
- Maintain rental and move-in details

### 📊 Dashboard
- Role-based dashboards
- Quick access to important rental information
- Organized property and tenant management

### 🏠 Rental Management
- Track move-in details
- Manage rental information
- Maintain centralized records

---

## 🛠️ Tech Stack

| Technology | Purpose |
|------------|---------|
| PHP | Backend development |
| MySQL | Database management |
| HTML5 | Structure |
| CSS3 | Styling & responsive UI |
| JavaScript | Client-side functionality |
| XAMPP | Local development environment |
| Git & GitHub | Version control |

---

## 🏗️ System Architecture

```text
                    ┌─────────────────────┐
                    │       SMARTSTAY     │
                    └──────────┬──────────┘
                               │
              ┌────────────────┴────────────────┐
              │                                 │
        👤 Tenant                           🏠 Owner
              │                                 │
              └──────────────┬──────────────────┘
                             │
                     Web Application
                             │
                     PHP Backend
                             │
                         MySQL DB
🔄 Application Flow

User Registration/Login
          ↓
   Role Identification
       ↙       ↘
   Tenant       Owner
      ↓           ↓
Browse Houses   Add Property
      ↓           ↓
View Details    Upload Images
      ↓           ↓
Rental Details  Manage Property
          \       /
           \     /
          MySQL Database


PROJECT STRUCTURE
SMARTSTAY/
│
├── config/
│   └── config.php
│
├── uploads/
│   └── property-images/
│
├── owner/
│   ├── dashboard.php
│   ├── add_property.php
│   └── manage_property.php
│
├── tenant/
│   ├── dashboard.php
│   └── properties.php
│
├── index.php
├── login.php
├── register.php
├── logout.php
└── README.md


🗄️ Database

SMARTSTAY uses MySQL as its relational database.

The database manages:

User accounts
Property information
Property images
Tenant details
Rental information
Move-in details
Owner-property relationships
🔐 Security & Validation

The application incorporates basic security practices such as:

Authentication and authorization
Role-based access control
Session management
Server-side validation
Database queries using prepared statements
Controlled file uploads for property images

🚀 How to Run the Project
1. Install XAMPP

Install XAMPP and start:

Apache
MySQL
2. Clone the Repository
git clone https://github.com/YOUR-USERNAME/SMARTSTAY.git
3. Move Project

Place the project inside:

C:\xampp\htdocs\
4. Create Database

Open:

http://localhost/phpmyadmin

Create the required MySQL database and import the project SQL file.

5. Configure Database

Update the database credentials in:

config/config.php
6. Run the Application

Open:

http://localhost/SMARTSTAY/
💡 Future Enhancements
🔎 Advanced property search and filtering
📍 Location-based property discovery
💳 Online rent payment integration
📱 Fully responsive mobile interface
💬 Owner–tenant real-time chat
🔔 Rental payment and agreement notifications
⭐ Property ratings and reviews
📄 Digital rental agreement generation
☁️ Cloud-based image storage
👩‍💻 My Contribution

As a developer, I contributed to the development of SMARTSTAY, including:

Designed and implemented frontend interfaces
Developed PHP-based backend functionality
Integrated MySQL database operations
Implemented owner and tenant workflows
Developed property management functionality
Integrated property image upload functionality
Implemented authentication and session handling
Worked on database-driven rental management features
Used Git and GitHub for version control and project collaboration
📈 What This Project Demonstrates

SMARTSTAY demonstrates practical experience in:

Full-Stack Web Development
PHP Backend Development
MySQL Database Management
CRUD Operations
Authentication & Authorization
Role-Based Access Control
File Upload Handling
Database Integration
Git & GitHub
Software Architecture
Problem Solving
🎓 Project Type

Academic / Full-Stack Web Development Project

Built as part of an engineering project to gain practical experience in designing and developing a real-world rental management solution.

⭐ Project Highlights

SMARTSTAY transforms traditional rental management into a centralized digital experience, making property management simpler for owners and property discovery easier for tenants.

👩‍💻 Developer

Varsha K S

B.Tech – Information Technology

Interested in:
Full-Stack Development • AI/ML • Software Engineering
