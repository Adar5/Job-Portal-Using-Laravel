# Job Portal - Laravel Project

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)

A complete job portal website built with Laravel featuring user authentication, job postings management, and advanced filtering capabilities.

## ✨ Features

### Core Functionality
- **User Authentication System**
  - Registration and login
  - Password protection
  - Role-based redirection

- **Job Management**
  - Create, read, update, delete job listings
  - Rich text job descriptions
  - Salary and location details

- **Advanced Filters**
  - Filter by employment type (Full-time/Part-time/Internship)
  - Location-based search
  - Salary range indicators

### Security
- CSRF protection
- Form validation
- Authorization middleware
- SQL injection prevention

## 🛠️ Installation

### Prerequisites
- PHP ≥ 8.1
- Composer
- Node.js ≥ 16
- MySQL/MariaDB

### Setup Instructions

1. **Clone the repository**
   ```bash
   git clone https://github.com/Adar5/Job-Portal-Using-Laravel.git
   cd Job-Portal-Using-Laravel


# Install dependencies
composer install
npm install

# Configure environment
cp .env.example .env

# Edit .env with your database credentials:
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

# Generate application key
php artisan key:generate

# Run migrations and seed data
php artisan migrate --seed

# Compile assets
npm run dev

# Start the development server
php artisan serve





