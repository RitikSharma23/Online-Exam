create database exam;

create table student(
    roll int AUTO_INCREMENT UNIQUE,
    fname varchar(20), 
    lname varchar(20),
    phone varchar(10) UNIQUE,
    email varchar(60) UNIQUE,
    semester int,
    uid char(20) PRIMARY KEY);

INSERT into student (roll,fname,lname,phone,email,semester,uid) values (
    1,'Ritik','Sharma','8866892314','ritikss748@gmail.com',3,'21004500210167');
INSERT into student (fname,lname,phone,email,semester,uid) values (
   'Shanu','Pandey','9106692865','shanukumarpandey2003@gmail.com',3,'21004500210088');   