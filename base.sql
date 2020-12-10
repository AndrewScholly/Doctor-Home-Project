DROP TABLE IF EXISTS users CASCADE;
DROP TABLE IF EXISTS patient CASCADE;
DROP TABLE IF EXISTS appointments CASCADE;
DROP TABLE IF EXISTS doctor CASCADE;
DROP TABLE IF EXISTS caregiver CASCADE;

CREATE TABLE users(
  Role varchar NOT NULL,
  Fname varchar(10) NOT NULL,
  Lname varchar(10) NOT NULL,
  Email_id bigint NOT NULL,
  Phone int(10)NOT NULL,
  Password bytea NOT NULL,
  Date_of_birth int(10) NOT NULL,
  Family_code int,
  Emergency_contact int(10),
  Relation_to_contact varchar,
  salary bigint
);

CREATE TABLE patient(
  name varchar(10) NOT NULL,
  pid varchar(7) NOT NULL,
  morning_med varchar(20),
  afternoon_med varchar(20),
  night_med varchar(20),
  breakfast varchar(20),
  lunch varchar(20),
  dinner varchar(20),
  missed_activity varchar(20),
  Group varchar(20),
  Admission_date varchar(20)
  age bigint
);
CREATE TABLE doctor(
  d_name varchar(10),
  d_appointment varchar(20),
  future_date date;
  comment varchar(50);
);
CREATE TABLE caregiver(
  Cname varchar(10)
)
CREATE table payment(
  total_due bigint,
  new_payment bigint
)
CREATE TABLE new(
  Role2 varchar NOT NULL,
  Fname2 varchar(10) NOT NULL,
  Lname2 varchar(10) NOT NULL,
  Email_id2 bigint NOT NULL,
  Phone2 int(10)NOT NULL,
  Password2 bytea NOT NULL,
  Date_of_birth2 int(10) NOT NULL,
  Family_code2 int,
  Emergency_contact2 int(10),
  Relation_to_contact2 varchar,
  salary2 bigint
)
