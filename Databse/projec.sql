CREATE DATABASE nongsan;
USE nongsan;

CREATE TABLE IF NOT EXISTS categories (
	  id INT(10) NOT NULL auto_increment,
	  name_cate VARCHAR(255) NOT NULL,
      parent_id int,
      status tinyint,
      PRIMARY KEY(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT INTO categories(name_cate,parent_id)
	VALUES('RAU CU',null),
		  ('DO UONG',null),
          ('THUC PHAM AN LIEN', null),
          ('TRAI CAY',null),
          ('rau xanh', 1),
          ('rau an toan', 1),
          ('ca tuoi', 3),
          ('thit dong hop', 3);
          
          
          
CREATE TABLE IF NOT EXISTS promotion(
id INT(11) NOT NULL auto_increment primary key,
name VARCHAR(255) NOT NULL,
percent_promotion Float
);
CREATE TABLE IF NOT EXISTS contacts(
	id INT(11) NOT NULL auto_increment primary key,
    named VARCHAR (250),
    phone VARCHAR(255),
    email VARCHAR(255),
    Question TEXT(500)
);

drop table contacts;

CREATE TABLE IF NOT EXISTS comments(
id  INT(11) NOT NULL auto_increment primary key,
id_user INT(11) NOT NULL,
content VARCHAR(255),
id_product INT(11));
CREATE TABLE IF NOT EXISTS store_system(
id INT(11) NOT NULL auto_increment primary key,
name VARCHAR(255),
address VARCHAR(255),
phone VARCHAR(255)
);



CREATE TABLE IF NOT EXISTS products(
	id INT(11) NOT NULL auto_increment,
	code_product VARCHAR(255) NOT NULL,
	name_product VARCHAR(255) NOT NULL,
    information TEXT(1000),
	quantity INT(255),
	link TEXT(1000) NOT NULL,
	price float,
	description TEXT,
    Evaluate INT,
	id_promotion int,
	created DATE NOT NULL,
	category_id INT(11),
    status tinyint,
	PRIMARY KEY (id),
	FOREIGN KEY (category_id) REFERENCES categories(id)
    
)  ENGINE=InnoDB DEFAULT CHARSET=utf8;




INSERT INTO products (code_product,name_product,link,price,created,category_id)
	VALUES ('MS1','rau muong','../image/sp1.jpg',30000,'2016-02-18',1),
			('MS5','hen','../image/sp1.jpg',20000,'2016-07-18',3),
			('MS2','rau lang','../image/sp2.jpg',10000,'2016-06-16',3),
			('MS3','rau que','../image/sp2.jpg',4000,'2016-03-18',5),
			('MS4','rau thom','../image/sp1.jpg',30000,'2016-03-12',4);
			
	SELECT name_product, link,price
						FROM products 
						limit 7;
                        
                        SELECT name_product, link,price
						FROM products 
                        ORDER BY price ASC
                        LIMIT 7;
                        
                        SELECT name_product, link,price
						FROM products 
                        ORDER BY price ASC
                        LIMIT 7;
                        


SELECT orders_detail.product_id, products.name_product,products.price,images.link, SUM(quantity) AS a 
   				FROM orders_detail, images, products
    			WHERE orders_detail.product_id = products.id
   				GROUP BY orders_detail.product_id
   				ORDER BY a DESC
   				limit 4;


CREATE TABLE IF NOT EXISTS distributor (
	id INT(11) NOT NUll auto_increment ,
	name_dis VARCHAR(134) not null,
	PRIMARY KEY (id),
    image varchar(233),
    status tinyint,
	id_products INT(10) NULL,    
	FOREIGN KEY (id_products) REFERENCES products(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*
INSERT INTO distributor(id,name_dis)
	VALUES('2','THT'),
		  ('3','DRT'),
          ('4','YUI'),
          ('1','KU');

/*
CREATE TABLE categories;
*/


/*
CREATE TABLE news;
*/
CREATE TABLE IF NOT EXISTS news (
id INT(11) NOT NULL auto_increment,
  title VARCHAR(255) NOT NULL,
  content TEXT NOT NULL,
  description TEXT(1000) NOT NULL,
  image VARCHAR(500) DEFAULT NULL,
  created DATETIME NOT NULL,
  type_id INT(11) NOT NULL,
  status tinyint,
  PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*
CREATE TABLE users;
*/

CREATE TABLE IF NOT EXISTS users (
  id INT(11) auto_increment NOT NULL,
  firstname varchar(255) not null,
  lastname varchar(255) not null,
  username VARCHAR(255) NOT NULL,
  password_user VARCHAR(255) NOT NULL,
  address VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  phone VARCHAR(255) NOT NULL,
  status tinyint,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*
CREATE TABLE orders;
*/

CREATE TABLE IF NOT EXISTS orders(
id INT(11) NOT NULL auto_increment,
receiverdate DATETIME NOT NULL,
paymentmethod VARCHAR(255) NOT NULL,
cartinfomation TEXT NOT NULL,
createorder DATETIME NOT NULL,
id_users INT(11),
status_order  text,
status tinyint,
FOREIGN KEY (id_users) REFERENCES  users(id),
PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*
CREATE TABLE orders_detail;
*/

CREATE TABLE IF NOT EXISTS orders_detail (
	id INT(11) NOT NULL auto_increment,
    product_id INT(11) NOT NULL,
    id_orders INT(11) NOT NULL,
    quantity INT(11) NOT NULL,
    status tinyint,
    PRIMARY KEY (id),
    FOREIGN KEY (id_orders) REFERENCES  orders(id),
    FOREIGN KEY (product_id) REFERENCES  products(id)
   )ENGINE=InnoDB DEFAULT CHARSET=utf8;
   

   
   SELECT orders_detail.product_id, products.name_product,products.price,products.link, SUM(orders_detail.quantity) AS a 
   				FROM orders_detail, products
    			WHERE orders_detail.product_id = products.id
   				GROUP BY orders_detail.product_id
   				ORDER BY a DESC
   				limit 4;
   
   
/*

CREATE TABLE products;
*/


/*

CREATE TABLE images;

*/
CREATE TABLE IF NOT EXISTS images_slide (
id INT(11) NOT NULL auto_increment primary key,
  name_image VARCHAR(255) NOT NULL,
  description TEXT,
  status tinyint,
  link VARCHAR(255) DEFAULT NULL
  );
/*
 INSERT INTO images( id,name_image,description,link)
	VALUES ('1','A1','NO COMENT','hinhanh/hoa2.jpg'),
		   ('2','A1','NO COMENT','hinhanh/hoa2.jpg'),
		   ('3','A1','NO COMENT','hinhanh/hoa2.jpg'),
		   ('4','A1','NO COMENT','hinhanh/hoa2.jpg'),
           ('5','A1','NO COMENT','hinhanh/hoa2.jpg'),
		   ('6','A1','NO COMENT','hinhanh/hoa2.jpg'),
           ('7','A1','NO COMENT','hinhanh/hoa2.jpg'),
		   ('8','A1','NO COMENT','hinhanh/hoa2.jpg'),
           ('9','A1','NO COMENT','hinhanh/hoa2.jpg'),
		   ('10','A1','NO COMENT','hinhanh/hoa2.jpg'),
		   ('11','A1','NO COMENT','hinhanh/hoa2.jpg'),
           ('12','A1','NO COMENT','hinhanh/hoa2.jpg'),
		   ('13','A1','NO COMENT','hinhanh/hoa2.jpg'),
           ('14','A1','NO COMENT','hinhanh/hoa2.jpg'),
		   ('15','A1','NO COMENT','hinhanh/hoa2.jpg'),
           ('16','A1','NO COMENT','hinhanh/hoa2.jpg'),
		   ('17','A1','NO COMENT','hinhanh/hoa2.jpg'),
           ('18','A1','NO COMENT','hinhanh/hoa2.jpg');
select  products.code_product, products.name_product,products.price,images.link  from images, products where (products.id_image=images.id);
*/
Could not connect, server may not be running.
