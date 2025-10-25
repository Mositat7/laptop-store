# 🌟 Digi Star

A modern, feature-rich e-commerce platform built with **Laravel** using the **MVC architecture**.  
Developed by **Mostafa**, a passionate backend developer, Digi Star delivers a seamless online shopping experience for tech products—especially laptops, smartphones, and accessories.

---

## ✨ Features

### 🛍️ Shopping Experience
- **Homepage slider** for promotions and featured items  
- **Real-time product search** in the header  
- **Advanced filtering** by price, brand, color, and availability  
- **Product detail page** with:
  - Specifications & full description  
  - Available colors and stock status  
  - Customer ratings and review count  
  - Related & recommended products  

### 👤 User Features
- Secure **user authentication & profile management**  
- **Wishlist** to save favorite products  
- **Shopping cart** with live updates  
- **Product reviews & comments**  

### 📰 Content & Engagement
- **Blog section** with articles and news  
- **Social sharing** and **like** functionality on posts  
- Dedicated **"About Us"** page  
- Category-based **blog filtering**

### 🎨 Design & UX
- Fully responsive & mobile-friendly  
- Clean, intuitive interface  
- Optimized for fast navigation and performance  

---

## 🛠️ Tech Stack
- **Backend**: Laravel (PHP)  
- **Architecture**: MVC  
- **Frontend**: Blade,Html,Css,Js 
- **Database**: MySQL  
- **Local Dev**: XAMPP / `php artisan serve`

---

## 💡 Purpose
Digi Star is designed as a scalable foundation for digital retail—ideal for startups, learning projects, or real-world deployment in the electronics market.

---
## 🛣️ Future Roadmap

Digi Star is a living project with significant growth potential. Upcoming enhancements include:
- ✅ **Admin dashboard** for product & order management  
- ✅ **Payment gateway integration** (e.g., Stripe, ZarinPal)  
- ✅ **User order history & tracking**  
- ✅ **Advanced search with filters** (RAM, storage, CPU, etc.)  
- ✅ **Email notifications** (order confirmation, shipping updates)  
- ✅ **API layer** for mobile app or PWA support  
- ✅ **SEO optimization** and meta tags management  
- ✅ **Multi-language support** (Persian/English)

Contributions and suggestions are welcome as the platform evolves!

---

## 🚀 Getting Started (Local Setup)

Follow these steps to run **Digi Star** on your local machine:

### Prerequisites
- PHP 8.1+  
- Composer  
- MySQL (via XAMPP, Laragon, or native)  
- Node.js & npm (optional, for asset compilation)

### Installation
1. **Clone the repository**
   ```bash
   git clone https://github.com/Mositat7/laptop-store.git
   cd laptop-store/laravel
   composer install
### Run migrations and seeders
1. **run
   ```bash
   php artisan migrate --seed
   ### Run
1. **Start the server
   ```bash
   php artisan serve
2.**Set up environment**
```bash
    cp .env.example .env
    php artisan key:generate
3.cp .env.example .env
php artisan key:generate
4. **Configure your database in**
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laptop-store
DB_USERNAME=root
DB_PASSWORD=

> 🔧 **Under active development**  
> 🚀 Built with ❤️ by [Mostafa](https://github.com/Mositat7)
