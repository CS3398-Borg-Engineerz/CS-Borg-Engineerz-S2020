CREATE TABLE `Organization` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `category` ENUM ('fitness', 'arts', 'academic', 'health', 'pre_graduate'),
  `dues` int
);

CREATE TABLE `Meetings` (
  `org_id` int PRIMARY KEY,
  `meeting_location` varchar(255),
  `meeting_time` time,
  `meeting_day` date,
  `next_event` varhcar
);

CREATE TABLE `Events` (
  `org_id` int[pk],
  `category` varchar(255),
  `event_location` varchar(255),
  `event_time` time,
  `event_day` date
);

CREATE TABLE `Member` (
  `org_name` varchar(255) PRIMARY KEY,
  `member_name` varchar(255),
  `graduation_year` int,
  `officer` ENUM ('president', 'vice_president', 'secretary', 'social_media_manager', 'treasurer'),
  `status` ENUM ('current_member', 'arts', 'academic', 'health', 'pre_graduate')
);

CREATE TABLE `Leadership` (
  `position` ENUM ('president', 'vice_president', 'secretary', 'social_media_manager', 'treasurer') PRIMARY KEY,
  `office_location` varchar(255)
);

CREATE TABLE `Email_List` (
  `member_name` varchar(255) PRIMARY KEY,
  `email` varchar(255),
  `current_email_status` boolean
);

ALTER TABLE `Meetings` ADD FOREIGN KEY (`org_id`) REFERENCES `Organization` (`id`);

ALTER TABLE `Events` ADD FOREIGN KEY (`org_id`) REFERENCES `Organization` (`id`);

ALTER TABLE `Member` ADD FOREIGN KEY (`org_name`) REFERENCES `Organization` (`name`);

ALTER TABLE `Leadership` ADD FOREIGN KEY (`position`) REFERENCES `Member` (`officer`);

ALTER TABLE `Email_List` ADD FOREIGN KEY (`member_name`) REFERENCES `Member` (`member_name`);
