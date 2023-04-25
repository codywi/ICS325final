
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
('Justin','BROWN','jbrown@gmail.com','0549 real street','Ras al-Khaimah','NJ','name6','passw2rd');