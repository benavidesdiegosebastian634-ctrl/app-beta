create table users(
id_user bigint,
nombre char(20) not null, 
apellido char(20),
 telefono varchar unique, 
 email varchar unique, 
 password char (16) not null
 );