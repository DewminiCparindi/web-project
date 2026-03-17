# Green_NFlora Project Database

This project database is designed for the Green_NFlora website. It contains all necessary data for admin management, products, orders, and messages from the contact form.


# Database Files
1. green_nflora.sql
   - Contains the main tables:  
     - admins - Stores admin login details  
     - products - Stores all product details  
     - orders - Stores customer order details  

2. messages.sql
   - Contains the 'Customer messages' table:  
     - Stores messages submitted through the Contact Us form  
     - Fields: 'fullname', 'email', 'phone', 'message', 'created_at'  


# Admin Login
   - username : admin
   - password : admin123

# Import Instructions
1. Open phpMyAdmin.  
2. Create a new database (e.g., green_nflora).  
3. Import 'green_nflora.sql' first.  
4. Import 'messages.sql' second.  
5. After importing both files, all tables will be available for use in the website.


**NOTE: We have two SQL files to maintain clarity and organization. The first file includes admins, products, and orders. The second file includes contact form messages. Importing both files into the same database ensures the admin panel can access all necessary data seamlessly**
