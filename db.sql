
CREATE TABLE accounts(
    id int(8) PRIMARY KEY AUTO_INCREMENT,
    name varchar(32),
    lastname varchar(32),
    address varchar(365),
    email varchar(32),
    password varchar(32)
);

CREATE TABLE customer(
    id int(8) PRIMARY KEY AUTO_INCREMENT,
    name varchar(32),
    address varchar(128)
);

CREATE TABLE orders (
    id int(8) PRIMARY KEY AUTO_INCREMENT,
    customer_id int(8),
    created varchar(64),
    shipped varchar(64),
    FOREIGN KEY (customer_id) REFERENCES customer(id)
);

CREATE TABLE order_details (
    order_id int(8) PRIMARY KEY AUTO_INCREMENT,
    product_id int(8),
    quantity int(8),
    FOREIGN KEY (order_id) REFERENCES orders(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

CREATE TABLE products (
    id int(8) PRIMARY KEY AUTO_INCREMENT,
    productname varchar(32),
    price varchar(32),
    productimage varchar(128)
);


INSERT INTO `products` (`id`, `productname`, `price`, `productimage`) VALUES (NULL, 'MazeClan2019 Black Hoodie', '50$', 'images/products/shirt1.png');
INSERT INTO `products` (`id`, `productname`, `price`, `productimage`) VALUES (NULL, 'MazeClan2019 TShirt', '30$', 'images/products/tshirt1.png'), (NULL, 'MaZeClan Red Hoodie', '50$', 'images/products/shirt.png');