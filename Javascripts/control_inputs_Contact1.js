var First_LastName, Email, Comments, Count, Max, Subject;
var patt = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

/* FOR FIRST-LAST NAME INPUT */
function contactFLname(){
    First_LastName = document.getElementById("first_lastName").value; 
    if(First_LastName == "" || First_LastName.length > 50 || First_LastName.length < 5 || First_LastName.match(/[0-9]/g)){
        document.getElementById("first_lastName").style.border="1px solid red";
        return false;
    }
    else{
        document.getElementById("first_lastName").style.border="1px solid green";
        return true;
    }
}
/* FOR EMAIL INPUT */
function contactEmail(){
    Email = document.getElementById("email").value; 
    if (!(patt.test(Email)) || Email.length > 50 || Email == "" || Email.length < 5){
        document.getElementById("email").style.border = "1px solid red";
        return false;
    }
    else {
        document.getElementById("email").style.border = "1px solid green";
        return true;
    }
}
/* FOR SUBJECT INPUT */
function subjects(){
    Subject = document.getElementById("subject").value;
    if(Subject == "" || Subject.length < 5 || Subject.length > 30){
        document.getElementById("subject").style.border="1px solid red";
        return false;
    }
    else{
        document.getElementById("subject").style.border="1px solid green";
        return true;
    }
}
/* FOR COMMENTS INPUT */
function contactComments(){
    Max = 250;
    Comments = document.getElementById("comments").value;
    Count = document.getElementById("spcomments");
    Count.innerHTML = Max - Comments.length;
    if(Comments.length == 0 || Comments.length > 250){
        document.getElementById("comments").style.border = "1px solid red";
        Count.style.color="red";
        return false;
    }
    else if(Max - Comments.length <= 249 && Max - Comments.length >= 200){
        document.getElementById("comments").style.border = "1px solid green";
        Count.style.color="white";
    }
    else if(Max - Comments.length < 200 && Max - Comments.length >= 150){
        Count.style.color="yellow";
    }
    else if(Max - Comments.length < 150 && Max - Comments.length >= 100){
        Count.style.color="gold";
    }
    else{
        Count.style.color="red";
    }
    return true;
}

function resets(){
    document.getElementById("first_lastName").style.border = "none";
    document.getElementById("email").style.border = "none";
    document.getElementById("subject").style.border="none";
    document.getElementById("comments").style.border = "none";
    Count.innerHTML = "";
    //End-Function Reset
} //End-Function

function contact(){
    contactEmail();
    contactComments();
    subjects();
    if(contactFLname() && contactEmail() && contactComments() && subjects()){
        return true;
    }
    return false;
}