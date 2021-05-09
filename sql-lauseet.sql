DROP DATABASE IF EXISTS harjoitustyo;

CREATE DATABASE harjoitustyo; 

CREATE TABLE Kirja ( 
kirjaNimi VARCHAR(30) not null, 
kirjaNro INT AUTO_INCREMENT, 
hinta DECIMAL(9,2), 
kuvaus text, 

PRIMARY KEY (kirjaNro)
); 

CREATE TABLE `user` (
  id int primary key auto_increment,
  fname varchar(50) not null,
  lname varchar(100) not null,
  email varchar(100) not null UNIQUE,
  password varchar(255) not null
);

insert into user(fname,lname,email,password) values ('Sami','Santeri','samisanteri@gmail.com','$2y$10$t8WCBkoztrg6l56clbvkN.HCBnWHVB7pgTy4xCfUYw5Eyk5UNHZgm');

insert into user(fname,lname,email,password) values ('Essi','Esimerkki','essiesimerkki@gmail.com','$2y$10$pFdKzKiyMk7ukXIDJWdyQ.1TjyoH7kAWfm6xGKxj8l26.ECV.i/CO');

INSERT INTO KIRJA VALUES ("Jannen Kirja", "", 15.90, "Tämä Jannen kirja on aika hyvä."); 

insert into kirja (kirjaNimi, hinta,  kuvaus) values ("Beautiful Nights", 19.90, "Kaukaisessa Pariisissa yöt kuumuvat yllävän lämpimiksi."); 

insert into kirja (kirjaNimi, hinta, kuvaus)  
values ("Terror of London", 12.90, "Lontoon kaduilla vaanii julma olento."); 

insert into kirja (kirjaNimi, hinta, kuvaus)  
values ("Maamme Kauneus", 15.90, "Suomi on kaunis maa"); 

insert into kirja (kirjaNimi, hinta, kuvaus)  
values ("Jalkaväen Kauhein Hetki",25.50, "Ensimmäinen maailman sota tappoi enemmän ihmisiä kuin ensimmäinen maailmansota. Miksi näin oli? Mitkä tekijät tähän vaikutti?"); 

insert into kirja (kirjaNimi, hinta, kuvaus)  
values ("Matrix: Pitkä Matikka 1",30.00, "Pitkän matikan opiskelijoille."); 

insert into kirja (kirjaNimi, hinta, kuvaus)  
values ("Saariselän Ritarin Sapeli", 319.90, "Saariselän ritari on legendaarinen soturi. Hänen kuolemansa jätti kuningaskunnan ilman puolustajaa. Miten kuningaskunta pystyy vastustamaan nousevaa pimeää voimaa vuorten toisella puolella?");
