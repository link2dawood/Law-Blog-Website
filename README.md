# 📘 Laravel Tutorial Blog System

This Laravel web application allows you to post tutorials with images and YouTube video links. It includes a dynamic frontend and an admin dashboard for managing tutorials. The project is ideal for anyone looking to create a blog or tutorial-based site.

---

## 📌 Table of Contents

- [Features](#features)
- [System Overview](#system-overview)
- [Why We Built This](#why-we-built-this)
- [How It Works](#how-it-works)
- [Why It Is Used](#why-it-is-used)
- [Installation](#installation)
- [Testing](#testing)
- [Code Description](#code-description)
- [Admin Dashboard](#admin-dashboard)
- [Screenshots](#screenshots)
- [Deployment](#deployment)
- [License](#license)

---

## ✅ Features

- Dynamic blog creation with:
  - Title
  - Description
  - Image upload
  - YouTube video embed
- Responsive frontend using Bootstrap
- Admin dashboard to manage blogs
- Contact form functionality with mail support
- Pages: Home, Tutorials, Single Tutorial, About Us, Contact Us
- Secure backend (auth protected)
- MVC structure using Laravel

---

## 🛠️ System Overview

The system is built using **Laravel**, following the **MVC architecture**. It leverages Laravel’s routing, Eloquent ORM, Blade templating, and middleware for security.

The admin can add tutorials that include images and YouTube video links from the dashboard. These blogs are displayed dynamically on the front-end.

Frontend is created using **HTML**, **CSS**, and **Bootstrap** to ensure responsiveness across devices.

Database: **MySQL**  
Language: **PHP (Laravel Framework)**

---

## 💡 Why We Built This

As developers, we often need a structured place to publish tutorials, document processes, and share knowledge with the community. We built this system to:

- Provide an organized way to share learning content
- Make it easier for admins to post multimedia-rich tutorials
- Enable users to access tutorials visually and contextually

It also serves as a learning project to understand Laravel concepts such as models, controllers, routes, and views in action.

---

## 🧩 How It Works

- Users land on the **Home Page** with featured tutorials
- Clicking a tutorial leads to a **Single Tutorial Page**
- Admin can login to the **Dashboard** to create new tutorials
- Tutorials include:
  - Title
  - Description
  - Image
  - YouTube video link
- Users can contact via the **Contact Us** page (data sent via email)

---

## 🤔 Why It Is Used

This system can be used for:

- Personal technical blogs
- Company training portals
- Educational resources
- Sharing tutorials with visuals and video integration

Its flexible structure and admin panel make it suitable for both technical and non-technical users.

---

## ⚙️ Installation

### Step 1: Clone the Project

```bash
git clone https://github.com/your-username/Law-Blog-Website.git
cd Law-Blog-Website

Step 2: Install PHP Dependencies

composer install
Step 3: Install Frontend Dependencies

npm install
npm run dev
Step 4: Setup Environment File
cp .env.example .env
php artisan key:generate
Step 5: Configure Database
In .env file:
DB_DATABASE=your_db
DB_USERNAME=root
DB_PASSWORD=your_password
Then run:
php artisan migrate
Step 6: Start Development Server
Run : 
php artisan serve
Visit: http://localhost:8000

🧪 Testing
1. Unit Testing
Used Laravel’s built-in php artisan test command to test individual controllers and models.
Run : 
php artisan test
2. Integration Testing
Tested how models and views interact, ensuring smooth data flow.

3. UI Testing
Tested responsiveness using DevTools and checked on different browsers.

Tested Pages:

Home Page

Single Tutorial Page

Contact Form (email working)

Admin Blog Creation (image + YouTube link upload)

About Page

🧾 Code Description
routes/web.php — defines URL routes

app/Http/Controllers/ — contains logic for:

Displaying tutorials

Handling contact form

Admin CRUD operations

resources/views/ — Blade files for:

home.blade.php

tutorials.blade.php

single_tutorial.blade.php

contact.blade.php

admin/dashboard.blade.php

app/Models/Tutorial.php — defines relationships and schema

app/Mail/ContactFormMail.php — handles sending emails

🔐 Admin Dashboard
URL: http://localhost:8000/admin

Secure login required

Admin can:

Add tutorials

Upload images

Paste YouTube links

Add tutorial description

🖼️ Screenshots
📸 Replace with your actual images in the /images folder

Home Page

Admin Dashboard

Add Tutorial

Tutorial Page

🚀 Deployment
Set APP_ENV=production in .env

Run:
php artisan config:cache
php artisan route:cache
php artisan view:cache
Setup web server (Apache/Nginx)

Ensure file permissions are set for storage and bootstrap/cache

🧠 License
This project is licensed under the MIT License.

✉️ Contact
For any issues, feel free to contact the developer or open an issue in the GitHub repository.

---

✅ **To use this:**

1. Save this content as `README.md` at the root of your Laravel project.
2. Create a folder named `images` and add your screenshots (like `homepage.png`, `admin-dashboard.png`, etc.).
3. You can preview it on GitHub or Markdown viewers.
