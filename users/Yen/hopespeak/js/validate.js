$(document).ready(function(){
$("#validate").click(function(e){
	var error = false;
	e.preventDefault();
	$("#resultName").html("");
    if ($("#txtName").val() == ""){
        $("#resultName").html("Please enter your name!");
		error = true;
    }
    document.getElementById("resultEmail").innerHTML ="";
    if (document.getElementById("txtEmail").value == "") {
        document.getElementById("resultEmail").innerHTML = "Please enter your email";
		error = true;
    }
        document.getElementById("resultPassword").innerHTML ="";
        if (document.getElementById("txtPassword").value == "") {
            document.getElementById("resultPassword").innerHTML = "Please enter your password";
            error = true;
        }
})



