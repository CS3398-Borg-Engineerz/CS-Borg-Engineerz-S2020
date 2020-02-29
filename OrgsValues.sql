INSERT INTO Organization (org_name, category)
VALUES ('.EXE', 'ACADEMIC'),
 ('Math Club', 'ACADEMIC'),
 ('Writing Club', 'ART'),
 ('Gym Club', 'FITNESS'),
 ('Nursing Club', 'HEALTH');
 
INSERT INTO Meetings (meeting_location, meeting_time, meeting_day, next_event_id, dues)
VALUES ('INGRAM 4103', '12:00:00', 'MONDAY', 1, true),
('LBJ 1.10', '6:00:00', 'TUESDAY', 2, true),
('DERR 237', '7:00:00', 'WEDNESDAY', 3, true);

INSERT INTO Events (event_id, event_name, event_location, event_time, event_date)
VALUES (1, 'Hospital Expo', 'LBJ 1.10', '10:00:00', '2020-02-29'),
 (2, 'Division Tutoring', 'DERR 237', '6:00:00', '2020-02-07');

INSERT INTO org_member (org_name, member_name, graduation_year, officer, status)
VALUES ('Gym Club', 'Biff Flanksteak', '2020', 'president', 'current _member');

INSERT INTO org_member (org_name, member_name, graduation_year, officer, status)
VALUES ('Writing Club', 'Ted Writerson', '2021', 'president', 'current _member');

INSERT INTO org_member (org_name, member_name, graduation_year, officer, status)
VALUES ('Nursing Club', 'Alice Allison', '2020', 'president', 'current _member');

INSERT INTO org_member (org_name, member_name, graduation_year, officer, status)
VALUES ('Math Club', 'Frank Numpy', '2020', 'president', 'current _member');

INSERT INTO org_member (org_name, member_name, graduation_year, officer, status)
VALUES ('.EXE', 'Bill Hackerman', '2022', 'president', 'current _member');