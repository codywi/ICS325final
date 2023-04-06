create table customer(
    customerID int auto_increment not null,
    first_name varchar(40) not null, 
    last_name varchar(40) not null,
    email varchar(50) not null,
    street_address varchar(20),
    city varchar(30),
    state varchar(2),
    userName varchar(20),
    password varchar(10),
    foreign key(customerID) references movie_queue(customerID)
);

create table movie_queue(
    queue_ID int not null,
    movieID,
    ssID,
    primary key(customerID,movieID,ssID),
    foreign key movieID references movies(movieID),
);

create table movies(
    movieID int auto_increment not null,
    movie_title varchar(40) not null,
    movie_year bigint not null,
    movie_director varchar(40) not null,
    movie_producer varchar(40) not null,
    movie_actor varchar(40) not null,
);

create table actors(
    actorID int auto_increment not null,
    actor_first_name varchar(40) not null,
    actor_last_name varchar(40) not null,

);

create table actor_movies(
    movieID int not null,
    actorID int not null,
    Primary KEY (movieID,actorID)
    foreign key movieID references movies(movieID),
    foreign key actorID references actors(actorID),
);

create table producers(
    producerID int auto_increment not null,
    producer_first_name varchar(40) not null,
    producer_last_name varchar(40) not null,
    primary key(producerID)
);

create table directors(
    directorID int auto_increment not null,
    director_first_name varchar not null,
    director_last_name varchar not null,
    primary key(directorID)
);
create table streaming_service(
    ssID int auto_increment not null,
    service_name varchar(40) not null,
    service_notes varchar(40),
    primary key(ssID)
);

create table billing(
    billID int auto_increment not null,
    customerID int,
    foreign key customerID references customer(customerID)
);