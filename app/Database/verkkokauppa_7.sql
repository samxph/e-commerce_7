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

insert into developer (name) values ("CD PROJEKT RED"); /*1*/
insert into developer (name) values ("CAPCOM"); /*2*/
insert into developer (name) values ("Irrational Games"); /*3*/
insert into developer (name) values ("Gearbox Software"); /*4*/
insert into developer (name) values ("Firaxis Games"); /*5*/
insert into developer (name) values ("Valve"); /*6*/
insert into developer (name) values ("PlatinumGames"); /*7*/
insert into developer (name) values ("Square Enix"); /*8*/
insert into developer (name) values ("Ubisoft Montreal"); /*9*/ 
insert into developer (name) values ("Ubisoft Quebec"); /*10*/ 
insert into developer (name) values ("Infinity Ward"); /*11*/ 
insert into developer (name) values ("Treyarch"); /*12*/ 
insert into developer (name) values ("Ubisoft Pune"); /*13*/ 
insert into developer (name) values ("EA Canada"); /*14*/ 
insert into developer (name) values ("EA DICE"); /*15*/ 
insert into developer (name) values ("id Software"); /*16*/ 
insert into developer (name) values ("Bethesda Game Studios"); /*17*/ 
insert into developer (name) values ("Creative Assembly"); /*18*/ 
insert into developer (name) values ("Codemasters"); /*19*/ 
insert into developer (name) values ("Psyonix"); /*20*/ 



/******************************************************/

create table publisher (
    id int primary key auto_increment,
    name varchar(50)
);

insert into publisher (name) values ("CD PROJEKT RED"); /*1*/
insert into publisher (name) values ("CAPCOM"); /*2*/
insert into publisher (name) values ("2K"); /*3*/
insert into publisher (name) values ("Valve"); /*4*/
insert into publisher (name) values ("Square Enix"); /*5*/
insert into publisher (name) values ("Ubisoft"); /*6*/ 
insert into publisher (name) values ("Activision"); /*7*/ 
insert into developer (name) values ("EA Sports"); /*8*/ 
insert into developer (name) values ("Electronic Arts"); /*9*/
insert into developer (name) values ("Bethesda Softworks"); /*10*/ 
insert into developer (name) values ("Sega"); /*11*/ 
insert into developer (name) values ("Codemasters"); /*12*/ 
insert into developer (name) values ("Psyonix"); /*13*/ 


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
    genres varchar(255)
);

/* Published by CDPR */
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres)
values ("Cyberpunk 2077", "2020-09-17", 60, "", "Cyberpunk 2077 is an open-world, action-adventure story
 set in Night City, a megalopolis obsessed with power, glamour and body modification. You play as V,
  a mercenary outlaw going after a one-of-a-kind implant that is the key to immortality.", 1, 1, "");
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres)
values ("Thronebreaker: The Witcher Tales", "2018-11-09", 20, "", "Discover a brand new RPG from the
 creators of The Witcher 3: Wild Hunt. Facing an imminent invasion, Meve — war-veteran and Queen of
  Lyria and Rivia — is forced to once again enter the warpath and set out on a dark journey of destruction
   and revenge.", 1, 1, "");
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres)
values ("The Witcher 3: Wild Hunt", "2015-05-18", 30, "", "As war rages on throughout the Northern Realms,
 you take on the greatest contract of your life — tracking down the Child of Prophecy, a living weapon
  that can alter the shape of the world.", 1, 1, "");

/* Published by CAPCOM */
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres)
values ("Devil May Cry 5", "2019-03-08", 50, "", "add description here", 2, 2, "");
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres)
values ("MONSTER HUNTER: WORLD", "2018-08-09", 60, "mhw.jpg" , "add description here", 2, 2, "");
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres)
values ("RESIDENT EVIL 2 / BIOHAZARD RE:2", "2019-01-25", 40, "" , "add description here", 2, 2, "");

/* Published by 2K */
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres)
values ("BioShock Infinite", "2013-03-26", 30, "" , "add description here", 3, 3, "");
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres)
values ("Borderlands 3", "2019-09-13", 60, "" , "add description here", 4, 3, "");
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres)
values ("Sid Meier’s Civilization VI", "2016-10-21", 60, "" , "add description here", 5, 3, "");

/* Published by Valve */
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres)
values ("Half-Life: Alyx", "2020-03-23", 50, "" , "add description here", 6, 4, "");
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres)
values ("Portal 2", "2011-04-19", 9, "" , "add description here", 6, 4, "");
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres)
values ("Left 4 Dead 2", "2009-11-17", 9, "" , "add description here", 6, 4, "");

/* Published by Square Enix */
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres)
values ("NieR:Automata", "2017-03-17", 40, "" , "add description here", 7, 5, "");
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres)
values ("FINAL FANTASY XIV", "2014-02-18", 10, "" , "add description here", 8, 5, "");
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres)
values ("DRAGON QUEST® XI: Echoes of an Elusive Age", "2017-07-29", 60, "" , "add description here", 8, 5, "");

/* Published by Activision */

insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres, tuoteryhma_id)
values ("Call of Duty: Black Ops", "2010-11-9", 40, "" , " The biggest action series of all time returns. Call of Duty®: 
Black Ops is an entertainment experience that will take you to conflicts across the globe, as elite Black Ops forces
 fight in the deniable operations and secret wars that occurred under the veil of the Cold War. ", 10, 7, "", 4);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres, tuoteryhma_id)
values ("Call of Duty: Modern Warfare 3", "2011-11-8", 40, "" , " Modern Warfare is back. The best-selling first person 
action series of all-time returns with the epic sequel to multiple Game of the Year award winner,
 Call of Duty®: Modern Warfare 2.", 9, 7, "", 4);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres, tuoteryhma_id)
values ("Call of Duty: Black Ops II", "2012-11-13", 40, "" , "Pushing the boundaries of what fans have come to expect 
from the record-setting entertainment franchise, Call of Duty®: Black Ops II propels players into a near future, 21st
 Century Cold War, where technology and weapons have converged to create a new generation of warfare.", 10, 7, "", 4);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres, tuoteryhma_id)
values ("Call of Duty: Modern Warfare", "2019-9-12", 60, "" , "The iconic first-person shooter game is back! Cross play,
 free maps and modes, and new engine deliver the largest technical leap in Call of Duty history.", 9, 7, "", );

/* Published by Ubisoft */

insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres, tuoteryhma_id)
values ("Tom Clancy’s Rainbow Six: Siege", "2015-12-7", 20, "" , "Discover the most tactical FPS on PC, PS4 and Xbox One.
 Choose your operators for intense 5v5 team matches on one of our numerous iconic maps.", 7, 6, "", );
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres, tuoteryhma_id)
values ("Assasin’s Creed Origins", "2017-10-27", 60, "" , "Sail down the Nile, uncover the mysteries of the pyramids or 
fight your way against dangerous ancient factions and wild beasts as you explore this gigantic and unpredictable 
land.", 7, 6, "", );
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres, tuoteryhma_id)
values ("Assasin’s Creed Odyssey", "2018-10-5", 60, "" , "Write your own epic odyssey and become a legendary Spartan 
hero in Assassin’s Creed Odyssey, an inspiring adventure where you must forge your destiny and define your own path 
in a world on the brink of tearing itself apart. Influence how history unfolds as you experience a rich and
 ever-changing world shaped by your decisions.", 8, 6, "", );
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres, tuoteryhma_id)
values ("Far Cry 5", "2018-3-27", 60, "" , "add description here", 7, 6, "", );
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres, tuoteryhma_id)
values ("Monopoly Plus", "2014-11-25", 15, "" , "With a colorful and 3D lively city animated by funny little sidekicks,
 Monopoly+ brings the classic franchise to a new level.", 11, 6, "", );

/* Published by EA */

insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres, tuoteryhma_id)
values ("FIFA 19", "2018-9-28", 40, "" , "FIFA 19 delivers a champion’s caliber-experience on and off the pitch. Led by 
the prestigious UEFA Champions League, FIFA 19 offers enhanced gameplay mechanics that allow you control the pitch in 
every moment.", 12, 8, "", );
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres, tuoteryhma_id)
values ("Battlefield 1", "2016-10-10", 40, "" , "Battlefield 1 takes you back to The Great War, WW1, where new technology 
and worldwide conflict changed the face of warfare forever. Take part in every battle, control every massive vehicle, 
and execute every maneuver that turns an entire fight around. The whole world is at war – see what’s beyond the 
trenches.", 13, 8, "", );
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres, tuoteryhma_id)
values ("Battlefield V", "2018-11-20", 40, "" , "The Battlefield series goes back to its roots in a never-before-seen 
portrayal of World War 2. Take on physical, all-out multiplayer with your squad in modes like the vast Grand Operations 
and the cooperative Combined Arms, or witness human drama set against global combat in the single player War Stories.
 As you fight in epic, unexpected locations across the globe, enjoy the richest and most immersive Battlefield yet.
  Now also includes Firestorm – Battle Royale, reimagined for Battlefield.", 13, 8, "", );

/* Published by Bethesda Softworks */
	
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres, tuoteryhma_id)
values ("DOOM Eternal", "2020-03-19", 60, "" ,  "Hell’s armies have invaded Earth. Become the Slayer in an epic 
single-player campaign to conquer demons across dimensions and stop the final destruction of humanity.", 14, 10, "", );
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres, tuoteryhma_id)
values ("Fallout 76", "2018-11-14", 40, "" ,  "Work together with other players, or not, to survive. Experience the 
largest and most dynamic world ever created in the Fallout universe with major free updates which grow and evolve
 the game with new and different ways to play. Play solo or join together as you explore, quest, build, and triumph 
 against the wasteland’s greatest threats.", 15, 10, "", );

/* Published by Sega */

insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres, tuoteryhma_id)
values ("Total War: Warhammer", "2016-05-24", 60, "" , "Addictive turn-based empire-building with colossal, real-time
 battles. All set in a world of legendary heroes, giant monsters, flying creatures and storms of magical power"
, 16, 11, "", 4);

/* Published by Codemasters */

insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres, tuoteryhma_id)
values ("DiRT 4", "2016-06-06", 25, "" , "DiRT 4 is all about embracing fear. It’s about the thrill, exhilaration and 
adrenaline that is absolutely vital to off-road racing. It’s about loving the feeling of pushing flat out next to a 
sheer cliff drop, going for the gap that’s too small and seeing how much air you can get. Be Fearless.", 17, 12, "", );

/* Published by Psyonix */

insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres, tuoteryhma_id)
values ("Rocket League", "2015-07-07", 10, "" , "Rocket League is a high-powered hybrid of arcade-style soccer and 
vehicular mayhem with easy-to-understand controls and fluid, physics-driven competition"
, 18, 13, "", );

insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres)
values ("", "", , "" , "add description here", , , "", );
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres)
values ("", "", , "" , "add description here", , , "", );
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id, genres)
values ("", "", , "" , "add description here", , , "", );

/******************************************************/

create table tuoteryhma_tuote (
    tuote_id int not null,
    index (tuote_id),
    foreign key (tuote_id) references tuote(id)
    on delete restrict,     
    tuoteryhma_id int not null,
    index (tuoteryhma_id),
    foreign key (tuoteryhma_id) references tuoteryhma(id)
    on delete restrict 
);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (1, 2);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (1, 3);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (1, 4);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (2, 1);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (2, 2);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (2, 3);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (2, 4);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (3, 1);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (3, 2);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (3, 3);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (3, 4);



/******************************************************/

create table tilaus (
    id int primary key auto_increment,
    orderTime timestamp default current_timestamp,
    user_id int not null,
    index (user_id),
    foreign key (user_id) references user(id)
    on delete restrict,
    maara smallint
);

/******************************************************/



/* 
List of genres in alphabetical order:

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