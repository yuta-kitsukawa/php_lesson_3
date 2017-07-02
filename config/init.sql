create database creators_hive_login;
use creators_hive_login;
create table users(
  id int(6) not null auto_increment primary key,
  email varchar(255) unique,
  password varchar(255),
  created_at datatime,
  modified_at datatime,
);
