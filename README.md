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
git clone https://github.com/your-username/laravel-tutorial-blog.git
cd laravel-tutorial-blog
