-- Insert users (admin and customers)
INSERT INTO users (username, email, password, role, first_name, last_name) VALUES
('admin', 'admin@example.com', '$2y$10$exampleHashedPasswordStringHere', 'admin', 'Admin', 'User'),
('ali', 'ali@example.com', '$2y$10$exampleHashedPasswordStringHere', 'customer', 'Ali', 'Amin'),
('ahlam', 'ahlam@example.com', '$2y$10$exampleHashedPasswordStringHere', 'customer', 'Ahlam', 'Ahmad'),
('attar', 'attar@example.com', '$2y$10$exampleHashedPasswordStringHere', 'customer', 'Attar', 'Islam'),
('aminh', 'aminh@example.com', '$2y$10$exampleHashedPasswordStringHere', 'customer', 'Amin', 'Al Hakim'),
('aminm', 'aminm@example.com', '$2y$10$exampleHashedPasswordStringHere', 'customer', 'Amin', 'Morocco');

-- Insert categories
INSERT INTO categories (name, description) VALUES
('Electronics', 'Gadgets, devices, and accessories'),
('Books', 'All kinds of books and magazines'),
('Clothing', 'Men and women clothing');

-- Insert products
INSERT INTO products (category_id, name, description, price, image) VALUES
(1, 'Wireless Mouse', 'Ergonomic wireless mouse with USB receiver', 25.99, 'wireless-mouse.jpg'),
(1, 'Bluetooth Headphones', 'Over-ear headphones with noise cancellation', 89.50, 'bluetooth-headphones.jpg'),
(2, 'PHP Programming Book', 'Learn PHP with this comprehensive guide', 39.99, 'php-book.jpg'),
(3, 'Men\'s T-Shirt', '100% cotton, various sizes', 15.00, 'mens-tshirt.jpg');

-- Insert orders (assuming IDs in order as inserted)
INSERT INTO orders (user_id, customer_name, customer_email, total_amount, status) VALUES
(2, 'Ali Amin', 'ali@example.com', 65.49, 'completed'),
(3, 'Ahlam Ahmad', 'ahlam@example.com', 89.50, 'pending'),
(4, 'Attar Islam', 'attar@example.com', 40.00, 'processing'),
(5, 'Amin Al Hakim', 'aminh@example.com', 120.00, 'completed'),
(6, 'Amin Morocco', 'aminm@example.com', 45.00, 'pending');

-- Insert order items
INSERT INTO order_items (order_id, product_id, quantity, price) VALUES
(1, 1, 1, 25.99), -- Ali
(1, 3, 1, 39.50),
(2, 2, 1, 89.50), -- Ahlam
(3, 4, 2, 15.00), -- Attar
(4, 1, 2, 25.99), -- Amin Al Hakim
(4, 2, 1, 89.50),
(5, 3, 1, 39.99); -- Amin Morocco


