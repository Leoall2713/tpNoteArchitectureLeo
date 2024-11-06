DROP DATABASE plateformeStreaming;
CREATE DATABASE plateformeStreaming;
USE plateformeStreaming;

CREATE table films(
id_film varchar(50) NOT NULL PRIMARY key,
titre varchar(50) not null,
duree int,
annee int);
  
CREATE table acteurs(
  	id_acteur varchar(50) primary key,
   	nom varchar(155),
    prenom varchar(155),
    role varchar(500),
    dateDeNaissance date);
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
  
insert into films values(1,"Avatar",160,2009);
insert into films values(2,"La vie aquatique",120,2004);
insert into films values(3,"The Grand Budapest Hotel",90,2014);
insert into films values(4,"Titanic",150,1997);
insert into films values(5,"Dune",160,2021);
insert into films values (6,"L'amour ouf",160,2024);

insert into acteurs values(1,"Worthington","Sam","Jake Sully",STR_TO_DATE('02/08/76', '%d/%m/%y'));
insert into acteurs values(2,"Saldana","Zoe","Neytiri",STR_TO_DATE('10/09/78', '%d/%m/%y'));
insert into acteurs values(3,"Murray","Bill","Steve Zissous",STR_TO_DATE('21/09/50', '%d/%m/%y'));
insert into acteurs values(4,"Dafoe","Willem","Klaus Daimler",STR_TO_DATE('22/07/55', '%d/%m/%y'));
insert into acteurs values(5,"Fiennes","Ralph","M. Gustave",STR_TO_DATE('02/03/63', '%d/%m/%y'));
insert into acteurs values (6,"Dafoe","Willem","Jopling",STR_TO_DATE('22/07/55', '%d/%m/%y'));
insert into acteurs values (7,"Dicaprio","Leonardo","Jack Dawson",STR_TO_DATE('22/10/75', '%d/%m/%y'));
insert into acteurs values (8,"Chalamet","Thimothee","Paul Atreide",STR_TO_DATE('29/07/01', '%d/%m/%y'));
insert into acteurs values (9,"Civil","François","Clotaire",STR_TO_DATE('29/01/90', '%d/%m/%y'));

insert into realisateurs values(1,"Cameron","James");
insert into realisateurs values(2,"Anderson","Wes");
insert into realisateurs values(3,"Villeneuve","Denis");
insert into realisateurs values(4,"Lellouche","Gilles");

INSERT into utilisateurs values(1,"all","lele","lele@gmail.com","Leleall");
INSERT into utilisateurs values(2,"Gi","Ra","ra@gmail.com","Gira");
INSERT into utilisateurs values(3,"Cam","Ju","ju@gmail.com","Camju");