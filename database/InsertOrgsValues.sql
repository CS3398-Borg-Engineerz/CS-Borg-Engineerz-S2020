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

INSERT INTO Org_Member (org_id, member_name, graduation_year, member_status, paid_dues, email, officer_status)
VALUES (4, 'Biff Flanksteak', '2020', TRUE, TRUE, 'meatboy87@school.edu', FALSE),
 (5, 'Sally Susan', '2020', TRUE, TRUE, 'nurselady5@school.edu', FALSE),
 (3, 'Larry Writerson', '2021', TRUE, TRUE,'bigwords@school.edu', FALSE),
 (2, 'Billy Boolean', '2023', TRUE, TRUE, 'divisionman@school.edu', FALSE),
 (1, 'Cody Coderson', '2020', TRUE, TRUE, 'codemonkey@school.edu', FALSE);