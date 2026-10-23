
Laravel-13-Blade-TailAdmin-StarterKit

# Laravel-13-Blade-TailAdmin-StarterKit
A robust, production-ready starter kit featuring Laravel 13 & Blade styled with the TailAdmin dashboard template. This kit includes a pre-configured Role-Based Access Control (RBAC) system to jumpstart your application development.

# 🚀 Features
+ **Core:** Laravel 13.

+ **Frontend:** Blade.

+ **Styling:** TailAdmin  (TailAdmin based dashboard).

+ # RBAC (Role-Based Access Control):

    + **Admin:** Full access to the management suite.

    + **User:** Standard access to personal dashboard features.

+ # Authentication Suite:

    + Secure Login & Registration.

    + Robust "Forgot Password" workflow.

+ # User Settings:

    + Profile information management.

    + Secure Password change functionality.

# 🛠️ Installation
Follow these steps to get your local development environment active.

# 1. Clone the repository

git clone https://github.com/gauravsharmass/Laravel-13-Blade-TailAdmin-StarterKit.git

cd Laravel-13-Blade-TailAdmin-StarterKit

# 2. Install Dependencies
   # Install PHP dependencies
composer install

   #Install Frontend dependencies
npm install

# 3. Environment Setup
   cp .env.example .env
   
php artisan key:generate

# Note: Update your .env file with your database credentials.

# 4. Database & Seeding
This project includes seeders to set up your RBAC roles and initial users.

php artisan migrate

php artisan db:seed --class=RoleSeeder

# Start the server
php artisan serve

# 5. Run the tests
   php artisan test

# 🔑 Default Credentials
Once seeded, you can log in with the following accounts:

| Role | Email | Password |
| -------- | -------- | -------- |
| Admin | admin@example.com  | password  |
# Note: User account can be created using register page
# Note: Don't forget to run php artisan boost:install to install boost

# 📁 Project Structure
+ resources: Contains Blade pages organized by role.

+ app/Http/Middleware: Contains the RBAC logic to redirect users based on roles.

+ routes/web.php: Defined routes for Authentication and Dashboard access.

# 🛠️ Tech Stack
**Backend:** Laravel 13

**Frontend:** Blade

**UI Template:** TailAdmin

**CSS:** Bootstrap CSS

# 📄 License
The MIT License (MIT).
