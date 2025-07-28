-- Unoptimized schema (no indexes, inefficient structure)
CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    description TEXT,
    status ENUM('pending', 'in_progress', 'completed'),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    user_id INT
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255)
);

-- Insert sample data (for testing)
INSERT INTO users (name, email) VALUES 
('John Doe', 'john@example.com'),
('Jane Smith', 'jane@example.com');

INSERT INTO tasks (title, description, status, user_id) VALUES
('Fix login page', 'The login button is not working', 'pending', 1),
('Update docs', 'Document the new API endpoints', 'in_progress', 2),
('Optimize queries', 'Application is slow', 'pending', 1);