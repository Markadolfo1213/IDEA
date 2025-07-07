# Deployment Guide for Final Project G5

## 1. Get Hosting Account

1. Go to https://www.infinityfree.net/
2. Click "Sign Up"
3. Create an account with:
   - Username: Choose a unique username
   - Password: Your preferred password
   - Email: Your email address
4. Complete the registration process

## 2. After Registration

1. You'll receive an email with your hosting details
2. Log in to your InfinityFree control panel
3. You'll see your:
   - FTP credentials
   - Database credentials
   - cPanel URL

## 3. Upload Files

1. Download FileZilla (FTP client) from: https://filezilla-project.org/
2. Open FileZilla
3. Connect using your FTP credentials:
   - Host: ftp.infinityfree.net
   - Username: Your username
   - Password: Your password
   - Port: 21
4. Upload all files from your project to the public_html folder

## 4. Database Setup

1. Go to your cPanel
2. Click on "phpMyAdmin"
3. Create a new database
4. Import your database schema
5. Update your conn.php file with the database credentials

## 5. Access Your Website

Your website will be accessible at: http://username.infinityfree.net

## Troubleshooting

1. If you encounter any database connection issues:
   - Check your database credentials
   - Ensure your database is properly imported
   - Verify your conn.php file has the correct settings

2. If you can't access your website:
   - Check if all files are uploaded correctly
   - Verify index.php exists in the root directory
   - Make sure all folders have the correct permissions
