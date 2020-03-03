drop database studentorgsdb; 

CREATE DATABASE studentOrgsDB;

CREATE TABLE Organization (
  org_id int NOT NULL AUTO_INCREMENT,
  org_name varchar(100) NOT NULL,
  category ENUM ('FITNESS', 'ART', 'ACADEMIC', 'HEALTH', 'MUSIC'),
  PRIMARY KEY(org_id)
);

CREATE TABLE Meetings (
  meeting_org_id int NOT NULL AUTO_INCREMENT,
  meeting_location varchar(100),
  meeting_time time,
  meeting_day ENUM('MONDAY', 'TUESDAY', 'WEDNESDAY', 'THURSDAY', 'FRIDAY', 'SATURDAY', 'SUNDAY'),
  next_event_id int NOT NULL,
  dues boolean,
	primary key (next_event_id), 
    FOREIGN KEY (meeting_org_id)
        REFERENCES Organization (org_id)
        ON UPDATE RESTRICT ON DELETE CASCADE
);

CREATE TABLE Events (
  event_id int NOT NULL AUTO_INCREMENT, 
  event_name varchar(100),
  event_location varchar(100),
  event_time time,
  event_date date,
    FOREIGN KEY (event_id)
        REFERENCES Meetings (next_event_id)
        ON UPDATE RESTRICT ON DELETE CASCADE
);

CREATE TABLE Org_Member (
  org_id int,
  member_id int NOT NULL AUTO_INCREMENT, 
  member_name varchar(100),
  graduation_year int,
  member_status boolean,
  paid_dues boolean, 
  email varchar(150),
  officer_status boolean, 
  	PRIMARY KEY (member_id), 
    FOREIGN KEY (org_id)
        REFERENCES Organization (org_id)
);

CREATE TABLE Officer (
  member_id int,
  position ENUM ('PRESIDENT', 'VICE PRESIDENT', 'SECRETARY', 'SOCIAL MEDIA MANAGER', 'TREASURER', 'OTHER'),
  email varchar(150),
    FOREIGN KEY (member_id)
        REFERENCES Org_Member (member_id)
);
