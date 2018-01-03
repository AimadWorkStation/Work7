'esversion : 6';
//**** create new request
//div i will use several time
var myDiv = document.getElementById('myDiv');
//- XMLHttpRequest
var myRequest;
if(window.XMLHttpRequest) //if this navigator is compatible with
myRequest = new XMLHttpRequest();
else //ie -6
 myRequest = new ActiveXObject('Microsoft.XMLHTTP');

//- send a new request
//**form : method : get/post

//open function
//open(method, url, asyn : true/false)
// 	//>>send data with Get
// myRequest.open("GET","info.php?name=aimad&lname=nextg",true);
// myRequest.send();

// 	//>>send data with Post
// myRequest.open("POST","info.php",true);
// myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
// myRequest.send("name=aimad&lname=nextg");

// 	//>>sent without data
// myRequest.open("Post","info.php",true);
// myRequest.send();

//>> - for async = true :
//to continue the script without whaiting the response of our httprequest


//until the request is ready do the function
	// myRequest.onreadystatechange= function(){

	// 		//get response from sent request into element
		
	// 		//responseText / responseXML /
	// 	// myDiv.innerHTML = "<h1>" + myRequest.responseText + "</h1>";

	// 	//-readyState steps : 
	// 	//--1 Methode defined GET or POST or something esle as error
	// 	//--2 the server get the request
	// 	//--3 hendler request like php server or asp server
	// 	//--4 ready to sed the response

	// 	//-Status 
	// 	//--200 = it found the url
	// 	//--404 = the url unfound
	// 	//--304 = not modified

	// 	//> So we can work like that :
	// 	if(myRequest.readyState == 4 && myRequest.status == 200){
	// 		myDiv.innerHTML = "<h4> Hello " + myRequest.responseText + "</h4>";
	// 	}
	// 	else if(myRequest.readyState < 4 && myRequest.readyState > 0){
	// 		myDiv.innerHTML = `<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
	// 							<span class="sr-only"> Loading...</span>`;
	// 	}
	// 	else{//404
	// 		myDiv.innerHTML='cant reach server';
	// 	}

	// };
	// myRequest.open("GET","info.php",true);
	// myRequest.send();
//

//>>>pratique code up

let run = () => {
	
	myRequest.onreadystatechange= function(){
	if(myRequest.readyState == 4 && myRequest.status == 200){
		myDiv.innerHTML = "<h4> Hello " + myRequest.responseText + "</h4>";
	}
	else if(myRequest.readyState < 4 && myRequest.readyState > 0){
		myDiv.innerHTML = `<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
							<span class="sr-only"> Loading...</span>`;
	}
	else{
		myDiv.innerHTML='cant reach server';
	}

	};
	myRequest.open("GET","info.php?name=aimad&lname=nextg",true);
	myRequest.send();

};