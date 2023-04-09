
INSERT INTO `movies` (title,year,director,producer,actor) VALUES
('The Shawshank Redemption ','1999','Michael CARTER','Veronica Harmon','Lori Sandoval'),
('The Godfather','2000','Christopher MITCHELL','Isaac Edwards','Karen Sims'),
('The Godfather: Part II','2002','Jessica PEREZ','Amy Young','Thomas Bell'),
('Pulp Fiction','1995','Matthew ROBERTS','Amanda Nguyen','John Brown'),
('Inception','1995','Ashley TURNER','Carrie Macias','Luis Taylor'),
('12 Angry Men','1998','Jennifer PHILLIPS','Jill Love','Mark Dillon'),
('One Flew Over the Cuckoo''s Nest ','1998','Joshua CAMPBELL','Tara Chavez','James Rodriguez'),
('The Dark Knight','1999','Amanda PARKER','Whitney Garrison','Barbara Robinson'),
('Shichinin no samurai','1999','Daniel EVANS','Jeffery Ward','April Marquez'),
('Star Wars','1974','David EDWARDS','Jennifer Martin','Jenna Scott'),
('Goodfellas ','1940','James COLLINS','Angela Porter','Stephen Smith'),
('Casablanca ','1960','Robert STEWART','Christopher Larsen','Fred Campos'),
('Cidade de Deus','1970','John SANCHEZ','Veronica Bowers','Grant White'),
('Fight Club','1980','Joseph MORRIS','Kim Baker','Zachary Wright'),
('Se7en ','1990','Andrew ROGERS','Julian Johnson','Erica Vaughn'),
('Memento ','1999','Ryan REED','Tina Bailey','Brian Harper'),
('The Usual Suspects','1999','Brandon COOK','Alexandra Roach','Sarah Olson'),
('Citizen Kane ','1999','Jason MORGAN','Terry Miller','John Carr'),
('Apocalypse Now','2000','Justin BELL','Christopher Scott','Christina Smith');
 


INSERT INTO `actors` (actor_first_name,actor_last_name) VALUES
('Jensen','Ackles'),
('Andre','3000'),
('Naveen','Andrews'),
('Jensen','Atwood'),
('Tyler','Bachtel'),
('Penn','Badgley'),
('Simon','Baker'),
('Christian','Bale'),
('Eric','Balfour'),
('Eric','Bana'),
('Alex','Band'),
('Antonio','Banderas'),
('Ike','Barinholtz'),
('Ben','Barnes'),
('Eugen','Bauder'),
('William','Beckett'),
('Tyson','Beckford'),
('David','Beckham'),
('Jason','Behr'),
('Jonathan','Bennett');

INSERT INTO `streaming_service` (service_name,service_notes) VALUES
('Hulu','hulu'),
('Netflix','netflix'),
('Amazon Prime','amazon prime'),
('Apple +','apple +'),
('Disney +','disney +');

 INSERT INTO `producers` (producer_first_name,producer_last_name) VALUES
('Veronica ','Harmon'),
('Isaac ','Edwards'),
('Amy ','Young'),
('Amanda ','Nguyen'),
('Carrie ','Macias'),
('Jill ','Love'),
('Tara ','Chavez'),
('Whitney ','Garrison'),
('Jeffery ','Ward'),
('Jennifer ','Martin'),
('Angela ','Porter'),
('Christopher ','Larsen'),
('Veronica ','Bowers'),
('Kim ','Baker'),
('Julian ','Johnson'),
('Tina ','Bailey'),
('Alexandra ','Roach'),
('Terry ','Miller'),
('Christopher ','Scott');

CREATE TABLE `director` (
  `director_first_name` VARCHAR(1024),
  `director_last_name` VARCHAR(1024)
);

INSERT INTO `directors` (director_first_name,director_last_name) VALUES
('Michael','CARTER'),
('Christopher','MITCHELL'),
('Jessica','PEREZ'),
('Matthew','ROBERTS'),
('Ashley','TURNER'),
('Jennifer','PHILLIPS'),
('Joshua','CAMPBELL'),
('Amanda','PARKER'),
('Daniel','EVANS'),
('David','EDWARDS'),
('James','COLLINS'),
('Robert','STEWART'),
('John','SANCHEZ'),
('Joseph','MORRIS'),
('Andrew','ROGERS'),
('Ryan','REED'),
('Brandon','COOK'),
('Jason','MORGAN'),
('Justin','BELL'),
('Sarah','MURPHY');

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