Here's a **README** for your PHP-based user authentication system:  

---

# **User Authentication System (Login & Registration)**  

## **Overview**  
This project is a **PHP-based user authentication system** with login, registration, and a user dashboard. It provides secure user management with a **MySQL database** to store user credentials.  

## **Features**  
✅ **User Registration:** Allows new users to create an account.  
✅ **Secure Login:** Users can log in with their credentials.  
✅ **Dashboard Access:** Logged-in users are redirected to a secure dashboard.  
✅ **Session Management:** Ensures only authenticated users can access protected pages.  
✅ **Database Integration:** Stores user details in a MySQL database.  

## **Technologies Used**  
- **Front-end:** HTML, CSS  
- **Back-end:** PHP, MySQL  
- **Database Management:** phpMyAdmin  

## **Installation**  
### **1. Clone the Repository**  
```bash
git clone https://github.com/your-username/authentication-system.git
cd authentication-system
```
### **2. Set Up the Database**  
- Create a database in MySQL (e.g., `user_db`).  
- Import the `database.sql` file (if provided) or create a `users` table manually:  
```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);
```
- Update **connect.php** with your database credentials.  

### **3. Start the Project**  
Place the project files in the **htdocs** folder (if using XAMPP).  
Start **Apache** and **MySQL** in XAMPP.  
Open the browser and go to:  
```
http://localhost/authentication-system/
```

## **Usage**  
1. **Register a new user** via `register.php`.  
2. **Log in** using `login.php`.  
3. After successful login, you’ll be redirected to `dashboard.php`.  
4. **Logout** to end the session.  

OUTPUT :
login page 
![image](https://github.com/user-attachments/assets/f0fe5bcd-2f5b-46dd-baad-05b6f10dd175)

register page :
![image](https://github.com/user-attachments/assets/f2e10f23-df35-413d-b09c-f128bcd6c094)

backend :
![image](https://github.com/user-attachments/assets/efaa8736-0c49-444b-ae49-42f3d58b6969)

backend management :
![image](https://github.com/user-attachments/assets/733a4f33-f124-4c67-afa4-128a011a1d96)





