drop table films;
drop table acteurs; 
drop table realisateurs;
drop table utilisateurs;
CREATE table films(
id_film varchar(50) NOT NULL PRIMARY key,
titre varchar(50) not null,
duree int,
annee int);
  
CREATE table acteurs(
  	id_acteur varchar(50) primary key,
  	id_film varchar(50),
   	nom varchar,
    prenom varchar(155),
    role varchar(500),
    dateDeNaissance date)
    ;
CREATE table realisateurs(
  	id_real varchar(50) primary key,
   	nom varchar(155),
    prenom varchar(155));
CREATE table utilisateurs(
  	id_user varchar(50) primary key,
   	nom varchar(155),
   	prenom varchar(155),
	email varchar(155),
 	mdp varchar(50));
  
insert into films values(1,'Avatar',160,2009);
insert into films values(2,'La vie aquatique',120,2004);
insert into films values(3,'The Grand Budapest Hotel',90,2014);
insert into films values(4,'Titanic',150,1997);
insert into films values(5,'Dune',160,2021);
insert into films values (6,'L amour ouf',160,2024);

insert into acteurs values(1,1,'Worthington','Sam','Jake Sully','02/08/1976');
insert into acteurs values(2,1,'Saldana','Zoe','Neytiri','10/09/1978');
insert into acteurs values(3,2,'Murray','Bill','Steve Zissous','21/09/1950');
insert into acteurs values(4,2,'Dafoe','Willem','Klaus Daimler','22/07/1955');
insert into acteurs values(5,3,'Fiennes','Ralph','M. Gustave','02/03/1963');
insert into acteurs values (6,3,'Dafoe','Willem','Jopling','22/07/1955');
insert into acteurs values (7,4,'Dicaprio','Leonardo','Jack Dawson','22/10/1975');
insert into acteurs values (8,5,'Chalamet','Thimothee','Paul Atreide','29/07/2001');
insert into acteurs values (9,6,'Civil','François','Clotaire','29/01/1990');

insert into realisateurs values(1,'Cameron','James');
insert into realisateurs values(2,'Anderson','Wes');
insert into realisateurs values(3,'Villeneuve','Denis');
insert into realisateurs values(4,'Lellouche','Gilles');

INSERT into utilisateurs values(1,'all','lele','lele@gmail.com','Leleall');
INSERT into utilisateurs values(2,'Gi','Ra','ra@gmail.com','Gira');
INSERT into utilisateurs values(3,'Cam','Ju','ju@gmail.com','Camju');

select titre, annee from films order by annee DESC;

select * from acteurs a inner join films f on a.id_film=f.id_film where upper(titre)='AVATAR';

select * from acteurs a inner join films f on a.id_film=f.id_film where upper(nom)='DAFOE' and upper(prenom)='WILLEM';

insert into films values(7,'Avatar 2',180,2022);

insert into acteurs values(10,7,'Worthington','Sam','Jake Sully',date('02/08/1976'));

UPDATE filmsSET duree = 169 WHERE id_film = 1; 

delete from acteurs where id_acteur=2;

select * from acteurs order by id_acteur desc limit(3);

select titre,min(annee) as film_le_plus_ancien from films;

select * from acteurs order by substring(datedenaissance,7,4) desc limit(1);

select count(DISTINCT id_film) from films where annee=1990;

select titre,count(distinct id_acteur) as nb_acteur from acteurs a 
inner join films f on a.id_film=f.id_film group by a.id_film;