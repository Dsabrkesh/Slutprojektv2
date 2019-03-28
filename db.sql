-- PRODUCT TABLE 
CREATE TABLE product(
	id int(8) PRIMARY KEY AUTO_INCREMENT,
	productname varchar(32),
	price varchar(32),
	size varchar(32)
)

INSERT INTO `product` (`id`, `productname`, `price`, `size`) VALUES (NULL, 'MazeClan2019 TShirt', '30$', 'XL'), (NULL, 'MazeClan2019 TShirt', '25$', 'XXL');
