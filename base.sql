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
  accesslevel varchar NOT NULL,
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
  missed_activity varchar(20)
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
