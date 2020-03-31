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

/******************************************************/

create table developer (
    id int primary key auto_increment,
    name varchar(50)
);

insert into developer (name) values ("CD PROJEKT RED");
insert into developer (name) values ("CAPCOM");
insert into developer (name) values ("Gearbox Software");
insert into developer (name) values ("Valve");
insert into developer (name) values ("");

/******************************************************/

create table publisher (
    id int primary key auto_increment,
    name varchar(50)
);

insert into publisher (name) values ("CD PROJEKT RED");
insert into publisher (name) values ("CAPCOM");
insert into publisher (name) values ("2K");
insert into publisher (name) values ("Valve");
insert into publisher (name) values ("");

/******************************************************/

create table tuoteryhma (
    id int primary key auto_increment,
    name varchar(50)
);

insert into tuoteryhma (name) values ("Switch");
insert into tuoteryhma (name) values ("PS4");
insert into tuoteryhma (name) values ("Xbox One");
insert into tuoteryhma (name) values ("PC");
insert into tuoteryhma (name) values ("Oheistarvikkeet");

/******************************************************/

create table tuote (
    id int primary key auto_increment,
    title varchar(255),
    releaseDate date,    
    price decimal(5,2),
    picture varchar(50),
    description text,
    developer_id int not null,
    index (developer_id),
    foreign key (developer_id) references developer(id)
    on delete restrict,
    publisher_id int not null,
    index (publisher_id),
    foreign key (publisher_id) references publisher(id)
    on delete restrict,
    genres varchar(255),
    tuoteryhma_id int not null,
    index (tuoteryhma_id),
    foreign key (tuoteryhma_id) references tuoteryhma(id)
    on delete restrict
);

insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres, tuoteryhma_id)
values ("Cyberpunk 2077", "2020-09-17", 60, "", "add description here", 1, 1, "", 1);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres, tuoteryhma_id)
values ("Thronebreaker: The Witcher Tales", "2018-11-09", 20, "", "add description here", 1, 1, "", 1);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres, tuoteryhma_id)
values ("The Witcher 3: Wild Hunt", "2015-05-18", 30, "", "add description here", 1, 1, "", 1);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres, tuoteryhma_id)
values ("Devil May Cry 5", "2019-03-08", 50, "", "add description here", 2, 2, "", 1);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres, tuoteryhma_id)
values ("MONSTER HUNTER: WORLD", "2018-08-09", 60, "mhw.jpg" , "add description here", 2, 2, "", 1);

/******************************************************/

create table tilaus (
    id int primary key auto_increment,
    orderTime timestamp default current_timestamp,
    user_id int not null,
    index (user_id),
    foreign key (user_id) references user(id)
    on delete restrict
);

<<<<<<< HEAD
/******************************************************/


/* 
List of genres in alphabetical order:
=======
-- create table developer (
--    id int primary key auto_increment,
--    nimi varchar(50)
--)

-- create table publisher (
--    id int primary key auto_increment,
--    nimi varchar(50)
--)
>>>>>>> 5e21eb5fa51439305f23b2626ccedad15862de97

- Action
- Action RPG (ARPG)
- Adventure
- Card Game
- Fighting
- First Person Shooter (FPS)
- Horror
- JRPG
- MMORPG
- Multiplayer
- Open World
- Party Game
- Platform
- RPG
- Racing
- Rhythm
- Sandbox
- Single Player
- Sports
- Stealth
- Strategy
- Survival
- Turn Based
- Virtual Reality (VR)
- Visual Novel
*/