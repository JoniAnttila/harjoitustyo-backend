DROP DATABASE IF EXISTS harjoitustyo;

CREATE DATABASE harjoitustyo; 


CREATE TABLE `user` (
  id int primary key auto_increment,
  fname varchar(50) not null,
  lname varchar(100) not null,
  email varchar(100) not null UNIQUE,
  password varchar(255) not null
);

insert into user(fname,lname,email,password) values ('Sami','Santeri','samisanteri@gmail.com','$2y$10$t8WCBkoztrg6l56clbvkN.HCBnWHVB7pgTy4xCfUYw5Eyk5UNHZgm');

insert into user(fname,lname,email,password) values ('Essi','Esimerkki','essiesimerkki@gmail.com','$2y$10$pFdKzKiyMk7ukXIDJWdyQ.1TjyoH7kAWfm6xGKxj8l26.ECV.i/CO');
