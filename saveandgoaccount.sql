CREATE DATABASE saveandgoaccount;

use saveandgoaccount;

CREATE TABLE users (
 id int(50) NOT NULL AUTO_INCREMENT,
 username varchar(50) NOT NULL,
 email varchar(50) NOT NULL,
 password varchar(50) NOT NULL,
 trn_date datetime NOT NULL,
 PRIMARY KEY (id)
 );

 CREATE TABLE station_area (
 id int(50) NOT NULL AUTO_INCREMENT,
 fuel_station_image varchar(100)NOT NULL,
 fuel_station_name varchar(50)NOT NULL,
 fuel_station_address varchar(50)NOT NULL,
 area varchar(50) NOT NULL,
 fuel_station_city varchar(50)NOT NULL,
 fuel_price varchar(50)NOT NULL,
 fuel_discount_code varchar(100)NOT NULL,
 link varchar(300)NOT NULL,
 navigate varchar(50)NOT NULL,
 PRIMARY KEY (id)
 );
 


 INSERT INTO station_area (id, fuel_station_image, fuel_station_name, fuel_station_address, area, fuel_station_city, fuel_price, fuel_discount_code, link, navigate ) VALUES ('1','pictures/work3.jpg', 'BP', '3044, Great North Road', 'NewLynn', 'Auckland', '$1.47 Per litre', 'pictures/promocode.png', 'https://www.google.co.nz/maps/place/3044+Great+North+Rd,+New+Lynn,+Auckland+0600/@-36.9052385,174.6846042,17z/data=!3m1!4b1!4m5!3m4!1s0x6d0d414b872a3433:0x64bf0019a2bbb81d!8m2!3d-36.9052385!4d174.6867929', 'pictures/navigate.png');
 INSERT INTO station_area (id, fuel_station_image, fuel_station_name, fuel_station_address, area, fuel_station_city, fuel_price, fuel_discount_code, link, navigate) VALUES ('2','pictures/Z.png', 'Z', '62, Rata Street', 'NewLynn', 'Auckland', '$1.57 Per litre', 'pictures/promocode.png', 'https://www.google.co.nz/maps/place/62+Rata+St,+New+Lynn,+Auckland+0600/@-36.9028712,174.6789301,17z/data=!3m1!4b1!4m5!3m4!1s0x6d0d4148f0dda2bf:0xb824163a00addd04!8m2!3d-36.9028755!4d174.6811188', 'pictures/navigate.png');
 INSERT INTO station_area (id, fuel_station_image, fuel_station_name, fuel_station_address, area, fuel_station_city, fuel_price, fuel_discount_code, link, navigate ) VALUES ('3','pictures/work5.jpg', 'Mobil', '28, Titirangi Road', 'NewLynn', 'Auckland', '$1.77 Per litre', 'pictures/promocode.png', 'https://www.google.co.nz/maps/place/28+Titirangi+Rd,+New+Lynn,+Auckland+0600/@-36.9122739,174.6728138,17z/data=!3m1!4b1!4m5!3m4!1s0x6d0d415b71e52989:0x46690b3d703924a!8m2!3d-36.9122739!4d174.6750025', 'pictures/navigate.png');
 INSERT INTO station_area (id, fuel_station_image, fuel_station_name, fuel_station_address, area, fuel_station_city, fuel_price, fuel_discount_code, link, navigate ) VALUES ('4','pictures/work6.jpg', 'Gull', '642, Rosebank Road', 'Avondale', 'Auckland', '$1.41 Per litre', 'pictures/promocode.png', 'https://www.google.co.nz/maps/place/642+Rosebank+Rd,+Avondale,+Auckland+1026/@-36.8724312,174.6675918,17z/data=!3m1!4b1!4m5!3m4!1s0x6d0d40dde094b0cd:0xc1d365577541c4f2!8m2!3d-36.8724355!4d174.6697805', 'pictures/navigate.png');
 INSERT INTO station_area (id, fuel_station_image, fuel_station_name, fuel_station_address, area, fuel_station_city, fuel_price, fuel_discount_code, link, navigate ) VALUES ('5','pictures/Z.png', 'Z', '610, Hillsborough Road', 'Avondale', 'Auckland', '$1.59 Per litre', 'pictures/promocode.png', 'https://www.google.co.nz/maps/place/610+Hillsborough+Rd,+Mount+Roskill,+Auckland+1041/@-36.9224213,174.7173206,17z/data=!3m1!4b1!4m5!3m4!1s0x6d0d469d667d1e91:0x1ff248f1adba060a!8m2!3d-36.9224256!4d174.7195093', 'pictures/navigate.png');
 INSERT INTO station_area (id, fuel_station_image, fuel_station_name, fuel_station_address, area, fuel_station_city, fuel_price, fuel_discount_code, link, navigate ) VALUES ('6','pictures/work5.jpg', 'Mobil', '2060, Great North Road', 'Avondale', 'Auckland', '$1.61 Per litre', 'pictures/promocode.png', 'https://www.google.co.nz/maps/place/2060+Great+North+Rd,+Avondale,+Auckland+0600/@-36.8993128,174.6941128,17z/data=!3m1!4b1!4m5!3m4!1s0x6d0d46c9c1d727f1:0xd9cddcd5635ba7d1!8m2!3d-36.8993171!4d174.6963015', 'pictures/navigate.png');
 INSERT INTO station_area (id, fuel_station_image, fuel_station_name, fuel_station_address, area, fuel_station_city, fuel_price, fuel_discount_code, link, navigate ) VALUES ('7','pictures/work3.jpg', 'BP', '975, New North Road','MountAlbert', 'Auckland', '$1.97 Per litre', 'pictures/promocode.png', 'https://www.google.co.nz/maps/place/975+New+N+Rd,+Mount+Albert,+Auckland+1025/@-36.888479,174.7084712,17z/data=!3m1!4b1!4m5!3m4!1s0x6d0d46e78827ef07:0xaa746e61f303ed59!8m2!3d-36.8884833!4d174.7106599', 'pictures/navigate.png');
 INSERT INTO station_area (id, fuel_station_image, fuel_station_name, fuel_station_address, area, fuel_station_city, fuel_price, fuel_discount_code, link, navigate ) VALUES ('8','pictures/work2.jpg', 'CALTEX', 'Cnr Balmoral & Sandringham Road', 'MountAlbert', 'Auckland', '$2.17 Per litre', 'pictures/promocode.png', 'https://www.google.co.nz/maps/place/Balmoral+Rd,+Sandringham,+Auckland+1025/@-36.8852162,174.7361552,17z/data=!3m1!4b1!4m5!3m4!1s0x6d0d4653c6b307e5:0x573dfc70b370632b!8m2!3d-36.8852205!4d174.7383439', 'pictures/navigate.png');
 INSERT INTO station_area (id, fuel_station_image, fuel_station_name, fuel_station_address, area, fuel_station_city, fuel_price, fuel_discount_code, link, navigate ) VALUES ('9','pictures/work5.jpg', 'Mobil', '6a, Owairaka Ave','MountAlbert', 'Auckland', '$2.21 Per litre', 'pictures/promocode.png', 'https://www.google.co.nz/maps/place/6A+Owairaka+Ave,+Mount+Albert,+Auckland+1025/@-36.8941898,174.7245859,17z/data=!3m1!4b1!4m5!3m4!1s0x6d0d46f6d117b94d:0x8e7907750d1d81d6!8m2!3d-36.8941941!4d174.7267746', 'pictures/navigate.png');
 INSERT INTO station_area (id, fuel_station_image, fuel_station_name, fuel_station_address, area, fuel_station_city, fuel_price, fuel_discount_code, link, navigate ) VALUES ('10','pictures/work2.jpg', 'CALTEX', '790, Great North Road', 'PointChevalier', 'Auckland', '$1.62 Per litre', 'pictures/promocode.png', 'https://www.google.co.nz/maps/place/790+Great+North+Rd,+Western+Springs,+Auckland+1022/@-36.8680807,174.7262863,17z/data=!3m1!4b1!4m5!3m4!1s0x6d0d4708f3ce9d7b:0x68a05445974cf2b2!8m2!3d-36.868085!4d174.728475', 'pictures/navigate.png');
 INSERT INTO station_area (id, fuel_station_image, fuel_station_name, fuel_station_address, area, fuel_station_city, fuel_price, fuel_discount_code, link, navigate ) VALUES ('11','pictures/work3.jpg', 'BP', '925, Mount Eden Road', 'PointChevalier', 'Auckland', '$1.74 Per litre', 'pictures/promocode.png', 'https://www.google.co.nz/maps/place/925+Mount+Eden+Rd,+Three+Kings,+Auckland+1024/@-36.8989838,174.7544823,17z/data=!3m1!4b1!4m5!3m4!1s0x6d0d463ebe77530d:0xb415bf9cfb3684b2!8m2!3d-36.8989881!4d174.756671', 'pictures/navigate.png');
 INSERT INTO station_area (id, fuel_station_image, fuel_station_name, fuel_station_address, area, fuel_station_city, fuel_price, fuel_discount_code, link, navigate ) VALUES ('12','pictures/work5.jpg', 'Mobil', '60, Green Lnv E', 'PointChevalier', 'Auckland', '$1.96 Per litre', 'pictures/promocode.png', 'https://www.google.co.nz/maps/place/60+Green+Ln+E,+Remuera,+Auckland+1050/@-36.8857555,174.8006716,17z/data=!3m1!4b1!4m5!3m4!1s0x6d0d48f7a4d780a3:0x72f4b8755ec326f0!8m2!3d-36.8857598!4d174.8028603', 'pictures/navigate.png');
 
 