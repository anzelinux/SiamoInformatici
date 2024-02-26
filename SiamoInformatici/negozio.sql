create database negozio;

use negozio;

create table CATEGORIA (
CodCat CHAR(2) not null,
DescrCat CHAR(20) not null,
primary key (CodCat));


create table UTENTE (
Id int (4) not null AUTO_INCREMENT,
User varchar (255) not null,
Pass varchar(255) not null,
primary key(Id)
);


create table PRODOTTO (
CodProd CHAR(5) not null,
CodCat CHAR(2) not null,
DescrProd CHAR(30) not null,
PrezzoProd DEC(5, 2) not null,
QtaRes int(3),
primary key (CodProd),
foreign key (CodCat)
references CATEGORIA (CodCat)

on delete Restrict
on update cascade
);
