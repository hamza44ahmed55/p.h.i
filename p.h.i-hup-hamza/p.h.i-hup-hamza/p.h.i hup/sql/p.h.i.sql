CREATE DATABASE IF NOT EXISTS hamza;
USE hamza;
CREATE TABLE IF NOT EXISTS Users (
    UserID INT AUTO_INCREMENT PRIMARY KEY,
    Username VARCHAR(50) NOT NULL,
    Email VARCHAR(100) NOT NULL,
    Password VARCHAR(100) NOT NUL
);
INSERT INTO Users (Username, Email, Password)
VALUES ('p.h.i hup', 'hamzaahmedhamed321@gmail.com
', '011111434H');
SELECT * FROM Users;