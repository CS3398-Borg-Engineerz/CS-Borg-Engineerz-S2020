import java.io; 

class Organization{ 
    getOrganization(String orgID){
        
    }
}

class Student{
    String netId;
    setStudent(String id){
        this.netId = id; 
    }
    String getStudent(){
        return this.netId;
    }
}

class DbCredentials{
    String username; //username for the DB user
    String password; //password for the DB user
    void setUsername(Stirng un){
        this.username = un; 
    }
    void setPassword(String pw){
        this.password = pw;
    }
    String getUsername(){
        return this.username; 
    }
    String getPassword(){
        return this.password;
    }
}

class Connect{
    Boolean connected;
    DbCredentials credentials = new DbCredentials(); 
    Boolean connection(String un, String pw){
        if(connected)
            return true; 
        else return false;
    }
    void accessDB(){
        String mySql = ' '; 
        if(connection(credentials.getUsername(), credentials.getPassword())){

        }     
    }
}