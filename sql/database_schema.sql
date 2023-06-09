drop table if exists movie_queue;
drop table if exists streaming_service;
drop table if exists billing;

drop table if exists customer;
drop table if exists actor_movies;



create table customer(
    customerID int auto_increment not null,
    first_name char(40) not null, 
    last_name char(40) not null,
    email char(50) not null,
    street_address char(20),
    city char(30),
    state char(2),
    userName char(20),
    password char(10),
    isAdmin int(1) default 0,
    primary key(customerID)
);
drop table if exists movies;

create table movies(
    movieID int auto_increment not null,
    title char(40) not null,
    year bigint not null,
    director char(40) not null,
    producer char(40) not null,
    actor char(40) not null,
    primary key(movieID)
);
drop table if exists actors;
create table actors(
    actorID int auto_increment not null,
    actor_first_name char(40) not null,
    actor_last_name char(40) not null,
    primary key(actorID)
);
drop table if exists producers;
create table producers(
    producerID int auto_increment not null,
    producer_first_name char(40) not null,
    producer_last_name char(40) not null,
    primary key(producerID)
);
drop table if exists directors;
create table directors(
    directorID int auto_increment not null,
    director_first_name char(40) not null,
    director_last_name char(40) not null,
    primary key(directorID)
);
create table streaming_service(
    ssID int auto_increment not null,
    service_name char(40) not null,
    service_notes char(40),
    primary key(ssID)
);
create table movie_queue(
    customerID int not null,
    movieID int not null,
    ssID int not null,
    primary key(customerID,movieID,ssID),
    foreign key (customerID) references customer(customerID),
    foreign key (movieID) references movies(movieID),
    foreign key (ssID) references streaming_service(ssID)
);
drop table if exists actor_movies;
create table actor_movies(
    movieID int not null,
    actorID int not null,
    Primary KEY (movieID,actorID),
    foreign key (movieID) references movies(movieID),
    foreign key (actorID) references actors(actorID)
);
create table billing(
    billID int auto_increment not null,
    customerID int,
    primary key(billID),
    foreign key (customerID) references customer(customerID)
);