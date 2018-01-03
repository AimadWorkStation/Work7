'esversion: 6';
var myRequest;

function myAjax(method,page,info = ''){
	if(window.XMLHttpRequest){
		myRequest = new XMLHttpRequest();
	}
	else{
		myRequest = new ActiveXObject('Microsoft.XMLHTTP');
	}
	myRequest.onreadystatechange = () => ProcessValidate(method);
	myRequest.open(method,page,true);
	if(method == 'POST'){
		myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		myRequest.send(info);
	}else{
	myRequest.send();
	}
}

function myNbInfo(method,page){
	myAjax(method,page);	
}

myNbInfo('GET','select.php');

function ProcessValidate(method = 'GET'){
	
		var tableData = document.getElementById('tbody');
		if(myRequest.readyState == 4 && myRequest.status == 200){
			if(method == 'POST'){ 
				myNbInfo('GET','select.php'); 
				console.log("Err 1");
			}
			tableData.innerHTML = myRequest.responseText ;
		}
		else if(myRequest.readyState < 4 && myRequest.readyState > 0){
			tableData.innerHTML = `<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
								<span class="sr-only"> Loading...</span>`;
			console.log("Err 2");
		}
		else{
			tableData.innerHTML='cant reach server';
		}
}

function addUser(){
	var name = document.getElementById('name');
	var lname = document.getElementById('lname');
	var phone = document.getElementById('phone');
	var job = document.getElementById('job');

	var info = "name="+ name.value+
				"&lname="+ lname.value+
				"&phone="+phone.value +
				"&job="+ job.value;
				
	myAjax('POST','insert.php',info);

	name.value = '';
	lname.value = '';
	phone.value = '';
	job.value = '';

	return false;
}

function deletUser(id){
	info = "userid="+id;
	if(confirm("Do you wont to delete user id : "+id+" ?" )){
		myAjax('POST','deletUser.php',info);
		
	}else{
		console.log("sorry");
	}
	

	return false;
}