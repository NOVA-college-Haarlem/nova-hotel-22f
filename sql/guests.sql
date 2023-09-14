-- Create a table for hotel guests
CREATE TABLE guests (
    guest_id INT PRIMARY KEY AUTO_INCREMENT,
    forename VARCHAR(200) NOT NULL,
    lastname VARCHAR(200) NOT NULL,
    email VARCHAR(200) NOT NULL,
    password VARCHAR(200) NOT NULL,
    dob DATE NOT NULL
    
);

INSERT INTO guests (forename, lastname, email, password, dob)
VALUES
    ('Gast 1', 'Gast 1', "gast@gast1.com", 'password', '2000-01-01'),
    ('Gast 2', 'Gast 2', "gast@gast2.com", 'password', '2005-10-05'),
    ('Gast 3', 'Gast 3', "gast@gast3.com", 'password', '2004-06-04');