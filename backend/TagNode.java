import java.io; 

class TagNode{
    String tagOrg; 
    Node next; 
    //constructor to create new node with provide tag 
    public tagNode(String tagOrg){
        this.tagOrg = tagOrg;
        this.next = null; 
    }
}
