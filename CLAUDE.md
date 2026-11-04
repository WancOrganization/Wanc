# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Wanc is a Laravel 13 full-stack web application with an admin dashboard for managing testimonials/feedback and contact form submissions. It uses Laravel Jetstream for authentication with Livewire 3, and Tailwind CSS for styling.

## Development Commands

```bash
# Install dependencies
composer install
npm install

# Start development server
php artisan serve

# Build frontend assets (Vite)
npm run dev          # Development server with HMR
npm run build        # Production build

# Database
php artisan migrate              # Run migrations
php artisan migrate:fresh        # Drop all tables and re-run migrations

# Run tests
php artisan test                          # All tests
php artisan test --filter=FeedbackTest    # Single test class
php artisan test tests/Feature            # Feature tests only

# Code formatting
./vendor/bin/pint                # Run Laravel Pint

# Artisan helpers
php artisan tinker    # Interactive PHP shell
```

## Architecture

**MVC Pattern with Laravel conventions:**
- Controllers in `app/Http/Controllers/` handle HTTP requests
- Models in `app/Models/` (User, Feedback, GetInTouch) use Eloquent ORM
- Views in `resources/views/` use Blade templating

**Key Controllers:**
- `MainController` - Public homepage and form submissions
- `AdminController` - Admin dashboard
- `FeedbackController` & `GetInTouchController` - CRUD for admin resources

**Authentication:**
- Laravel Jetstream with Livewire 3
- Sanctum for API token authentication
- Session-based auth stored in database

**Routes:**
- Public: `/` (homepage), `POST /get-in-touch`, `POST /feedback`
- Admin: `/admin/dashboard`, `/admin/get-in-touch/*`, `/admin/feedback/*` (all require auth)

## Tech Stack

- PHP 8.5+, Laravel 13, MySQL
- Laravel Jetstream + Livewire 3 + Sanctum
- Tailwind CSS 3
- Vite, PHPUnit 11

## Code Style

Laravel Pint is configured for code formatting. EditorConfig enforces 4-space indentation, LF line endings, and UTF-8 encoding.
