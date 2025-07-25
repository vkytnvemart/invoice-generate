# Laravel Invoice Generator

This project is a simple invoice generator built with Laravel, demonstrating:
- Form validation
- Custom service (calculation logic)
- Events & Listeners
- Queue & Mail sending
- Blade UI and email design

## 📦 Requirements
- PHP 8.x
- Laravel 10+
- MySQL
- Composer
- Node.js (if using Tailwind)
- Mailtrap / Gmail for SMTP testing

## ⚙️ Setup Steps

```bash
git clone https://github.com/vkytnvemart/invoice-generate.git
cd invoice-generator
composer install
cp .env.example .env
php artisan key:generate
composer require laravel/ui
php artisan ui bootstrap --auth 
npm install
npm run dev
php artisan migrate
php artisan db:seed
php artisan queue:work
php artisan config:clear
php artisan cache:clear
