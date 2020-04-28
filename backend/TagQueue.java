class TagQueue{ 
    TagNode front;
    TagNode rear; 
    //constructor to initialize the front and rear nodes to null 
    public tagQueue(){
        this.front = null;
        this.rear = null; 
    }
    //enqueue - add an org to the back of a tag list 
    //String org - the org name that is related to the tag 
    public void enqueue(String org){
        //create a new element for the tag and subsequent organizations following 
        TagNode tag = new TagNode(org); 
        if(this.front == null && this.rear == null){ //if the list is empty 
            this.front = tag;
        }
        else{ //if the list has at least one element 
            this.rear.next = tag; 
        }
        this.rear = tag; 
    }
    //dequeue - if it is found, remove an org from a tag's list 
    //String org - the org name that is related to the tag 
    public void dequeue(String org){
        Boolean found = false; //if the org is found in the list 
        if(this.front != this.rear){ //if there are a least two different orgs in the list, and the list is not empty 
            TagNode temp = new TagNode(); 
            TagNode prev = new TagNode(); 
            temp = this.front.next; 
            prev = this.front; 
            while(temp != null && !found){ //iterate through list until the end or until the org is found  
                if(temp.tagOrg == org){ //if the org is in the list
                    found = true; 
                    prev.next = temp.next; //set the previous org to the org following the current org
                }
                else if(temp != this.rear){ //org is not found, continue search 
                    temp = temp.next; 
                    prev = prev.next; 
                }
            }
        }
        else if(this.front != null && this.front.tagOrg == org){ //the only org in the list is the one to be removed
            this.front = this.rear = null; //resets front and rear to null 
            found = true; 
        }
        if(found){ //org is found in the list and successfully taken out 
            System.println("This organization," + org + ", is related to this tag, and was successfully removed.");
        }
        else{ //org is not found in the list, or the tag list is empty
            System.println("This organization," + org + ", is not related to this tag, and cannot be removed.");
        }
    } 
    public void listOrgs(){
        TagNode temp = new TagNode(); 
        temp = this.front; 
        System.println("Organizations: ")
        while(temp != null){
            System.println(temp.tagOrg + ", ");
        }
    }
}