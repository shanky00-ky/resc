DROP TABLE IF EXISTS m16_gearpage;
CREATE TABLE m16_gearpage(
	m16_id INT PRIMARY KEY AUTO_INCREMENT,
	m16_name VARCHAR(255),
	m16_Category VARCHAR(255),
	m16_price VARCHAR(255),
	m16_Availability VARCHAR(255),
	m16_status BOOLEAN 
	);