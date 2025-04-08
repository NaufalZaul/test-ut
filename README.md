CREATE TABLE m_product (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100)
);

CREATE TABLE m_sales (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100)
);

CREATE TABLE m_lead (
id_lead INT AUTO_INCREMENT PRIMARY KEY,
update_date DATE,
id_sales INT,
id_product INT,
phone VARCHAR(20),
lead_name VARCHAR(100),
city VARCHAR(100),
id_user VARCHAR(50),
FOREIGN KEY (id_sales) REFERENCES m_sales(id),
FOREIGN KEY (id_product) REFERENCES m_product(id)
);

INSERT INTO m_product (id, name) VALUES
(1, 'Cipta Residence 2'),
(2, 'The Rich'),
(3, 'Namorambe City'),
(4, 'Grand Banten'),
(5, 'Turi Mansion'),
(6, 'Cipta Residence 1');

INSERT INTO m_sales (id, name) VALUES
(1, 'sales 1'),
(2, 'sales 2'),
(3, 'sales 3');
