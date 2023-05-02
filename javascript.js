function submitIndex(){
    var statement = document.getElementById("professional-statement").value;
    var biography = document.getElementById("brief-biography").value;

    var fileContents = statement + "\n" + "\n" +biography;
    var fName = prompt("Enter the filename:", "data.txt");

    var data2Blob = new File([fileContents], fName, {type: "text/plain"});
    var blob2URL = window.URL.createObjectURL(data2Blob);

    //creates anchor tag via javascript and forces download
    var anchorTag = document.createElement("a");
    anchorTag.href = blob2URL;
    anchorTag.download = fName;
    anchorTag.click();

}

function submitResume(){
    var education = document.getElementById("education").value;
    var skills = document.getElementById("skills").value;
    var awards = document.getElementById("awards").value;
    var work = document.getElementById("work").value;
    var references = document.getElementById("referees").value;

    var fileContents = education + "\n" + skills +"\n" +awards+"\n"+ work+"\n"+ references;
    var fName = prompt("Enter the filename:", "data.txt");
    var data2Blob = new File([fileContents], fName, {type: "text/plain"});
    var blob2URL = window.URL.createObjectURL(data2Blob);

    //creates anchor tag via javascript and forces download
    var anchorTag = document.createElement("a");
    anchorTag.href = blob2URL;
    anchorTag.download = fName;
    anchorTag.click();
}

function submitProjects(){
    var projects = document.getElementById("projects").value;
   
    var fName = prompt("Enter the filename:", "data.txt");

    var data2Blob = new File([projects], fName, {type: "text/plain"});
    var blob2URL = window.URL.createObjectURL(data2Blob);

    //creates anchor tag via javascript and forces download
    var anchorTag = document.createElement("a");
    anchorTag.href = blob2URL;
    anchorTag.download = fName;
    anchorTag.click();
}

function readMessages(){
    var uploadFile = document.getElementById("submitMessage").files[0];

    var fileReader = new FileReader();
    fileReader.onload = function(fileLoadedEvent){
        var elemHdl = document.getElementById("message");
        elemHdl.value = fileLoadedEvent.target.result;
    };
    fileReader.readAsText(uploadFile, "UTF-8");
}

function submitSocial(){
    var link1 = document.getElementById("social-link1").value;
    var link2 = document.getElementById("social-link2").value;
    var link3 = document.getElementById("social-link3").value;

    var fileContents = link1 + "\n" + link2 + "\n" +link3;
    var fName = prompt("Enter the filename:", "data.txt");

    var data2Blob = new File([fileContents], fName, {type: "text/plain"});
    var blob2URL = window.URL.createObjectURL(data2Blob);

    //creates anchor tag via javascript and forces download
    var anchorTag = document.createElement("a");
    anchorTag.href = blob2URL;
    anchorTag.download = fName;
    anchorTag.click();
}

function processLogout(){
    sessionStorage.clear();
    //redirect the user to the index page (ideally: it would be a login page)
    window.location.href = "adminIndex.html";
}
//function for A3 for the contact page
function submitContactMsg(){
    var name = document.getElementById("name").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;

    var fileContents = name + "\n" + "\n" + phone + "\n" + "\n" +email + "\n" + "\n" + message;
    var fName = prompt("Enter the filename:", "data.txt");

    var data2Blob = new File([fileContents], fName, {type: "text/plain"});
    var blob2URL = window.URL.createObjectURL(data2Blob);

    //creates anchor tag via javascript and forces download
    var anchorTag = document.createElement("a");
    anchorTag.href = blob2URL;
    anchorTag.download = fName;
    anchorTag.click();
}
