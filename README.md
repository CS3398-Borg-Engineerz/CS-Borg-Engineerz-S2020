# CS-Borg-Engineerz-S2020

### **Engineers**
* Josh Armstrong 
* Bailey Cheung 
* Chance Martin 
* Ola Nzeogu

### **Team Goal**
Our goal is to create a web application that will help Texas State students find organizations and clubs based on their interests. This team is working together to build a platform for clubs so that students can find organizations that spark new and old interests and help them find organizations they want to be a part of.

### **General Info**
Our Web Applicaiton will allow students to filter through organizations of interest, learn about the organizaiton's meeting times, upcoming events and purpose, as well as suggest additional organizations that the user may be interested in. This appliction will extract the information from our Database, which we have created based on the current clubs and organizations at Texas State University. Additional features of the Application will be discussed below.

### **Web Application Core Functionalities**
* Search bar that looks up an organization from our DB based on the name typed into the search field
* Organization home page with all relevant information, ie meeting times, upcoming events, organization leader's contact information, social media links.  
* Organizations will be tagged with attributes based on what their organization does. CS clubs have CS tags, Math club have math tags, freshman friendly tags, etc 
* Organization meeting times and events will be populated into a calendar, and after clicking the event, relevant details will pop up 
*


### **Web Application Additonal Features (to be added)**
* Check list of interests that the student can check that correlate to different organizations 
* Suggestions of similar clubs based on the organization that you search
* Organizations will be able to edit their information and tags.
*

### **Technologies**	
*  mySQL Workbench - used to generate server and DB connection 
*  draw.io - DB planning and graphical representation 
*  PHP - used to communicate with the mySQL database from front end

## **1st Sprint Task Summary**	
As a team we are researching our DB, UI, UX design and are implementing the design of our web applicaiton layout.

**DB** 
* (Bailey Cheung, studentOrgDB.2.27.sql and DBvisual.png) Analyzed possible DB resources and servers before decideing on MySQL Workbench. Created and organized the desired DB features/attributes using an online tool that included primary keys, relationships and visual table aids (draw.io). Created a DB in mySQL workbench and inserted dummy values to mimic on campus organizations using scripts created from my diagram and research (studentORGDB.2.27.sql). 
* (Chance Martin, OrgValues.sql) Assisted in DB creation by creating list of scripts to add to tables. Featuring dummy info for multiple clubs, including meeting times, event info, and member info. 
* (name, artifacts as specified in assignment 8) description of work  

**UI** 
* (Josh Armstrong, Basic drawing of homepages.png and index.html) Made drawings to map out what our user inteface is going to look like. Planned a common header/theme that will apply to all pages. index.html is our front page design that includes our search bar, it uses php to communicate with the database and search it based on what the user enters.
* (Ola Nzeogu, sidebar.html and table.html) Created a sidebar feature for the homepage with all the links going to google and created an information table for some random organizations with the necessary information.

**UX** words
* (Chance Martin, Usecases.md) List of use cases that are implemented or to be implemented. To be used as guidelines to add features. 
* (name, artifacts as specified in assignment 8) description of work  

## **Team Members Next Steps**
* Josh - Create the pages that our side bar links to. Pull data from the database to automate as much as we can instead of trying to make a page for every single club.
* Ola - Assist in the creation of the pages on the sidebar and use the database to upload more information about the organizations to the table and pages.
* Bailey - Connect the Database to a cloud server in Azure to allow remote access. 
* Chance - Built more robust DB and front end connection. Add club tagging DB. Build system for officer editing club info. 

## **2nd Sprint Task Summary**	
As a team we are implementing our DB, UI, UX design into code. 

## **3rd Sprint Task Summary**	
Testing with use cases and debugging. 

## **4th Sprint Task Summary**	
If time allows, implement additional features. 

## **Team Mascot**
![alt text](https://github.com/CS3398-Borg-Engineerz/CS-Borg-Engineerz-S2020/blob/master/Borg.jpg)
