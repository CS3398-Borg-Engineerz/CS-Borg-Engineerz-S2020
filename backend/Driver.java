public class Test { 
    public static void main(String[] args) { 
        TagArray tag1 = new TagArray(); 
        tag1.setTag("tag1");
        tag1.setOrgs("club_name1");
        tag1.setOrgs("club_name2");
        tag1.setOrgs("club_name3");

        TagArray tag2 = new TagArray(); 
        tag2.setTag("tag2");
        tag2.setOrgs("club_name1");
        tag2.setOrgs("club_name2");
        tag2.setOrgs("club_name3");

        TagArray tag3 = new TagArray(); 
        tag3.setTag("tag3");
        tag3.setOrgs("club_name1");
        tag3.setOrgs("club_name2");
        tag3.setOrgs("club_name3");

        tag1.deleteOrgs("club_name1");
        tag2.viewOrgs();
    }
}