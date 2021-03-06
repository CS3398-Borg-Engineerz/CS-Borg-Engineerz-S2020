# CS-Borg-Engineerz-S2020

### **Engineers**
* Josh Armstrong
* Bailey Cheung
* Chance Martin
* Ola Nzeogu

### **Team Goal**
Our goal is to create a web application that will help Texas State students find organizations and clubs based on their interests. This team is working together to build a platform for clubs so that students can find organizations that spark new and old interests and help them find organizations they want to be a part of.

### **General Info**
Our Web Application will allow students to filter through organizations of interest, learn about the organization's meeting times, upcoming events and purpose, as well as suggest additional organizations that the user may be interested in. This application will extract the information from our Database, which we have created based on the current clubs and organizations at Texas State University. Additional features of the Application will be discussed below.

### **Web Application Core Functionalities**
* Search bar that looks up an organization from our DB based on the name typed into the search field
* Organization home page with all relevant information, i.e. meeting times, upcoming events, organization leader's contact information, social media links.  
* Organizations will be tagged with attributes based on what their organization does. CS clubs have CS tags, Math club have math tags, freshman friendly tags, etc.
* Organization meeting times and events will be populated into a calendar, and after clicking the event, relevant details will pop up
* Users can log onto their profile pages to see what organizations they are a part of and as an officer, edit any pertinent information on the organization's home page.


### **Web Application Additional Features (to be added)**
* Check list of interests that the student can check that correlate to different organizations.
* Suggestions of similar clubs based on the organization that you search.
* Organizations will be able to edit their information and tags.
* Each organization will have tags that can be used to suggest other organizations for the student to join.

### **Technologies**
*  MySQL Workbench - used to create local DB
*  draw.io - DB planning and graphical representation
*  azure - remote server
*  PHP - used to communicate with the MySQL database from front end
*  LAMP stack - used to develop web application from backend to frontend

## **1st Sprint Task Summary**
As a team we are researching our DB, UI, UX design and are implementing the design of our web application layout.

**DB**
* (Bailey Cheung, createDBqueries.sql and DBvisual.png) Analyzed possible DB resources and servers before deciding on MySQL Workbench. Created and organized the desired DB features/attributes using an online tool that included primary keys, relationships and visual table aids (DBvisual.png, draw.io). Created a DB in MySQL workbench and inserted dummy values to mimic on campus organizations using scripts created from my diagram and research (createDBqueries.sql).  Create a remote server on azure for local DB to connect to.
* (Chance Martin, OrgValues.sql) Assisted in DB creation by creating list of scripts to add to tables. Featuring dummy info for multiple clubs, including meeting times, event info, and member info.
* (name, artifacts as specified in assignment 8) description of work  

**UI**
* (Josh Armstrong, Basic drawing of homepages.png and index.html/index.php, 5.php, 2.php) Made drawings to map out what our user interface is going to look like. Planned a common header/theme that will apply to all pages. index.html and index.php is our front page design that includes our search bar, it uses PHP to communicate with the database and search it based on what the user enters. 5.php, and 2.php are two demo pages for the clubs.
* (Ola Nzeogu, sidebar.html and table.html) Created a sidebar feature for the homepage with all the links going to google and created an information table for some random organizations with the necessary information.

**UX**
* (Chance Martin, Usecases.md) List of use cases that are implemented or to be implemented. To be used as guidelines to add features.
* (name, artifacts as specified in assignment 8) description of work  

## **Team Members Next Steps**
* Josh - Create the pages that our side bar links to. Pull data from the database to automate as much as we can instead of trying to make a page for every single club.
* Ola - Assist in the creation of the pages on the sidebar and use the database to upload more information about the organizations to the table and pages.
* Bailey - Connect the Database to a cloud server in Azure to allow remote access - PHP edits. Create HTML/CSS template for webpages.
* Chance - Built more robust DB and front end connection. Add club tagging DB. Build system for officer editing club info.

## **2nd Sprint Task Summary**
**Login Functionalities with Corresponding User Profile Page**
* (Bailey Cheung) - PR 36 (see for artifacts): Created a login page (HTML/CSS and PHP files) and added a login table to the database (SQL files). PR 38 (see for artifacts): Created a user profile page (HTML/CSS and PHP files) that pull an organization member's information from the database and formats into a profile page - beautification needed. Officer (will be) able to edit organization page preferences. PR 41 (see for artifacts): Created algorithm base code for organization suggestions for students based on current organizations that they are a part of (Java file, MySQL files).

**Club Information Page**
* Chance Martin - club_page_design.pdf (Found in documentation file):  An example of finished club page product. clubtemplate.php, clubstyle.css (Found in clubpage file in frontend file): Created club page (PHP and CSS file) that pulls information from the database and presents it for specific club after it is selected in the search- will need refactoring when new info is added to DB. 

**Search Bar**
* (Josh Armstrong) - search.php, configSoftEng.php, index.php: finished the search.php page and made it set a cookie using sessino_start() so i could share a variable with Chance's club.php page. Doing so allowed us to create on page that can be populated with data instead of making a new page for every single club. configSoftEng.php seperates the database login from the rest of the code and uses variables to use msqli. So it's a better way to connect opposed to myslq which i set up before and can be easily edited when changing login/DB info. With index.php i seperated the header and sidebar and put them in a header.php file so they can be imported into a page instead of being on every single page.

**Calendar Page**
* (Ola Nzeogu) - Created a calendar page that pulls events from the database and populates the calendar page for students to find activities they may be interested in easier. All the supproting sode can be found in the Event Calendar folder; they are separated by file type ie CSS folder JS folder etc.

## **Team Members Next Steps**
* Josh - Make the other tabs link to pages with more info - Events, Gallery. Split my files up so there is no duplicated code and instead can import the header/footer so it's easier to maintain. Clean up code where needed and explain what it does so when i/someone else looks back on it in the future there is no guessing
* Ola - Assist with the creation of other pages and fix any existing bugs with the calendar page.
* Bailey - Flesh out the organization tag algorithm and beatify my PHP login code and logic - refactor as much as possible. Add any additional functionality to login page that team determines is necessary, beautification may also be needed. 
* Chance - Add images and biography info to DB, reformat club page code, incorporate better presentation of future events to club page, possibly add calendar to club page. 

## **3rd Sprint Task Summary**
**Login Functionalities with Corresponding User Profile Page enhancement**
* (Bailey Cheung) - PR 53 (Refactor Profile Page): Enhance Profile Page HTML layout and CSS to be more user friendly; PR 54 (Tag Algorithm) and PR 55 (Driver.java and TagArray.java): Refactor algorithm to be object oriented and to create unique tags at runtime based on what the user defines, is not connected with data base (logic is in java)
* (Chance Martin) - (Add images to Database and Club Page): Figured out how to hold images with the database; (addImagesQueries.sql) Updated club page to pull all fields from the database. (clubstyle.css, clubtemplate.php)
* (Josh Armstrong) - (Complete sidebar features:about us, events): Create the pages for the sidebar features that house an events page similar to the calendar but in a listed format instead of a calendar and create an about us page with some basic instructions on how to use the website and what are mission is. 

## **Team Mascot**
![alt text](https://github.com/CS3398-Borg-Engineerz/CS-Borg-Engineerz-S2020/blob/master/Borg.jpg)
