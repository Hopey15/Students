//validation for student form
function Validate() {
    var name = document.forms["student"]["name"];
    var surname = document.forms["student"]["surname"];
    var studentno = document.forms["student"]["studentno"];
    var subjectcode = document.forms["student"]["subjectcode"];
    var subjectname = document.forms["student"]["subjectname"];


    if (name.value == "") {
        window.alert("Please enter name.");
        name.focus();
        return false;
    }
    if (surname.value == "") {
        window.alert("Please enter surname.");
        surname.focus();
        return false;
    }
    if (studentno.value == "") {
        window.alert("Please enter student number.");
        studentno.focus();
        return false;
    }
    if (subjectcode.value == "") {
        window.alert("Please enter subject code.");
        subjectcode.focus();
        return false;
    }
    if (subjectname.value == "") {
        window.alert("Please enter subject name.");
        subjectname.focus();
        return false;
    }
    return true;
}