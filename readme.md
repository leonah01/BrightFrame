# 🌟 BrightFrame Project Management System

## 📌 Overview

BrightFrame is a **Laravel-based project management system** built to help **software engineering teams** collaborate efficiently. Employees can log in using their **@brightframe.co.zw** email and access various tools such as:

✅ **Task & Work Tracking** (Linked to GitHub commits)  
✅ **Internal Chat System** (Real-time WebSockets-based messaging)  
✅ **Client & Sales Management** (Invoices, Payments, CRM)  
✅ **Company Blog Management** (Publish articles on the official site)  
✅ **Calendar & Scheduling** (Meetings, Deadlines, Events)

---

## 🚀 Installation & Setup

### 1️⃣ Clone the Repository

```bash
git clone https://github.com/leonah01/BrightFrame.git
cd BrightFrame
```

### 2️⃣ Install Dependencies

```bash
composer install
```

### 3️⃣ Set Up Environment Variables

Copy the example environment file and generate the app key:

```bash
cp .env.example .env
php artisan key:generate
```

### 4️⃣ Configure Database (MongoDB)

**Install MongoDB locally or use MongoDB Atlas (Cloud).**
**Open .env and update the database settings:**

```bash
DB_CONNECTION=mongodb
DB_HOST=127.0.0.1
DB_PORT=27017
DB_DATABASE=brightframe
DB_USERNAME=
DB_PASSWORD=
```

**If using MongoDB Atlas, update with your connection string:**

```bash
DB_CONNECTION=mongodb
DB_HOST=your-cluster.mongodb.net
DB_DATABASE=brightframe
DB_USERNAME=your-username
DB_PASSWORD=your-password
```

**Install MongoDB support for Laravel:**

```bash
composer require jenssegers/mongodb
```

**Check if MongoDB is running:**

```bash
mongo --host 127.0.0.1 --port 27017
```

---

### 5️⃣ Run the Application

**Start the development server:**

```bash
php artisan serve
```

The app will be accessible at: http://127.0.0.1:8000

---

### 📊 Features & Modules

### 🔐 Authentication & User Roles
-Employees must log in using @brightframe.co.zw emails.
-Role-based access control (Admin, Developer, Manager, Sales, etc.).

### 📌 Project & Work Tracking
-Create and assign tasks with status tracking.
-GitHub Integration: Link commits, pull requests, and issues.

### 💬 Chat System
-Real-time messaging using WebSockets (Laravel Echo + Pusher).
-Team and private conversations.

### 🛒 Client & Sales Management
-Add and manage client contacts.
-Invoice & Payment Tracking (generate invoices, track payment status).

### 📝 Company Blog System
-Employees can write and publish blog posts.
-Blogs appear on the company’s official website.

### 📅 Calendar & Events
-Integrated calendar for scheduling meetings and project deadlines.

---
### 📁 Project Structure

```bash
BrightFrame/
│── app/                    # Core Laravel Application
│   ├── Http/               # Controllers & Middleware
│   ├── Models/             # Eloquent Models (MongoDB)
│   ├── Services/           # Business Logic
│── database/               # Seeders (No Migrations for MongoDB)
│── public/                 # CSS, JS, Images
│── resources/              # Blade Templates (Frontend)
│── routes/                 # API & Web Routes
│── storage/                # Logs, File Uploads
│── .env                    # Environment Variables
│── composer.json           # PHP Dependencies
│── README.md               # Project Documentation
```
---

