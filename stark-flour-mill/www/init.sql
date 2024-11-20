-- Create the database
CREATE DATABASE IF NOT EXISTS accounting;

-- Use the newly created database
USE accounting;

-- Create a table for stock management
CREATE TABLE stock (
    id INT AUTO_INCREMENT PRIMARY KEY,
    weight VARCHAR(10) NOT NULL, -- e.g., 5kg, 10kg, 50kg
    quantity INT NOT NULL,
    price DECIMAL(10, 2) NOT NULL, -- Price per unit
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create a table for sales records
CREATE TABLE sales (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(255) NOT NULL, -- Name of the customer
    weight VARCHAR(10) NOT NULL, -- Weight of the stock sold
    quantity INT NOT NULL, -- Quantity sold
    total_price DECIMAL(10, 2) NOT NULL, -- Total price for the sale
    payment_status ENUM('Paid', 'Pending') NOT NULL, -- Payment status
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Sample data for testing
INSERT INTO stock (weight, quantity, price) VALUES 
('5kg', 100, 50.00),
('10kg', 50, 90.00),
('50kg', 10, 400.00);

INSERT INTO sales (customer_name, weight, quantity, total_price, payment_status) VALUES 
('John Doe', '5kg', 10, 500.00, 'Paid'),
('Jane Smith', '10kg', 5, 450.00, 'Pending');
