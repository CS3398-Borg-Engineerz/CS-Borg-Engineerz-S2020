public class TagArray {
    String tag;
    TagQueue orgs; 
    TagArray (){
        this.orgs = null; 
    }
    public void setTag(String t){
        this.tag = t; 
    }
    public String getTag(){
        return this.tag;
    }
    public void setOrgs(String club){
        if(this.orgs == null){
            TagQueue tagOrgs = new TagQueue(); 
            this.orgs = tagOrgs; 
        }
        tagOrgs.enqueue(club); 
    }
    public void deleteOrgs(String club){
        tagsOrgs.dequeue(club);
    }
    public void viewOrgs(){
        tagOrgs.viewOrgs(); 
    }
}