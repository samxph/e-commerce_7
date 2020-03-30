drop database if exists verkkokauppa_7
create database verkkokauppa_7
use database verkkokauppa_7

create table user (
    id int primary key auto_increment,
    username varchar(30) not null unique,
    password varchar(255) not null,
    firstname varchar(100),
    lastname varchar(100),
    lahiosoite varchar(100),
    postinumero char(5),
    postitoimipaikka varchar(100),
    email varchar(255),
    puhelin varchar(20)
);

create table genre (
    id int primary key auto_increment,
    nimi varchar(50)
);

create table tuote (
    id int primary key auto_increment,
    title varchar(255),
    julkaisupvm date,    
    hinta decimal(5,2),
    kuva varchar(50),
    kuvaus text,
    genre varchar(255),
    kehittaja varchar(50),
    julkaisija varchar(50)
);

create table tilaus (
    id int primary key auto_increment,
    tilattu timestamp default current_timestamp,
    asiakas_id int not null,
    index (asiakas_id),
    foreign key (asiakas_id) references asiakas(id)
    on delete restrict
);

--create table developer (
--    id int primary key auto_increment,
--    nimi varchar(50)
--)

--create table publisher (
--    id int primary key auto_increment,
--    nimi varchar(50)
--)
