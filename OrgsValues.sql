INSERT INTO Organization (name, category, dues)
VALUES ('.EXE', 'pre_graduate', '35')

INSERT INTO Organization (name, category, dues)
VALUES ('Math Club', 'academic', '25')

INSERT INTO Organization (name, category, dues)
VALUES ('Writing Club', 'arts', '10')

INSERT INTO Organization (name, category, dues)
VALUES ('Gym Club', 'fitness', '20')

INSERT INTO Organization (name, category, dues)
VALUES ('Nursing Club', 'health', '35')

INSERT INTO Meetings (org_id, meeting_location, meeting_time, meeting_day)
VALUES ('Nursing Club', 'INGRAM 4103', '12:00 pm', '4/23/2020')

INSERT INTO Meetings (org_id, meeting_location, meeting_time, meeting_day)
VALUES ('.EXE', 'INGRAM 4103', '7:00 pm', '3/12/2020')

INSERT INTO Events (org_id, category, event_location, event_time, event_day)
VALUES ('Nursing Club', 'Hospital Expo', 'LBJ 1.10', '11:00 am', '5/11/2020')

INSERT INTO Events (org_id, category, event_location, event_time, event_day)
VALUES ('Math Club', 'Division Tutoring', 'DERR 237', '6:00 pm', '2/07/2020')

INSERT INTO Member (org_name, member_name, graduation_year, officer, status)
VALUES ('Gym Club', 'Biff Flanksteak', '2020', 'president', 'current _member')

INSERT INTO Member (org_name, member_name, graduation_year, officer, status)
VALUES ('Writing Club', 'Ted Writerson', '2021', 'president', 'current _member')

INSERT INTO Member (org_name, member_name, graduation_year, officer, status)
VALUES ('Nursing Club', 'Alice Allison', '2020', 'president', 'current _member')

INSERT INTO Member (org_name, member_name, graduation_year, officer, status)
VALUES ('Math Club', 'Frank Numpy', '2020', 'president', 'current _member')

INSERT INTO Member (org_name, member_name, graduation_year, officer, status)
VALUES ('.EXE', 'Bill Hackerman', '2022', 'president', 'current _member')