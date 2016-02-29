function projectexpand(expand){
	console.log("expand clicked");
}

var expand1 = document.getElementById('project1');
var expand2 = document.getElementById('project2');
var expand3 = document.getElementById('project3');

expand1.onclick = projectexpand(expand1);
expand2.onclick = projectexpand(expand2);
expand3.onclick = projectexpand(expand3);
