it is connected with the database so your inputed data will go inside that database Create a data base name reg_db
or by using xampp use this sql query
"CREATE DATABASE reg_db"
and again for the field use this query

"CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone VARCHAR(15),
    gender ENUM('male', 'female'),
    city VARCHAR(50)
);"
