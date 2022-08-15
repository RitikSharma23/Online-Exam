create database exam;

create table student(
    fname varchar(20),
    lname varchar(20),
    phone varchar(20) PRIMARY KEY,
    email varchar(20) UNIQUE,
    uid varchar(20));
    