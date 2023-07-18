# README
This is an internal application that provides user management functionalities such as registration, password reset, profile editing, and user administration. 

## Stack
- Laravel
- PostgreSQL
- S3 MinIO 
- Maildev
- Redis
- Docker
- Nginx

## Packages Used
The project utilizes several Laravel packages to enhance its functionality. Here are the key packages used:

- Spatie Permissions
- Spatie Media Library
- Laravel Breeze

These packages, along with other Laravel components, work together to provide a robust user management system with role-based access control, media file management, and session handling.

## Getting Started

1. Build and start the Docker containers
```
docker-compose up -d
```
2. Run the database migrations and seed the database
```
php artisan migrate --seed
```

## Usage
> You can access the application by visiting http://localhost in your web browser.

## Code Style Testing
To test the code style of the project, you can use the following command:
```
./vendor/bin/pint --test
```
This command runs the code style checks using the Laravel coding standards. Make sure the checks pass before committing your changes.

## Project Overview
### User Registration
Click on the "Register" link on the login page.
Fill in the required details, including email, password, and password confirmation.
Click the "Register" button to create a new user account.
### Password Reset
Click on the "Forgot your password?" link on the login page.
Enter the email address associated with your account.
An email will be sent to the provided email address with instructions on how to reset your password.
Follow the instructions in the email to reset your password.
### Email Verification
After registering, an email will be sent to the provided email address with a verification link.
Click on the verification link to confirm your email address.
### Profile Editing
Log in to the application using your credentials.
Click on the "Profile" link in the navigation menu.
Edit the desired fields, including first name, last name, and avatar.
Click the "Save Changes" button to update your profile.
### User Administration (Admin only)
Log in to the application as an administrator.
Click on the "Admin" link in the navigation menu.
Here, you can view the list of all users and perform actions such as deleting users or promoting users to administrators.

## Used Packages 

- laravel/breeze
- spatie/laravel-permission
- spatie/laravel-medialibrary
