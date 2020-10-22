USE hudsonthom;

DROP TABLE IF EXISTS product;

CREATE TABLE product (
	ProductID integer NOT NULL,
    ProductName varchar(50) NOT NULL,
    Description varchar(255) NOT NULL,
    picUrl varchar(50),
    Price decimal NOT NULL,
    PRIMARY KEY (LoginID)
);

INSERT INTO product VALUES ( 1, 'strawberry', 'strawberries are a red fruit that taist good', 'strawberries.jpg', 7.99),
( 2, 'blueberries', 'blueberries are a tiny blue fruit that arent actually blue on the inside', 'blueberries.jpg', 4.99),
( 3, 'oranges', 'orange are an orange fruit that actually live up to their name', 'oranges.jpg', 5.99),
( 4, 'bananas', 'bananas are a yellow fruit that are often used as telephones', 'bananas.jpg', 7.99),
( 5, 'raspberries', 'raspberries are a red fruit that can be quite tarte', 'raspberries.jph', 3.99),
( 6, 'raspberry pi', 'raspberry pi is one of the worst pies you can get and is honestly barely edible', 'raspberrypi.jpg', 8.99),
( 7, 'mango', 'mangos are one of the mildest tropical fruits but at least they are orange on the inside', 'mangos.jpg', 6.99),
( 8, 'blackberries', 'blackberries are not actually black, they are a good source of vitamin C though', 'blackberries.jpg', 15.99),
( 9, 'guavas', 'guava is a green or yellow fruit on the outside, but on the inside is a bright pink, they are very high in potassium and folacin', 'guavas.jpg', 13.99),
( 10, 'kiwi', 'kiwi is a fuzzy fruit with a bright green inside that is extremely tart but also a great source of vitamins', 'kiwis.jpg', 10.99);