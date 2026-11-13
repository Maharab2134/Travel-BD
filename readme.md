# ✈️ Travel & Tour - Booking & Hospitality Management System

[![Laravel Version](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP Version](https://img.shields.io/badge/PHP-8.2%20%7C%208.4-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![Livewire](https://img.shields.io/badge/Livewire-3.x-FB70A9?style=for-the-badge&logo=livewire&logoColor=white)](https://livewire.laravel.com)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg?style=for-the-badge)](https://opensource.org/licenses/MIT)
[![Maintained by Maharab Hosen](https://img.shields.io/badge/Maintained%20by-Maharab%20Hosen-blue?style=for-the-badge&logo=github)](https://github.com/Maharab2134)

**Travel & Tour** is a full-featured, enterprise-grade Travel, Tour Operator, and Marketplace Booking System powered by **Laravel 12** and **Livewire 3**. Built with a secure, decoupled shared-hosting architecture (`public_html` + `bc-cms`), it delivers high performance, responsiveness across all devices, and an intuitive experience for travelers, vendors, and administrators.

---

## 🌐 Live Demo & Project URL
- **Developer Profile:** [Maharab Hosen (@Maharab2134)](https://github.com/Maharab2134)

---

## 🌟 Key Highlights & Core Features

### 🛎️ 1. Multi-Service Booking Modules
- **Tours:** Full tour package booking, custom itineraries, time-slot scheduling, tiered passenger pricing.
- **Hotels & Rooms:** Room types, availability calendars, check-in/check-out policies, extra services, and amenities.
- **Spaces (Villas & Apartments):** Short & long-term rentals, room BnB, cleaning fees, calendar syncing via iCal.
- **Car Rentals:** Fleet management, pickup and drop-off location selection, driver options, vehicle specs.
- **Events & Ticketing:** Event booking with automated **QR Code** generation for contactless check-in.
- **Flights & Boats:** Flight listings, schedule search, boat and yacht charters.
- **Visa Services:** Visa application submission, tracking, and consultation workflows.

### 🏢 2. Multi-Vendor Marketplace & Agency System
- Vendor/Agent self-registration and KYC verification.
- Dedicated Vendor Dashboard for listing management, booking status, earnings, and payout requests.
- Flexible commission structures (percentage or fixed rates per vendor).

### 🚀 3. Pro & Advanced Modules
- **AI Integration:** AI-powered assistance for content generation and management.
- **Digital Wallet:** In-app wallet system for user credits, refunds, and seamless payments.
- **QR Code Verification:** Dynamic QR ticketing for events and check-ins.
- **Customer Support Center:** Integrated ticketing and support inquiry system.
- **Real-time Chat:** Direct communication between travelers, vendors, and admins powered by Chatify & Pusher.

### 💳 4. Global Payment Gateways
- **Stripe Checkout**
- **PayPal Express & PayPal Pro**
- **Flutterwave**
- **Paystack**
- **TwoCheckout**
- **Razorpay**
- **Offline / Bank Transfer**
- Multi-currency conversion with automatic rate updates.

### 🌍 5. Localization & Media Management
- **i18n & l10n:** Multi-language support with RTL capabilities and easy translation management.
- **Cloud Storage Ready:** Seamless media upload and synchronization with **Amazon AWS S3** and **Google Cloud Storage**.
- **SEO & Marketing:** Built-in SEO meta tag manager, sitemaps, coupon codes, and review/rating systems.

---

## 🏗️ Project Architecture

The project employs an optimized, secure split-directory structure designed for seamless deployment on both VPS and cPanel/shared hosting:

```text
Travel/
├── public_html/              # Web document root (served publicly)
│   ├── index.php             # Application bootstrap pointing to ../bc-cms
│   ├── css/, js/, dist/      # Compiled assets & vendor scripts
│   ├── themes/               # Theme assets (Base, BC, Admin)
│   └── uploads/              # Public media uploads directory
├── bc-cms/                   # Core Laravel application (kept outside public root)
│   ├── app/                  # Application core
│   ├── modules/              # Modular architecture (Tour, Hotel, Booking, User, etc.)
│   ├── pro/                  # Pro modules (Ai, Support, Booking, Wallet)
│   ├── packages/             # Custom path packages (bc/installer, bc/qrcode, etc.)
│   ├── themes/               # Livewire 3 blade themes
│   ├── routes/               # Modular route definitions
│   └── .env                  # Environment configuration
├── changelog.md              # Version history (v4.0 upgrades)
└── readme.md                 # Project documentation
```

---

## ⚙️ System Requirements

- **PHP:** >= 8.2 (fully tested with PHP 8.4)
- **Database:** MySQL >= 8.0 or MariaDB >= 10.3
- **Composer:** >= 2.0
- **Required PHP Extensions:**
  - `BCMath`, `Ctype`, `cURL`, `DOM`, `Fileinfo`, `GD` / `Imagick`
  - `JSON`, `Mbstring`, `OpenSSL`, `PDO`, `PDO_MYSQL`, `Tokenizer`, `XML`, `Zip`

---

## 🚀 Getting Started & Installation

### 1. Clone the Repository
```bash
git clone https://github.com/Maharab2134/Travel.git
cd Travel
```

### 2. Configure Environment Variables
Copy the example `.env` file inside `bc-cms/` and adjust your credentials:
```bash
cd bc-cms
cp .env.example .env
```
Update your database, app URL, and mail settings in `.env`:
```env
APP_NAME="Travel & Tour"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://travel.maharab.com.bd

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

### 3. Install Dependencies
```bash
composer install --optimize-autoloader --no-dev
```

### 4. Database Setup
Generate application key and import your database schema:
```bash
php artisan key:generate
php artisan migrate --force
```
*(If importing from an existing database dump, import your `.sql` file using phpMyAdmin or MySQL CLI).*

### 5. Storage Symlink & Permissions
Ensure proper permissions for uploads and storage cache:
```bash
chmod -R 775 storage bootstrap/cache ../public_html/uploads
php artisan storage:link
```

### 6. Local Development Server
To run locally, point the document root to `public_html`:
```bash
# From the project root
php -S localhost:8000 -t public_html

# Or from inside bc-cms using the custom serve script
./serve --bc
```

---

## 👤 Author & Maintainer

**Maharab Hosen**  
- **GitHub:** [@Maharab2134](https://github.com/Maharab2134)  
- **Email:** [maharabhosen365@gmail.com](mailto:maharabhosen365@gmail.com)  
- **Portfolio / Live Site:** [https://travel.maharab.com.bd](https://travel.maharab.com.bd)  

---

## 📄 License

This project is licensed under the [MIT License](LICENSE).
