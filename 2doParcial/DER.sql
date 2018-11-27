CREATE DATABASE parcial;
USE parcial;

CREATE TABLE users(
  id_user int auto_increment,
  mail varchar(50),
  name varchar(50),
  pass varchar(50),
  CONSTRAINT pk_id_user primary key (id_user),
  CONSTRAINT unq_mail unique (mail)
);

CREATE TABLE real_states(
  id_real_state int auto_increment,
  id_user int,
  name varchar(50),
  description varchar(50),
  bedrooms varchar(50),
  parking boolean,
  price int,
  image varchar(200),
  CONSTRAINT pk_id_real_states primary key(id_real_state),
  CONSTRAINT fk_real_states foreign key (id_user) references users(id_user)
);

CREATE TABLE vehicles(
  id_vehicle int auto_increment,
  id_user int,
  name varchar(50),
  description varchar(50),
  year varchar(50),
  price int,
  image varchar(200),
  CONSTRAINT pk_id_vehicle primary key(id_vehicle),
  CONSTRAINT fk_vehicles foreign key (id_user) references users(id_user)
);
