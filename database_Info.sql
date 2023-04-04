create table if not exists 'customer'(
    customerID int auto_increment not null,
    first_name varchar(40) not null, 
    last_name varchar(40) not null,
    email varchar(50) not null,
    street_address varchar(20),
    city varchar(30),
    state varchar(2),
    userName varchar,
    password varchar,
    foreign key(customerID) references movie_queue(customerID),
);

create table if not exists 'movie_queue'(
    queue_ID int not null,
    movieID,
    ssID,
    primary key(customerID,movieID,ssID)
);

create table if not exists 'movies'(
    movieID int auto_increment not null,
    movie_title varchar not null,
    movie_year bigint not null,
    movie_director varchar not null,
    movie_producer varchar not null,
    movie_actor varchar not null,
);

create table if not exists 'actors'(
    actorID int auto_increment not null,
    actor_first_name varchar not null,
    actor_last_name varchar not null,

);

create table if not exists 'actor_movies'(
    actor_movies int NOT null,
    movieID not null,
    actorID not null,
    Primary KEY (movieID,actorID)
);

create table if not exists 'producers'(
    producerID int auto_increment not null,
    p_first_name varchar not null,
    p_last_name varchar not null,
);

create table if not exists'directors'(
    directorID int auto_increment not null

);
create table if not exists 'streaming_service'(
    ssID int auto_increment not null,
    service_name varchar not null,


);
create table if not exists 'billing'(
    billID int auto_increment not null,
    customerID int,
    foreign key customerID references customer(customerID),
);