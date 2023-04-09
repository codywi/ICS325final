
INSERT INTO `movies` (title,year,director,producer,actor) VALUES
('The Shawshank Redemption ','1994','Frank Darabont','Niki Marvin','Morgan Freeman'),
('The Godfather','1972','Francis Ford Coppola','Albert S. Ruddy','Marlon Brando'),
('The Godfather: Part II','1974','Francis Ford Coppola','Al Pacino','Marlon Brando'),
('Pulp Fiction','1994','Quentin Tarantino','Lawrence Bender','Uma Thurman'),
('Inception','2010','Christopher Nolan','Emma Thomas','Leonardo DiCaprio'),
('Star Wars: A new hope','1978','George Lucas','Gary Kurtz','Mark Hamill'),
('Ratatouille','2007','Brad Bird','Brad Lewis','Patton Oswalt')
;
 


INSERT INTO `actors` (actor_first_name,actor_last_name) VALUES
('Mark',' Hamill'),
('Morgan','Freeman'),
('Leonardo' ,'DiCaprio'),
('Marlon','Brando'),
('Patton','Oswalt'),
('Jonathan','Bennett');


 INSERT INTO `producers` (producer_first_name,producer_last_name) VALUES
('Niki','Marvin'),
('Albert', 'S. Ruddy'),
('Al','Pacino'),
('Lawrence','Bender'),
('Emma','Thomas'),
('Gary','Kurtz'),
('Brad','Lewis');

INSERT INTO `streaming_service` (service_name,service_notes) VALUES
('Hulu','hulu'),
('Netflix','netflix'),
('Amazon Prime','amazon prime'),
('Apple +','apple +'),
('Disney +','disney +');


INSERT INTO `directors` (director_first_name,director_last_name) VALUES
('Frank','Darabont'),
('Christopher','Nolan'),
('Francis Ford', 'Coppola'),
('Quentin','Tarantino'),
('George','Lucas'),
('Brad','Bird');

CREATE TABLE `customer` (
  `first_name` VARCHAR(1024),
  `last_name` VARCHAR(1024),
  `email` VARCHAR(1024),
  `street_address` VARCHAR(1024),
  `city` VARCHAR(1024),
  `state` VARCHAR(1024),
  `userName` VARCHAR(1024),
  `password` VARCHAR(1024)
);

INSERT INTO `customer` (first_name,last_name,email,street_address,city,state,userName,password) VALUES
('Sam','Johnson','sjohnson@gmail.com','123 fake street','saint paul','MN','name1','passw0rd'),
('Dierks','SMITH','dsmith@gmail.com','321 fake street','minneapolis','MN','name2','passw1rd'),
('Gael','JOHNSON','gjohnson@gmail.com','901 fake street','les Escaldes','MN','name3','passw2rd'),
('Jon','WILLIAMS','jwilliams@gmail.com','2148 fake street','Andorra la Vella','MN','name4','passw0rd'),
('Wilson','JONES','wjones@gmail.com','23932 fake street','Umm al Qaywayn','MN','name5','passw1rd'),
('Justin','BROWN','jbrown@gmail.com','0549 real street','Ras al-Khaimah','NJ','name6','passw2rd'),
('David','DAVIS','ddavis@gmail.com','2138 real street','Khawr Fakk?n','NJ','name7','passw0rd'),
('James','MILLER','jmiller@gmail.com','1234 fake street','Dubai','NJ','name8','passw1rd'),
('Corbin','WILSON','cwilson@gmail.com','0495 real street','Dibba Al-Fujairah','WI','name9','passw2rd'),
('Orlando','MOORE','omoore@gmail.com','9482 fake street','Dibba Al-Hisn','WI','name10','passw0rd'),
('Jon','TAYLOR','jtaylor@gmail.com','123 fake street','Sharjah','WI','name11','passw1rd'),
('Asher','ANDERSON','aanderson@gmail.com','594 fake street','Ar Ruways','MI','name12','passw2rd'),
('David','THOMAS','dthomas@gmail.com','234 fake street ','Al Fujayrah','MI','name13','passw0rd'),
('Tom','JACKSON','tjackson@gmail.com','059 fake street ','Al Ain','MI','name14','passw1rd'),
('Raoul','WHITE','rwhite@gmail.com','384 fake street','Ajman','MD','name15','passw2rd'),
('Bow','HARRIS','bharris@gmail.com','104 real street','Adh Dhayd','MD','name16','passw0rd'),
('Marlon','MARTIN','mmartin@gmail.com','594 real street','Abu Dhabi','MD','name17','passw1rd'),
('Adam','THOMPSON','athompson@gmail.com','140 fake street','Zaranj','LA','name18','passw2rd'),
('Chris','GARCIA','cgarcia@gmail.com','988 fake street ','Taloqan','LA','name19','passw0rd'),
('Michel','MARTINEZ','mmartinez@gmail.com','2938 fake street','Sh?n?an?','LA','name20','passw1rd'),
('Justin','ROBINSON','jrobinson@gmail.com','987 real street','Shibirgh?n','LA','name21','passw2rd');
