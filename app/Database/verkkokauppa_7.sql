drop database if exists verkkokauppa_7;
create database verkkokauppa_7;
use verkkokauppa_7;

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
insert into developer (name) values ("Rare"); /*21*/
insert into developer (name) values ("Turn 10 Studios"); /*22*/
insert into developer (name) values ("343 Industries"); /*23*/
insert into developer (name) values ("SCE Santa Monica Studios"); /*24*/
insert into developer (name) values ("Pixelopus"); /*25*/
insert into developer (name) values ("Ryu Ga Gotoku Studio"); /*26*/
insert into developer (name) values ("FromSoftware"); /*27*/
insert into developer (name) values ("Atlus"); /*28*/
insert into developer (name) values ("Guerrilla Games"); /*29*/
insert into developer (name) values ("Insomniac Games"); /*30*/
insert into developer (name) values ("Nintendo"); /*31*/
insert into developer (name) values ("Game Freak"); /*32*/
insert into developer (name) values ("Sora"); /*33*/
insert into developer (name) values ("Intelligent Systems"); /*34*/
insert into developer (name) values ("Other"); /*35*/


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
insert into publisher (name) values ("EA Sports"); /*8*/ 
insert into publisher (name) values ("Electronic Arts"); /*9*/
insert into publisher (name) values ("Bethesda Softworks"); /*10*/ 
insert into publisher (name) values ("Sega"); /*11*/ 
insert into publisher (name) values ("Codemasters"); /*12*/ 
insert into publisher (name) values ("Psyonix"); /*13*/ 
insert into publisher (name) values ("Microsoft Studios"); /*14*/
insert into publisher (name) values ("Sony Interactive Entertainment"); /*15*/
insert into publisher (name) values ("BANDAI NAMCO Entertainment"); /*16*/
insert into publisher (name) values ("Atlus"); /*17*/
insert into publisher (name) values ("Nintendo"); /*18*/
insert into publisher (name) values ("Other"); /*19*/

/******************************************************/

create table tuoteryhma (
    id int primary key auto_increment,
    name varchar(50),
    logo varchar(100)
);

insert into tuoteryhma (name, logo) values ("Switch", "fas fa-dice-two");
insert into tuoteryhma (name, logo) values ("PS4", "fab fa-playstation");
insert into tuoteryhma (name, logo) values ("Xbox One", "fab fa-xbox");
insert into tuoteryhma (name, logo) values ("PC", "fas fa-mouse");
insert into tuoteryhma (name, logo) values ("Devices and Accessories", "");


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
    on delete restrict
);

/* Published by CDPR */
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Cyberpunk 2077", "2020-09-17", 60, "cyberpunk.jpg", "Cyberpunk 2077 is an open-world, action-adventure story
 set in Night City, a megalopolis obsessed with power, glamour and body modification. You play as V,
  a mercenary outlaw going after a one-of-a-kind implant that is the key to immortality.", 1, 1);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Thronebreaker: The Witcher Tales", "2018-11-09", 20, "witcher.jpg", "Discover a brand new RPG from the
 creators of The Witcher 3: Wild Hunt. Facing an imminent invasion, Meve ??? war-veteran and Queen of
  Lyria and Rivia ??? is forced to once again enter the warpath and set out on a dark journey of destruction
   and revenge.", 1, 1);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("The Witcher 3: Wild Hunt", "2015-05-18", 30, "witcher3.jpg", "As war rages on throughout the Northern Realms,
 you take on the greatest contract of your life ??? tracking down the Child of Prophecy, a living weapon
  that can alter the shape of the world.", 1, 1);

/* Published by CAPCOM */
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Devil May Cry 5", "2019-03-08", 50, "devilmay.jpg", "The ultimate Devil Hunter is back in style, in the 
game action fans have been waiting for.", 2, 2);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("MONSTER HUNTER: WORLD", "2018-08-09", 60, "mhw.jpg" , "Welcome to a new world! In Monster Hunter: 
World, the latest installment in the series, you can enjoy the ultimate hunting experience, using everything 
at your disposal to hunt monsters in a new world teeming with surprises and excitement.", 2, 2);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("RESIDENT EVIL 2 / BIOHAZARD RE:2", "2019-01-25", 40, "residentevil2.png" , "A deadly virus engulfs the residents 
of Raccoon City in September of 1998, plunging the city into chaos as flesh eating zombies roam the streets
 for survivors. An unparalleled adrenaline rush, gripping storyline, and unimaginable horrors await you. 
 Witness the return of Resident Evil 2.", 2, 2);

/* Published by 2K */
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("BioShock Infinite", "2013-03-26", 30, "bioshock.png" , "Indebted to the wrong people, with his life on the line,
 veteran of the U.S. Cavalry and now hired gun, Booker DeWitt has only one opportunity to wipe his slate
  clean. He must rescue Elizabeth, a mysterious girl imprisoned since childhood and locked up in the flying
   city of Columbia.", 3, 3);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Borderlands 3", "2019-09-13", 60, "borderlands3.jpg" , "The original shooter-looter returns, packing bazillions 
of guns and a mayhem-fueled adventure! Blast through new worlds & enemies and save your home from the most
 ruthless cult leaders in the galaxy.", 4, 3);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Sid Meier???s Civilization VI", "2016-10-21", 60, "civilization.jpg" , "Civilization VI offers new ways to interact
 with your world, expand your empire across the map, advance your culture, and compete against history???s
  greatest leaders to build a civilization that will stand the test of time.", 5, 3);

/* Published by Valve */
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Half-Life: Alyx", "2020-03-23", 50, "halflife.jpg" , "Half-Life: Alyx is Valve???s VR return to the Half-Life
 series. It???s the story of an impossible fight against a vicious alien race known as the Combine, set between 
 the events of Half-Life and Half-Life 2. Playing as Alyx Vance, you are humanity???s only chance for 
 survival.", 6, 4);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Portal 2", "2011-04-19", 9, "portal2.jpg" , "The 'Perpetual Testing Initiative' has been expanded to allow 
you to design co-op puzzles for you and your friends!", 6, 4);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Left 4 Dead 2", "2009-11-17", 9, "l4d2.jpg" , "Set in the zombie apocalypse,This co-operative action
 horror FPS takes you and your friends through the cities, swamps and cemeteries of the Deep South,
  from Savannah to New Orleans ", 6, 4);

/* Published by Square Enix */
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("NieR:Automata", "2017-03-17", 40, "automata.jpg" , "NieR: Automata tells the story of androids 2B, 9S and A2
 and their battle to reclaim the machine-driven dystopia overrun by powerful machines.", 7, 5);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("FINAL FANTASY XIV", "2014-02-18", 10, "finalfantasy.jpg" , "Take part in an epic and ever-changing FINAL FANTASY
 as you adventure and explore with friends from around the world.", 8, 5);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("DRAGON QUEST?? XI: Echoes of an Elusive Age", "2017-07-29", 60, "dragonquest.jpg" , "DRAGON QUEST?? XI: Echoes
 of an Elusive Age??? follows the perilous journey of a hunted Hero who must uncover the mystery of
  his fate with the aid of a charismatic cast of supporting characters.", 8, 5);

/* Published by Activision */

insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Call of Duty: Black Ops", "2010-11-9", 40, "codbo.jpg" , " The biggest action series of all time returns. Call of Duty??: 
Black Ops is an entertainment experience that will take you to conflicts across the globe, as elite Black Ops forces
 fight in the deniable operations and secret wars that occurred under the veil of the Cold War. ", 12, 7);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Call of Duty: Modern Warfare 3", "2011-11-8", 40, "codmw3.jpg" , " Modern Warfare is back. The best-selling first person 
action series of all-time returns with the epic sequel to multiple Game of the Year award winner,
 Call of Duty??: Modern Warfare 2.", 9, 7);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Call of Duty: Black Ops II", "2012-11-13", 40, "codbo2.jpg" , "Pushing the boundaries of what fans have come to expect 
from the record-setting entertainment franchise, Call of Duty??: Black Ops II propels players into a near future, 21st
 Century Cold War, where technology and weapons have converged to create a new generation of warfare.", 12, 7);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Call of Duty: Modern Warfare", "2019-9-12", 60, "codmw2019.jpg" , "The iconic first-person shooter game is back! Cross play,
 free maps and modes, and new engine deliver the largest technical leap in Call of Duty history.", 11, 7);

/* Published by Ubisoft */

insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Tom Clancy???s Rainbow Six: Siege", "2015-12-7", 20, "r6s.jpg" , "Discover the most tactical FPS on PC, PS4 and Xbox One.
 Choose your operators for intense 5v5 team matches on one of our numerous iconic maps.", 9, 6);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Assasin???s Creed Origins", "2017-10-27", 60, "acorigins.jpeg" , "Sail down the Nile, uncover the mysteries of the pyramids or 
fight your way against dangerous ancient factions and wild beasts as you explore this gigantic and unpredictable 
land.", 9, 6);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Assasin???s Creed Odyssey", "2018-10-5", 60, "acodyssey.jpg" , "Write your own epic odyssey and become a legendary Spartan 
hero in Assassin???s Creed Odyssey, an inspiring adventure where you must forge your destiny and define your own path 
in a world on the brink of tearing itself apart. Influence how history unfolds as you experience a rich and
 ever-changing world shaped by your decisions.", 10, 6);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Far Cry 5", "2018-3-27", 60, "farcry5.jpg" , "Welcome to Hope County, Montana, home to a fanatical doomsday cult known 
as Eden???s Gate. Stand up to cult leader Joseph Seed & his siblings, the Heralds, to spark the fires of resistance & liberate the 
besieged community.", 9, 6);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Monopoly Plus", "2014-11-25", 15, "monopoly.jpg" , "With a colorful and 3D lively city animated by funny little sidekicks,
 Monopoly+ brings the classic franchise to a new level.", 13, 6);

/* Published by EA */

insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("FIFA 19", "2018-9-28", 40, "fifa19.jpg" , "FIFA 19 delivers a champion???s caliber-experience on and off the pitch. Led by 
the prestigious UEFA Champions League, FIFA 19 offers enhanced gameplay mechanics that allow you control the pitch in 
every moment.", 14, 8);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Battlefield 1", "2016-10-10", 40, "battlefield1.jpg" , "Battlefield 1 takes you back to The Great War, WW1, where new technology 
and worldwide conflict changed the face of warfare forever. Take part in every battle, control every massive vehicle, 
and execute every maneuver that turns an entire fight around. The whole world is at war ??? see what???s beyond the 
trenches.", 15, 8);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Battlefield V", "2018-11-20", 40, "battlefieldv.jpg" , "The Battlefield series goes back to its roots in a never-before-seen 
portrayal of World War 2. Take on physical, all-out multiplayer with your squad in modes like the vast Grand Operations 
and the cooperative Combined Arms, or witness human drama set against global combat in the single player War Stories.
 As you fight in epic, unexpected locations across the globe, enjoy the richest and most immersive Battlefield yet.
  Now also includes Firestorm ??? Battle Royale, reimagined for Battlefield.", 15, 8);

/* Published by Bethesda Softworks */
	
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("DOOM Eternal", "2020-03-19", 60, "doom.jpg" ,  "Hell???s armies have invaded Earth. Become the Slayer in an epic 
single-player campaign to conquer demons across dimensions and stop the final destruction of humanity.", 16, 10);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Fallout 76", "2018-11-14", 40, "fallout76.jpg" ,  "Work together with other players, or not, to survive. Experience the 
largest and most dynamic world ever created in the Fallout universe with major free updates which grow and evolve
 the game with new and different ways to play. Play solo or join together as you explore, quest, build, and triumph 
 against the wasteland???s greatest threats.", 17, 10);

/* Published by Sega */

insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Total War: Warhammer", "2016-05-24", 60, "warhammer.jpg" , "Addictive turn-based empire-building with colossal, real-time
 battles. All set in a world of legendary heroes, giant monsters, flying creatures and storms of magical power"
, 18, 11);

/* Published by Codemasters */

insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("DiRT 4", "2016-06-06", 25, "dirt4.jpg" , "DiRT 4 is all about embracing fear. It???s about the thrill, exhilaration and 
adrenaline that is absolutely vital to off-road racing. It???s about loving the feeling of pushing flat out next to a 
sheer cliff drop, going for the gap that???s too small and seeing how much air you can get. Be Fearless.", 19, 12);

/* Published by Psyonix */

insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Rocket League", "2015-07-07", 10, "rocket.jpg" , "Rocket League is a high-powered hybrid of arcade-style soccer and 
vehicular mayhem with easy-to-understand controls and fluid, physics-driven competition"
, 20, 13);

/* Xbox One (ja pc) */

insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Sea of Thieves", "2018-3-20", 40, "seaofthieves.jpg" , "The freedom of a pirate paradise unfolds before you! Find 
a crew or go solo, exploring the world at your own pace. Follow the threads of tall tales, make deals with 
Trading Companies and take your pick of Voyages leading to Pirate Legend glory.", 21, 14);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Forza Motorsport 7", "2017-10-3", 40, "forza7.jpg" , "Forza Motorsport 7 immerses players in the exhilarating
 thrill of competitive racing. From mastering the new motorsport-inspired campaign to collecting a wide range 
 of cars to experiencing the excitement of driving at the limit, this is Forza reimagined.", 22, 14);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Halo 5: Guardians", "2015-10-27", 20, "halo5.jpg" , "Peace has been devastated as colony worlds are unexpectedly 
attacked. What's more, when humanity's greatest hero goes missing, a new Spartan is assigned the task of hunting
 the Master Chief and solving a mystery that threatens the whole of the galaxy.", 23, 14);

/* Ps4 */

insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("God of War", "2018-4-20", 30, "godofwar.jpg" , "Kratos is a father again. As mentor and protector to Atreus,
 a son determined to earn his respect, he is forced to deal with and control the rage that has long defined
  him while out in a very dangerous world with his son.", 24, 15);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Concrete Genie", "2019-10-8", 35, "concrete.jpg" , "Concrete Genie follows the heartwarming journey of a bullied
 teen named Ash, who escapes his troubles by bringing his colorful imagination to life in his sketchbook, while
  exploring his hometown of Denska ??? a once bright and bustling seaside town now polluted by Darkness.", 25, 15);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Yakuza 6: The Song of Life", "2018-4-17", 30, "yakuza6.jpg" , "Yakuza 6 features an emotional story that examines 
the strength of family relationships, and highlights an improved battle systems that seamlessly transitions between
 battles and between explorable areas.", 26, 11);


insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("DARK SOULS III", "2016-04-11", 60, "dark3.jpg" , "Dark Souls continues to push the boundaries with the latest,
 ambitious chapter in the critically-acclaimed and genre-defining series. Prepare yourself and Embrace The 
 Darkness!", 27, 16);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Sekiro: Shadows Die Twice", "2019-03-21", 60, "sekiro.jpg" , "Carve your own clever path to vengeance in the 
award winning adventure from developer FromSoftware, creators of Bloodborne and the Dark Souls series. 
Take Revenge. Restore Your Honor. Kill Ingeniously.", 27, 7);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Bloodborne", "2015-03-24", 30, "bloodborne.jpg" , "Face your fears as you search for answers in the ancient city
 of Yharnam, now cursed with a strange endemic illness spreading through the streets like wildfire. Danger, 
 death and madness lurk around every corner of this dark and horrific world, and you must discover its darkest 
 secrets in order to survive.", 27, 15);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Persona 5", "2016-09-15", 40, "persona5.jpg" , "Persona 5 takes place in modern-day Tokyo and follows Joker 
after his transfer to Shujin Academy due to being put on probation for an assault of which he was falsely 
accused. During a school year, he and other students awaken to special powers, becoming a group of secret 
vigilantes known as the Phantom Thieves of Hearts. ", 28, 17);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Horizon Zero Dawn", "2017-02-28", 50, "horizon.jpg" , "Horizon Zero Dawn is an action role-playing game 
played from a third-person view. Players take control of Aloy, a hunter who ventures through a post-apocalyptic 
land ruled by robotic creatures.", 29, 15);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Marvel's Spider-Man", "2018-09-07", 50, "spider.jpg" , "When Mister Negative threatens to release a deadly virus,
 Spider-Man must confront him and protect the city while dealing with the personal problems of his civilian 
 persona, Peter Parker.", 30, 15);

/* Nintendo Switch */
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Animal Crossing: New Horizons", "2020-03-20", 60, "animal.jpg" , "Animal Crossing: New Horizons is a nonlinear 
life simulation game played in real-time. The player assumes the role of a customizable character who moves
 to a deserted island after purchasing a deserted island package from Tom Nook.", 31, 18);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("The Legend of Zelda: Breath of the Wild", "2017-03-03", 60, "tloz.jpg" , "No kingdom. No memories. After a 
100-year slumber, Link wakes up alone in a world he no longer remembers. Now the legendary hero must explore 
a vast and dangerous land and regain his memories before Hyrule is lost forever. Armed only with what he can 
scavenge, Link sets out to find answers and the resources needed to survive.", 31, 18);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Pok??mon Sword and Shield", "2019-10-15", 60, "pkmss.jpg" , "Sword and Shield are extremely familiar and
 comfortable thanks to a pretty traditional setup: you pick one of three starter Pokemon and then head 
 off across the Galar region to capture and train more, defeat eight unique and exciting gym challenges,
  and become a Pokemon master", 32, 18);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Super Smash Bros. Ultimate", "2018-12-07", 60, "smbulti.jpg" , "Super Smash Bros. Ultimate looks to the 
tactical mechanics of traditional fighting games, and then chucks them into a sandpit of all your favorite 
toys ??? throwing together characters from Pokemon, Legend of Zelda, Super Mario, Metroid, Animal Crossing, 
and countless other Nintendo or third-party IP", 33, 18);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Super Mario Odyssey", "2017-10-27", 60, "smo.jpg" , "Super Mario Odyssey is a platform game in which 
players control Mario as he travels across many different worlds, known as 'Kingdoms', on the hat-shaped 
ship Odyssey, to rescue Princess Peach from Bowser, who plans to forcibly marry her.", 32, 18);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Splatoon 2", "2017-07-21", 60, "splatoon2.jpg" , "Like its predecessor, Splatoon 2 is a third-person shooter
 in which players control characters, known as Inklings and Octolings, and use colored ink as ammunition. 
 Ink is also used to cover the ground, or any paintable surface, in order to swim or refill their ink 
 tanks.", 32, 18);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Fire Emblem: Three Houses", "2019-07-26", 60, "fire.jpg" , "Three Houses is set on the continent of F??dlan,
 divided between three rival nations now at peace, connected through the Garreg Mach Monastery. Taking the
  role of a former mercenary and new tutor at Garreg Mach, the player must choose a nation to support and
   guide them through a series of battles.", 34, 18);
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("Octopath Traveler", "2018-07-13", 30, "octopath.jpg" , "Eight travelers. Eight adventures. Eight roles to play. Embark
 on an epic journey across the vast and wondrous world of Orsterra and discover the captivating stories
  of each of the eight travelers.", 8, 5);

/* Consoles */

insert into tuote (title,  price, picture, description, developer_id, publisher_id)
  values ("Nintendo Switch with Neon Blue and Neon Red Joy???Con" , 349, "nintendoswitch_console.jpg" ,"Get the gaming 
  system that lets you play the games you want, wherever you are, however you like.", 35 , 19);

insert into tuote (title,  price, picture, description, developer_id, publisher_id)
  values ("PlayStation 4 Pro 1TB Console" , 379, "ps4_consolepro.jpg", "Battle friends and foes with the Sony 
  PlayStation 4 Pro console. Its 1TB capacity lets you store plenty of games without an external hard drive, 
  and the dual-shock controller improves your hands-on gaming experience. See enemies in clear, vibrant detail 
  with the included HDMI cable of the Sony PlayStation 4 Pro console.", 35 , 19);

insert into tuote (title,  price, picture, description, developer_id, publisher_id)
  values ("Xbox One X 1TB Console" , 299, "xone_xconsole.jpg", "Games play better on Xbox One X. Experience 40 
  percent more power than any other console. 6 teraflops of graphical processing power and a 4K Blu ray player 
  provides more immersive gaming and entertainment. Play with the greatest community of gamers on the most advanced 
  multiplayer network. Works with all your Xbox One games and accessories. Great for 1080p screens games run smoothly,
   look great, and load quickly.", 35 , 19); 


/* Gaming controllers */


insert into tuote (title,  price, picture, description, developer_id, publisher_id)
  values ("DualShock 4 Wireless Controller for PlayStation 4" , 59,"ps4_controller.jpg" ,"he DualShock 4 Wireless
   Controller features familiar controls, and incorporates several innovative features to usher in a new era of 
   interactive experiences. Its definitive analog sticks and trigger buttons have been improved for greater feel 
   and sensitivity. A multi touch, clickable touch pad expands gameplay possibilities, while the incorporated light 
   bar in conjunction with the PlayStation Camera allows for easy player identification and screen adjustment when 
   playing with friends in the same room.", 35 , 19);

insert into tuote (title,  price, picture, description, developer_id, publisher_id)
  values ("Microsoft - Wireless Controller for Xbox One and Windows 10 " , 55,"xbox_controller_wireless.jpg" ,"Capture
   all the fine detail with this Xbox wireless controller. Extra-comfortable grips and a streamlined design make 
   gaming more the joy than ever before, and powerful wireless connectivity gives you even more range and connects 
   you to Windows 10 PCs and devices. Create the ideal setup with this Xbox wireless controller thanks to custom button 
   mapping.", 35 , 19);

insert into tuote (title,  price, picture, description, developer_id, publisher_id)
  values ("PDP - Wired Controller for PC and Microsoft Xbox One - Black camo" , 29,"xbox_controller_wired.jpg" ,"Execute
   video game moves smoothly with this PDP wired controller for the Xbox One. Its nonslip grips, textured trigger and 
   shoulder buttons provide sturdy, comfortable use, and the vibration feedback and impulse triggers let you feel the 
   action of the game. This PDP wired controller is also PC-compatible, and it has built-in audio controls for 
   convenient sound adjustment.", 35 , 19);

insert into tuote (title,  price, picture, description, developer_id, publisher_id)
  values ("Xbox Elite Wireless Controller Series 2" , 169 ,"xbox_controller_series2elite.jpg" ,"Designed to meet the 
  needs of today???s competitive gamers, the all-new Xbox Elite Wireless Controller Series 2 features over 30 new ways 
  to play like a pro. Enhance your aiming with new adjustable-tension thumbsticks, fire even faster with shorter hair 
  trigger locks, and stay on target with a wrap-around rubberized grip.", 35 , 19);

insert into tuote (title,  price, picture, description, developer_id, publisher_id)
  values ("Thrustmaster T150 RS Racing Wheel for PlayStation4, PlayStation3 and PC" , 199,"playstation_racingset.jpg" ,"Official 
  Racing Simulator for PS4 and PS3 (also compatible with PC); 1080 degree force feedback racing wheel; Built-in PS4/PS3 
  sliding switch; Realistic wheel; Large pedal set included.", 35 , 19);

insert into tuote (title,  price, picture, description, developer_id, publisher_id)
  values ("LOGITECH Driving Force G920 Xbox One & PC Racing Wheel & Pedals" , 239,"xbox_racingset.jpg" ,"The Logitech 
  Driving Force G920 Racing Wheel gives you the definitive racing experience for Xbox One and PC.", 35 , 19);

insert into tuote (title,  price, picture, description, developer_id, publisher_id)
  values ("Nintendo Switch Pro Wireless controller" , 75, "nintendo_switch_procontroller.jpg", "Take your game
   sessions up a notch with the Nintendo Switch Pro Controller. Includes motion controls, HD rumble, built in 
   amiibo functionality, and more. Comes with charging cable (USB C to USB A)", 35 , 19);

/* Gaming displays */

insert into tuote (title,  price, picture, description, developer_id, publisher_id)
  values ("LG - UltraGear 27 inch IPS LED FHD FreeSync Monitor" , 299,"lg_display27.jpg" ,"Game seamlessly with the 
  quality visuals of this LG 27-inch UltraGear Full HD monitor. AMD FreeSync technology reduces screen tearing and 
  stuttering, while Dynamic Action Sync helps minimize input delays for fluid gameplay. This LG 27-inch UltraGear 
  Full HD monitor has a 178-degree viewing angle, which delivers crisp, detailed images regardless of your vantage 
  point.", 35 , 19);

insert into tuote (title,  price, picture, description, developer_id, publisher_id)
  values ("MSI - Optix MAG240VC 23.6 inch LED Curved FHD FreeSync Monitor" , 199,"msi_display23.jpg" ,"Marvel at 
  stunning PC graphics with this 23.6-inch MSI Optix gaming monitor. It has AMD FreeSync technology for stutter-free 
  display, and the 144Hz refresh rate and 1 ms response time ensure a smooth flow of fast-paced scenes. This curved, 
  Full HD MSI Optix gaming monitor has HDMI, DisplayPort and DVI ports for versatile connectivity.", 35 , 19);

insert into tuote (title,  price, picture, description, developer_id, publisher_id)
  values ("Acer - Predator XB272 27 inch LED FHD G-SYNC Monitor" , 599,"acer_display27.jpg" ,"Get a better view of 
  the enemy in dark spaces with this 27-inch Acer Predator XB2 gaming monitor. Full HD and NVIDIA G-SYNC and ULMB 
  technology decrease blur and ghosting to make images clearer. The lightning-fast 240Hz refresh rate and 1ms response 
  time of this Acer Predator XB2 gaming monitor mean your shot reaches the target faster.", 35 , 19);

/* Gaming chairs */
insert into tuote (title,  price, picture, description, developer_id, publisher_id)
  values ("X Rocker V Rocker SE Black Foam Floor Video Gaming Chair for Adult, Teen, and Kid Gamers -2.1 High Tech 
  Audio and Wireless Capacity - Foldable and Ergonomic Back Support" , 69,"chair_nolegs.jpg" ,"Fuel your gaming 
  experience with the V Rocker multimedia game chair. Fully immerse yourself into games, movies, and music with Ace 
  Bayou's high tech audio system. This chair features two speakers near the head rest and a built-in subwoofer 
  positioned to pound your back with bass-heavy sound effects or music.", 35 , 19);

insert into tuote (title,  price, picture, description, developer_id, publisher_id)
  values ("JUMMICO Gaming Chair Ergonomic Executive Office Desk Chair High Back Leather Swivel Computer Racing Chair 
  with Lumbar Support" , 80,"gaming_chair.jpg" ,"Our gaming chair is crafted to perfection and designed to the bodies 
  natural shape, high-quality soft leather provides extra comfort. It is a Perfect choice for gaming, working and 
  studying.", 35 , 19);

/* Virtual Reality */

insert into tuote (title,  price, picture, description, developer_id, publisher_id)
  values ("Oculus - Rift S PC-Powered VR Gaming Headset" , 399,"vr_oculus.jpg" ,"Step into virtual reality with this 
  Oculus Rift S PC-powered headset. The advanced optics produce a sharp display with bright, vivid colors, and Oculus 
  Insight tracking removes the need for external sensors to convert movements into virtual reality. This Oculus Rift 
  S PC-powered headset has a fit wheel that secures the headset with a quick twist.", 35 , 19);

insert into tuote (title,  price, picture, description, developer_id, publisher_id)
  values ("Sony - Refurbished PlayStation VR" , 199,"vr_ps4.jpg" ,"Explore worlds with this factory-recertified Sony 
  PlayStation VR Core headset. Its 5.7-inch OLED display lets you experience dynamic environments in Full HD, while 
  the three-axis accelerometer and gyroscope provide accurate motion tracking for smooth gaming. Connect this 
  refurbished Sony PlayStation VR Core headset to a PC, PS4 or other game console via its HDMI or USB 
  interface.", 35 , 19);

/* Other accessories */


insert into tuote (title,  price, picture, description, developer_id, publisher_id)
  values ("Kaliento : gaming hand warmer" , 39, "kaliento_hand_warmer.jpg", "Gaming with cold hands is over! 
  Increase your dexterity with the Kaliento, first gaming hand warmer. Designed for eSport, this small device has 
  the shape of a roller and will quickly become your essential accessory during your tournaments or just at home 
  when you want to succeed fantastic games.", 35 , 19);

insert into tuote (title,  price, picture, description, developer_id, publisher_id)
  values ("Razer Base Station Chroma, Chroma Enabled Headset Stand with USB Hub" , 79,"razer_headphonestand.jpg" ,"COMPACT. 
  CONNECT. READY FOR BATTLE. When it comes to the ideal setup, organization is the name of the game. The Razer Base 
  Station Chroma is a must-have for anyone looking to keep their setup minimal while packing functionality into a 
  small space. GET ORGANIZED When you've got a killer gaming setup, the last thing you need is your gear in a mess.", 35 , 19);


insert into tuote (title,  price, picture, description, developer_id, publisher_id)
  values ("HyperX???: Pulsefire Core??? Mouse" , 39,"mouse.jpg" ,"The HyperX Pulsefire Core??? delivers the essentials for 
  gamers looking for a solid, comfortable, wired RGB gaming mouse. The Pixart 3327 optical sensor gives players precise, 
  smooth tracking with no hardware acceleration, and has native DPI settings of up to 6200 DPI.", 35 , 19);

insert into tuote (title,  price, picture, description, developer_id, publisher_id)
  values ("HyperX???: Alloy Core RGB??? Keyboard" , 59,"keyboard.jpg" ,"Featuring HyperX???s signature radiant light bar 
  and smooth, dynamic RGB lighting effects, the HyperX Alloy Core RGB??? is ideal for gamers looking to enhance their 
  keyboard???s style and performance without breaking the bank. With six different lighting effects and three brightness 
  levels, it balances both brilliance and budget.", 35 , 19);

insert into tuote (title,  price, picture, description, developer_id, publisher_id)
  values ("Piranha: Rush Medium Mousepad" , 9,"mousepad.jpg" ,"High quality enhanced micro fiber surface for superior 
  glide and pixel precise tracking.", 35 , 19);

insert into tuote (title,  price, picture, description, developer_id, publisher_id)
  values ("Razer - RGB LED Knife" , 159,"knife_rgb.jpg" ,"Prepare your food at home with this knife like a REAL 
  PROFESSIONAL GAMER.", 35 , 19);

/*
insert into tuote (title, releaseDate, price, picture, description, developer_id, publisher_id)
values ("", "", , "" , "add description here", , );*/

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

/* Published by CDPR */
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


/* Published by CAPCOM */
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (4, 2);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (4, 3);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (4, 4);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (5, 2);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (5, 3);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (5, 4);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (6, 2);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (6, 3);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (6, 4);


/* Published by 2K */
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (7, 1);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (7, 4);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (8, 2);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (8, 3);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (8, 4);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (9, 1);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (9, 2);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (9, 3);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (9, 4);

/* Published by Valve */
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (10, 4);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (11, 4);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (12, 4);

/* Published by Square Enix */
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (13, 2);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (13, 4);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (14, 2);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (14, 3);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (14, 4);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (15, 1);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (15, 2);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (15, 4);

/* Published by Activision */
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (16, 4);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (17, 4);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (18, 2);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (18, 4);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (19, 2);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (19, 3);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (19, 4);



/* Published by Ubisoft */
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (20, 2);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (20, 3);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (20, 4);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (21, 2);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (21, 3);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (21, 4);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (22, 2);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (22, 3);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (22, 4);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (23, 2);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (23, 3);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (23, 4);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (24, 1);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (24, 2);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (24, 3);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (24, 4);


/* Published by EA */
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (25, 1);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (25, 2);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (25, 3);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (25, 4);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (26, 2);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (26, 3);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (26, 4);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (27, 2);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (27, 3);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (27, 4);


/* Published by Bethesda Softworks */
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (28, 1);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (28, 2);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (28, 3);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (28, 4);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (29, 2);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (29, 3);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (29, 4);


/* Published by Sega */
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (30, 4);


/* Published by Codemasters */
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (31, 2);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (31, 3); 
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (31, 4);


/* Published by Psyonix */
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (32, 1);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (32, 2);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (32, 3);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (32, 4);


/* Xbox One (ja pc) */
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (33, 3);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (33, 4);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (34, 3);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (34, 4);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (35, 3);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (35, 4);


/* Ps4 */
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (36, 2);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (37, 2);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (38, 2);


insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (39, 2);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (39, 3);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (39, 4);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (40, 2);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (40, 3);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (40, 4); 

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (41, 2);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (42, 2);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (43, 2);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (43, 4);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (44, 2);


/* Nintendo Switch */
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (45, 1);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (46, 1);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (47, 1);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (48, 1);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (49, 1);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (50, 1);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (51, 1);

insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (52, 1);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (52, 4);




/* Consoles */
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (53, 5);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (54, 5);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (55, 5);

/* Gaming controllers */
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (56, 5);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (57, 5);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (58, 5);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (59, 5);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (60, 5);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (61, 5);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (62, 5);

/* Gaming displays */
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (63, 5);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (64, 5);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (65, 5);

/* Gaming chairs */
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (66, 5);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (67, 5);

/* Virtual Reality */
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (68, 5);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (69, 5);

/* Other accessories */
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (70, 5);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (71, 5);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (72, 5);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (73, 5);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (74, 5);
insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (75, 5);

/*insert into tuoteryhma_tuote (tuote_id, tuoteryhma_id) values (, );*/



/******************************************************/

create table genre (
  id int primary key auto_increment,
  name varchar(255)
);

insert into genre (name) values ("Action"); /*1*/
insert into genre (name) values ("Adventure");/*2*/ 
insert into genre (name) values ("Fighting");/*3*/ 
insert into genre (name) values ("First Person Shooter");/*4*/ 
insert into genre (name) values ("Horror");/*5*/ 
insert into genre (name) values ("Multiplayer");/*6*/ 
insert into genre (name) values ("Open World");/*7*/ 
insert into genre (name) values ("RPG");/*8*/
insert into genre (name) values ("Single Player");/*9*/
insert into genre (name) values ("Sports");/*10*/
insert into genre (name) values ("Strategy");/*11*/
insert into genre (name) values ("Survival");/*12*/
insert into genre (name) values ("Turn Based");/*13*/
insert into genre (name) values ("Virtual Reality");/*14*/

insert into genre (name) values ("Consoles");/*15*/
insert into genre (name) values ("Gaming Controllers");/*16*/
insert into genre (name) values ("Gaming Displays");/*17*/
insert into genre (name) values ("Gaming Chairs");/*18*/
insert into genre (name) values ("Virtual Reality Devices");/*19*/
insert into genre (name) values ("Other Accessories");/*20*/

/******************************************************/

create table genre_tuote (
  tuote_id int not null,
  index (tuote_id),
  foreign key (tuote_id) references tuote(id)
  on delete restrict,
  genre_id int not null,
  index (genre_id),
  foreign key (genre_id) references genre(id)
  on delete restrict
);

/* Published by CDPR */
insert into genre_tuote (tuote_id, genre_id) values (1 ,1);
insert into genre_tuote (tuote_id, genre_id) values (1 ,4);
insert into genre_tuote (tuote_id, genre_id) values (1 ,7);
insert into genre_tuote (tuote_id, genre_id) values (1 ,8);
insert into genre_tuote (tuote_id, genre_id) values (1 ,9);

insert into genre_tuote (tuote_id, genre_id) values (2 ,8);
insert into genre_tuote (tuote_id, genre_id) values (2 ,9);

insert into genre_tuote (tuote_id, genre_id) values (3 ,1);
insert into genre_tuote (tuote_id, genre_id) values (3 ,2);
insert into genre_tuote (tuote_id, genre_id) values (3 ,7);
insert into genre_tuote (tuote_id, genre_id) values (3 ,8);
insert into genre_tuote (tuote_id, genre_id) values (3 ,9);



/* Published by CAPCOM */
insert into genre_tuote (tuote_id, genre_id) values (4 ,1);
insert into genre_tuote (tuote_id, genre_id) values (4 ,3);
insert into genre_tuote (tuote_id, genre_id) values (4 ,9);

insert into genre_tuote (tuote_id, genre_id) values (5 ,1);
insert into genre_tuote (tuote_id, genre_id) values (5 ,2);
insert into genre_tuote (tuote_id, genre_id) values (5 ,6);
insert into genre_tuote (tuote_id, genre_id) values (5 ,7);
insert into genre_tuote (tuote_id, genre_id) values (5 ,9);

insert into genre_tuote (tuote_id, genre_id) values (6 ,5);
insert into genre_tuote (tuote_id, genre_id) values (6 ,9);


/* Published by 2K */
insert into genre_tuote (tuote_id, genre_id) values (7 ,1);
insert into genre_tuote (tuote_id, genre_id) values (7 ,2);
insert into genre_tuote (tuote_id, genre_id) values (7 ,4);
insert into genre_tuote (tuote_id, genre_id) values (7 ,8);
insert into genre_tuote (tuote_id, genre_id) values (7 ,9);

insert into genre_tuote (tuote_id, genre_id) values (8 ,1);
insert into genre_tuote (tuote_id, genre_id) values (8 ,2);
insert into genre_tuote (tuote_id, genre_id) values (8 ,4);
insert into genre_tuote (tuote_id, genre_id) values (8 ,6);
insert into genre_tuote (tuote_id, genre_id) values (8 ,7);
insert into genre_tuote (tuote_id, genre_id) values (8 ,8);
insert into genre_tuote (tuote_id, genre_id) values (8 ,9);

insert into genre_tuote (tuote_id, genre_id) values (9 ,6);
insert into genre_tuote (tuote_id, genre_id) values (9 ,9);
insert into genre_tuote (tuote_id, genre_id) values (9 ,11);
insert into genre_tuote (tuote_id, genre_id) values (9 ,13);



/* Published by Valve */
insert into genre_tuote (tuote_id, genre_id) values (10 ,1);
insert into genre_tuote (tuote_id, genre_id) values (10 ,2);
insert into genre_tuote (tuote_id, genre_id) values (10 ,4);
insert into genre_tuote (tuote_id, genre_id) values (10 ,9);
insert into genre_tuote (tuote_id, genre_id) values (10 ,14);

insert into genre_tuote (tuote_id, genre_id) values (11 ,1);
insert into genre_tuote (tuote_id, genre_id) values (11 ,2);
insert into genre_tuote (tuote_id, genre_id) values (11 ,6);
insert into genre_tuote (tuote_id, genre_id) values (11 ,9);

insert into genre_tuote (tuote_id, genre_id) values (12 ,2);
insert into genre_tuote (tuote_id, genre_id) values (12 ,4);
insert into genre_tuote (tuote_id, genre_id) values (12 ,5);
insert into genre_tuote (tuote_id, genre_id) values (12 ,6);
insert into genre_tuote (tuote_id, genre_id) values (12 ,9);
insert into genre_tuote (tuote_id, genre_id) values (12 ,12);



/* Published by Square Enix */
insert into genre_tuote (tuote_id, genre_id) values (13 ,1);
insert into genre_tuote (tuote_id, genre_id) values (13 ,2);
insert into genre_tuote (tuote_id, genre_id) values (13 ,7);
insert into genre_tuote (tuote_id, genre_id) values (13 ,8);
insert into genre_tuote (tuote_id, genre_id) values (13 ,9);

insert into genre_tuote (tuote_id, genre_id) values (14 ,1);
insert into genre_tuote (tuote_id, genre_id) values (14 ,6);
insert into genre_tuote (tuote_id, genre_id) values (14 ,7);
insert into genre_tuote (tuote_id, genre_id) values (14 ,8);
insert into genre_tuote (tuote_id, genre_id) values (14 ,9);

insert into genre_tuote (tuote_id, genre_id) values (15 ,1);
insert into genre_tuote (tuote_id, genre_id) values (15 ,2);
insert into genre_tuote (tuote_id, genre_id) values (15 ,7);
insert into genre_tuote (tuote_id, genre_id) values (15 ,8);
insert into genre_tuote (tuote_id, genre_id) values (15 ,9);



/* Published by Activision */
insert into genre_tuote (tuote_id, genre_id) values (16 ,1);
insert into genre_tuote (tuote_id, genre_id) values (16 ,4);
insert into genre_tuote (tuote_id, genre_id) values (16 ,5);
insert into genre_tuote (tuote_id, genre_id) values (16 ,6);
insert into genre_tuote (tuote_id, genre_id) values (16 ,9);
insert into genre_tuote (tuote_id, genre_id) values (16 ,12);

insert into genre_tuote (tuote_id, genre_id) values (17 ,1);
insert into genre_tuote (tuote_id, genre_id) values (17 ,4);
insert into genre_tuote (tuote_id, genre_id) values (17 ,6);
insert into genre_tuote (tuote_id, genre_id) values (17 ,9);
insert into genre_tuote (tuote_id, genre_id) values (17 ,12);

insert into genre_tuote (tuote_id, genre_id) values (18 ,1);
insert into genre_tuote (tuote_id, genre_id) values (18 ,4);
insert into genre_tuote (tuote_id, genre_id) values (18 ,6);
insert into genre_tuote (tuote_id, genre_id) values (18 ,9);
insert into genre_tuote (tuote_id, genre_id) values (18 ,12);

insert into genre_tuote (tuote_id, genre_id) values (19 ,1);
insert into genre_tuote (tuote_id, genre_id) values (19 ,4);
insert into genre_tuote (tuote_id, genre_id) values (19 ,9);
insert into genre_tuote (tuote_id, genre_id) values (19 ,10);
insert into genre_tuote (tuote_id, genre_id) values (19 ,12);



/* Published by Ubisoft */
insert into genre_tuote (tuote_id, genre_id) values (20 ,1);
insert into genre_tuote (tuote_id, genre_id) values (20 ,4);
insert into genre_tuote (tuote_id, genre_id) values (20 ,6);
insert into genre_tuote (tuote_id, genre_id) values (20 ,9);
insert into genre_tuote (tuote_id, genre_id) values (20 ,11);

insert into genre_tuote (tuote_id, genre_id) values (21 ,1);
insert into genre_tuote (tuote_id, genre_id) values (21 ,2);
insert into genre_tuote (tuote_id, genre_id) values (21 ,6);
insert into genre_tuote (tuote_id, genre_id) values (21 ,7);
insert into genre_tuote (tuote_id, genre_id) values (21 ,8);
insert into genre_tuote (tuote_id, genre_id) values (21 ,9);

insert into genre_tuote (tuote_id, genre_id) values (22 ,1);
insert into genre_tuote (tuote_id, genre_id) values (22 ,2);
insert into genre_tuote (tuote_id, genre_id) values (22 ,7);
insert into genre_tuote (tuote_id, genre_id) values (22 ,8);
insert into genre_tuote (tuote_id, genre_id) values (22 ,9);

insert into genre_tuote (tuote_id, genre_id) values (23 ,1);
insert into genre_tuote (tuote_id, genre_id) values (23 ,2);
insert into genre_tuote (tuote_id, genre_id) values (23 ,4);
insert into genre_tuote (tuote_id, genre_id) values (23 ,6);
insert into genre_tuote (tuote_id, genre_id) values (23 ,7);
insert into genre_tuote (tuote_id, genre_id) values (23 ,9);
insert into genre_tuote (tuote_id, genre_id) values (23 ,12);

insert into genre_tuote (tuote_id, genre_id) values (24 ,6);
insert into genre_tuote (tuote_id, genre_id) values (24 ,9);
insert into genre_tuote (tuote_id, genre_id) values (24 ,11);
insert into genre_tuote (tuote_id, genre_id) values (24 ,13);



/* Published by EA */
insert into genre_tuote (tuote_id, genre_id) values (25 ,6);
insert into genre_tuote (tuote_id, genre_id) values (25 ,9);
insert into genre_tuote (tuote_id, genre_id) values (25 ,10);

insert into genre_tuote (tuote_id, genre_id) values (26 ,1);
insert into genre_tuote (tuote_id, genre_id) values (26 ,4);
insert into genre_tuote (tuote_id, genre_id) values (26 ,6);
insert into genre_tuote (tuote_id, genre_id) values (26 ,7);
insert into genre_tuote (tuote_id, genre_id) values (26 ,9);

insert into genre_tuote (tuote_id, genre_id) values (27 ,1);
insert into genre_tuote (tuote_id, genre_id) values (27 ,4);
insert into genre_tuote (tuote_id, genre_id) values (27 ,6);
insert into genre_tuote (tuote_id, genre_id) values (27 ,7);
insert into genre_tuote (tuote_id, genre_id) values (27 ,9);



/* Published by Bethesda Softworks */
insert into genre_tuote (tuote_id, genre_id) values (28 ,1);
insert into genre_tuote (tuote_id, genre_id) values (28 ,2);
insert into genre_tuote (tuote_id, genre_id) values (28 ,4);
insert into genre_tuote (tuote_id, genre_id) values (28 ,5);
insert into genre_tuote (tuote_id, genre_id) values (28 ,6);
insert into genre_tuote (tuote_id, genre_id) values (28 ,9);

insert into genre_tuote (tuote_id, genre_id) values (29 ,1);
insert into genre_tuote (tuote_id, genre_id) values (29 ,2);
insert into genre_tuote (tuote_id, genre_id) values (29 ,4);
insert into genre_tuote (tuote_id, genre_id) values (29 ,6);
insert into genre_tuote (tuote_id, genre_id) values (29 ,7);
insert into genre_tuote (tuote_id, genre_id) values (29 ,8);
insert into genre_tuote (tuote_id, genre_id) values (29 ,9);
insert into genre_tuote (tuote_id, genre_id) values (29 ,12);



/* Published by Sega */
insert into genre_tuote (tuote_id, genre_id) values (30 ,1);
insert into genre_tuote (tuote_id, genre_id) values (30 ,6);
insert into genre_tuote (tuote_id, genre_id) values (30 ,8);
insert into genre_tuote (tuote_id, genre_id) values (30 ,9);
insert into genre_tuote (tuote_id, genre_id) values (30 ,11);
insert into genre_tuote (tuote_id, genre_id) values (30 ,13);




/* Published by Codemasters */
insert into genre_tuote (tuote_id, genre_id) values (31 ,1);
insert into genre_tuote (tuote_id, genre_id) values (31 ,6);
insert into genre_tuote (tuote_id, genre_id) values (31 ,9);
insert into genre_tuote (tuote_id, genre_id) values (31 ,10);


/* Published by Psyonix */
insert into genre_tuote (tuote_id, genre_id) values (32 ,1);
insert into genre_tuote (tuote_id, genre_id) values (32 ,6);
insert into genre_tuote (tuote_id, genre_id) values (32 ,9);
insert into genre_tuote (tuote_id, genre_id) values (32 ,12);
insert into genre_tuote (tuote_id, genre_id) values (32 ,14);



/* Xbox One (ja pc) */
insert into genre_tuote (tuote_id, genre_id) values (33 ,1);
insert into genre_tuote (tuote_id, genre_id) values (33 ,2);
insert into genre_tuote (tuote_id, genre_id) values (33 ,6);
insert into genre_tuote (tuote_id, genre_id) values (33 ,7);

insert into genre_tuote (tuote_id, genre_id) values (34 ,1);
insert into genre_tuote (tuote_id, genre_id) values (34 ,6);
insert into genre_tuote (tuote_id, genre_id) values (34 ,9);
insert into genre_tuote (tuote_id, genre_id) values (34 ,10);

insert into genre_tuote (tuote_id, genre_id) values (35 ,1);
insert into genre_tuote (tuote_id, genre_id) values (35 ,4);
insert into genre_tuote (tuote_id, genre_id) values (35 ,6);
insert into genre_tuote (tuote_id, genre_id) values (35 ,9);



/* Ps4 */
insert into genre_tuote (tuote_id, genre_id) values (36 ,1);
insert into genre_tuote (tuote_id, genre_id) values (36 ,2);
insert into genre_tuote (tuote_id, genre_id) values (36 ,8);
insert into genre_tuote (tuote_id, genre_id) values (36 ,9);

insert into genre_tuote (tuote_id, genre_id) values (37 ,1);
insert into genre_tuote (tuote_id, genre_id) values (37 ,2);
insert into genre_tuote (tuote_id, genre_id) values (37 ,9);

insert into genre_tuote (tuote_id, genre_id) values (38 ,1);
insert into genre_tuote (tuote_id, genre_id) values (38 ,2);
insert into genre_tuote (tuote_id, genre_id) values (38 ,7);
insert into genre_tuote (tuote_id, genre_id) values (38 ,8);
insert into genre_tuote (tuote_id, genre_id) values (38 ,9);


insert into genre_tuote (tuote_id, genre_id) values (39 ,1);
insert into genre_tuote (tuote_id, genre_id) values (39 ,2);
insert into genre_tuote (tuote_id, genre_id) values (39 ,6);
insert into genre_tuote (tuote_id, genre_id) values (39 ,8);
insert into genre_tuote (tuote_id, genre_id) values (39 ,9);

insert into genre_tuote (tuote_id, genre_id) values (40 ,1);
insert into genre_tuote (tuote_id, genre_id) values (40 ,2);
insert into genre_tuote (tuote_id, genre_id) values (40 ,8);
insert into genre_tuote (tuote_id, genre_id) values (40 ,9);

insert into genre_tuote (tuote_id, genre_id) values (41 ,1);
insert into genre_tuote (tuote_id, genre_id) values (41 ,2);
insert into genre_tuote (tuote_id, genre_id) values (41 ,5);
insert into genre_tuote (tuote_id, genre_id) values (41 ,6);
insert into genre_tuote (tuote_id, genre_id) values (41 ,8);
insert into genre_tuote (tuote_id, genre_id) values (41 ,9);

insert into genre_tuote (tuote_id, genre_id) values (42 ,1);
insert into genre_tuote (tuote_id, genre_id) values (42 ,8);
insert into genre_tuote (tuote_id, genre_id) values (42 ,9);
insert into genre_tuote (tuote_id, genre_id) values (42 ,11);
insert into genre_tuote (tuote_id, genre_id) values (42 ,13);

insert into genre_tuote (tuote_id, genre_id) values (43 ,1);
insert into genre_tuote (tuote_id, genre_id) values (43 ,2);
insert into genre_tuote (tuote_id, genre_id) values (43 ,7);
insert into genre_tuote (tuote_id, genre_id) values (43 ,8);
insert into genre_tuote (tuote_id, genre_id) values (43 ,9);

insert into genre_tuote (tuote_id, genre_id) values (44 ,1);
insert into genre_tuote (tuote_id, genre_id) values (44 ,2);
insert into genre_tuote (tuote_id, genre_id) values (44 ,7);
insert into genre_tuote (tuote_id, genre_id) values (44 ,9);



/* Nintendo Switch */
insert into genre_tuote (tuote_id, genre_id) values (45 ,6);
insert into genre_tuote (tuote_id, genre_id) values (45 ,9);

insert into genre_tuote (tuote_id, genre_id) values (46 ,1);
insert into genre_tuote (tuote_id, genre_id) values (46 ,2);
insert into genre_tuote (tuote_id, genre_id) values (46 ,7);
insert into genre_tuote (tuote_id, genre_id) values (46 ,8);
insert into genre_tuote (tuote_id, genre_id) values (46 ,9);

insert into genre_tuote (tuote_id, genre_id) values (47 ,1);
insert into genre_tuote (tuote_id, genre_id) values (47 ,2);
insert into genre_tuote (tuote_id, genre_id) values (47 ,6);
insert into genre_tuote (tuote_id, genre_id) values (47 ,7);
insert into genre_tuote (tuote_id, genre_id) values (47 ,8);
insert into genre_tuote (tuote_id, genre_id) values (47 ,9);
insert into genre_tuote (tuote_id, genre_id) values (47 ,11);
insert into genre_tuote (tuote_id, genre_id) values (47 ,13);

insert into genre_tuote (tuote_id, genre_id) values (48 ,1);
insert into genre_tuote (tuote_id, genre_id) values (48 ,3);
insert into genre_tuote (tuote_id, genre_id) values (48 ,6);
insert into genre_tuote (tuote_id, genre_id) values (48 ,9);

insert into genre_tuote (tuote_id, genre_id) values (49 ,1);
insert into genre_tuote (tuote_id, genre_id) values (49 ,2);
insert into genre_tuote (tuote_id, genre_id) values (49 ,9);

insert into genre_tuote (tuote_id, genre_id) values (50 ,1);
insert into genre_tuote (tuote_id, genre_id) values (50 ,6);
insert into genre_tuote (tuote_id, genre_id) values (50 ,9);

insert into genre_tuote (tuote_id, genre_id) values (51 ,1);
insert into genre_tuote (tuote_id, genre_id) values (51 ,8);
insert into genre_tuote (tuote_id, genre_id) values (51 ,9);
insert into genre_tuote (tuote_id, genre_id) values (51 ,11);
insert into genre_tuote (tuote_id, genre_id) values (51 ,13);

insert into genre_tuote (tuote_id, genre_id) values (52 ,1);
insert into genre_tuote (tuote_id, genre_id) values (52 ,2);
insert into genre_tuote (tuote_id, genre_id) values (52 ,8);
insert into genre_tuote (tuote_id, genre_id) values (52 ,9);
insert into genre_tuote (tuote_id, genre_id) values (52 ,11);
insert into genre_tuote (tuote_id, genre_id) values (52 ,13);

/* Consoles */
insert into genre_tuote (tuote_id, genre_id) values (53, 15);
insert into genre_tuote (tuote_id, genre_id) values (54, 15);
insert into genre_tuote (tuote_id, genre_id) values (55, 15);

/* Gaming controllers */
insert into genre_tuote (tuote_id, genre_id) values (56, 16);
insert into genre_tuote (tuote_id, genre_id) values (57, 16);
insert into genre_tuote (tuote_id, genre_id) values (58, 16);
insert into genre_tuote (tuote_id, genre_id) values (59, 16);
insert into genre_tuote (tuote_id, genre_id) values (60, 16);
insert into genre_tuote (tuote_id, genre_id) values (61, 16);
insert into genre_tuote (tuote_id, genre_id) values (62, 16);

/* Gaming displays */
insert into genre_tuote (tuote_id, genre_id) values (63, 17);
insert into genre_tuote (tuote_id, genre_id) values (64, 17);
insert into genre_tuote (tuote_id, genre_id) values (65, 17);

/* Gaming chairs */
insert into genre_tuote (tuote_id, genre_id) values (66, 18);
insert into genre_tuote (tuote_id, genre_id) values (67, 18);

/* Virtual Reality */
insert into genre_tuote (tuote_id, genre_id) values (68, 19);
insert into genre_tuote (tuote_id, genre_id) values (69, 19);

/* Other accessories */
insert into genre_tuote (tuote_id, genre_id) values (70, 20);
insert into genre_tuote (tuote_id, genre_id) values (71, 20);
insert into genre_tuote (tuote_id, genre_id) values (72, 20);
insert into genre_tuote (tuote_id, genre_id) values (73, 20);
insert into genre_tuote (tuote_id, genre_id) values (74, 20);
insert into genre_tuote (tuote_id, genre_id) values (75, 20);



/******************************************************/

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

create table asiakas (
    id int primary key auto_increment,
    firstname varchar(100),
    lastname varchar(100),
    address varchar(100),
    postcode char(5),
    postoffice varchar(100),
    email varchar(255),
    phone varchar(20)
);

create table tilaus (
  id int primary key auto_increment,
  tila enum ('tilattu', 'toimitettu', 'maksettu'),
  tilattu timestamp default current_timestamp,
  asiakas_id int not null,
  index (asiakas_id),
  foreign key (asiakas_id) references asiakas(id)
  on delete restrict
);

create table tilausrivi (
  tilaus_id int not null,
  index (tilaus_id),
  foreign key (tilaus_id) references tilaus(id)
  on delete restrict,
  tuote_id int not null,
  index (tuote_id),
  maksu varchar(50),
  toimitus varchar(50),
  foreign key (tuote_id) references tuote(id)
  on delete restrict,
  maara smallint
);

/******************************************************/

create table contact (
  id int primary key auto_increment,
  name varchar(100) not null,
  email varchar(100) not null,
  subject varchar(50) not null,
  message text,
  saved timestamp default current_timestamp
);

create table review (
  id int primary key auto_increment,
  name varchar(100) not null,
  subject varchar(50) not null,
  message text,
  saved timestamp default current_timestamp
);

 insert into review (name, subject, message, saved)
values ("Customer Y", "Razer - RGB LED Knife",
 "I love this knife. Everytime I play games I'll use this knife to make toast with my RGB toaster. Recommend this knife for all gamers so you can make toast like a professional gamer.", "2020-04-20 16:21:52");

insert into review (name, subject, message, saved)
values ("Customer X", "This is demo subject",
 "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
  Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.", "2020-04-26 18:14:18");

 
/******************************************************/

/* 
List of genres:

Used: 
- Action
- Adventure
- Fighting
- First Person Shooter (FPS)
- Horror
- Multiplayer
- Open World
- RPG
- Racing
- Single Player
- Sports
- Strategy
- Survival
- Turn Based
- Virtual Reality (VR)

Unused
- Action RPG (ARPG)
- JRPG
- MMORPG
- Visual Novel
- Stealth
- Rhythm
- Sandbox
- Party Game
- Platform
- Card Game

*/

/* List of devices and accessories in genres
- Consoles
- Gaming controllers
- Gaming displays
- Gaming chairs
- Virtual Reality
- Other gaming accessories
 */