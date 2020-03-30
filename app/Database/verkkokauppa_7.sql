drop database if exists verkkokauppa_7;
create database verkkokauppa_7;

create table user (
    id int primary key auto_increment,
    username varchar(30) not null unique,
    password varchar(255) not null,
    firstname varchar(100),
    lastname varchar(100),
    address varchar(100),
    postcode char(5),
    postOffice varchar(100),
    email varchar(255),
    phone varchar(20)
);

create table tuote (
    id int primary key auto_increment,
    title varchar(255),
    releaseDate date,    
    price decimal(5,2),
    picture varchar(50),
    description text,
    genre varchar(255),
    developer varchar(50),
    publisher varchar(50)
);

<<<<<<< HEAD
=======
create table tuoteryhma (
    id int primary key auto_increment,
    name varchar(255)
);
>>>>>>> 9cda557c5c3fd66b201dd9a6281198ac24ed7596

create table tilaus (
    id int primary key auto_increment,
    orderTime timestamp default current_timestamp,
    user_id int not null,
    index (user_id),
    foreign key (user_id) references user(id)
    on delete restrict
);

-- create table developer (
--    id int primary key auto_increment,
--    nimi varchar(50)
--)

-- create table publisher (
--    id int primary key auto_increment,
--    nimi varchar(50)
--)

--create table genre (
--    id int primary key auto_increment,
--    name varchar(50)
--);
