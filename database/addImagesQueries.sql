#insert logo table
alter table organization
 add logo varchar(100) 
	after name;

#example of what the logo collumn holds. Holds file paths instead of image blobs for better scaling
update organization
	set logo = "\\logos\\statler.jpg"
	where id = 1;

#add officer photos collumn to hold officer photo filepath
alter table member
	add officer_pic varchar(100)
    after member_name;

#example of adding officer photo to specific member
update member
	set officer_pic = "\\officer_photos\\baker1.jpg"
    where member_name = 'test testerman';

