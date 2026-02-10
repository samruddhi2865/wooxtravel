# 🧳 WooxTravel – Travel Agency Web Application

A Laravel-based Travel Agency Management System to showcase destinations, tour packages, and travel services. Built for academic and learning purposes using Laravel's MVC architecture.

## 🚀 Features
- 🌍 Display travel destinations and tour packages
- 🧾 Manage content via routes and Blade views
- 🎨 Responsive UI with Bootstrap
- 🗂️ Clean Laravel MVC structure
- ⚙️ Environment-based configuration (.env)
- 🧪 PHPUnit testing support

## 🛠️ Tech Stack
| Category     | Technologies                  |
|--------------|-------------------------------|
| **Backend**  | PHP, Laravel                 |
| **Frontend** | Blade, HTML, CSS, Bootstrap  |
| **Database** | MySQL                        |
| **Tools**    | Composer, NPM, PHPUnit       |

## 📂 Project Structure
```
wooxtravel/
├── app/               # Controllers, Models
├── bootstrap/         # Laravel bootstrap
├── config/            # Configuration
├── database/          # Migrations, seeders
├── public/            # Assets (CSS, JS, images)
├── resources/         # Blade views, frontend assets
├── routes/            # Web routes
├── storage/           # Logs, cache, uploads
├── tests/             # Unit/feature tests
├── .env.example       # Environment template
├── artisan            # CLI tool
├── composer.json      # PHP dependencies
├── package.json       # Frontend dependencies
└── README.md          # Documentation
```

## ⚙️ Setup Instructions

### Prerequisites
- PHP 8.x
- Composer
- MySQL
- Node.js & NPM
- XAMPP/WAMP/Laragon

### Installation
```bash
# Clone repository
git clone https://github.com/samruddhi2865/wooxtravel.git
cd wooxtravel

# Install dependencies
composer install
npm install

# Setup environment
cp .env.example .env
php artisan key:generate

# Configure database in .env
php artisan migrate

# Start server
php artisan serve
```

**Visit:** `http://localhost:8000`

## 🎯 Objectives
- Master Laravel MVC architecture
- Implement routing, controllers, and views
- Build real-world project structure
- Create domain-specific application

## 🔮 Future Enhancements
- Online booking system
- Admin panel
- User authentication & roles
- Payment gateway
- Reviews & ratings
