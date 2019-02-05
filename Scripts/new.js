
var xmlHttp = createXmlHttpRequestObject();

function createXmlHttpRequestObject(){
	var xmlHttp;
	if(window.ActiveXObject){
		try {
			xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		catch(e){
			xmlHttp false;
		}
	}
	else{
		try{
		xmlHttp = new XMLHttpRequest();
	}
	catch(e){
		xmlHttp false;
	}
	}
	
	if(!xmlHttp){
		alert("Cant create object");
	}
	else{
		return xmlHttp;
	}
}

function process(){
	if(xmlHttp.readyState==0 || xmlHttp.readyState==4){
		user = encodeURIComponent(document.getElementByName("user").value);
		xmlHttp.open("GET", "sin_insert.php?user=" + user,true);
		xmlHttp.onreadystatechange = handleServerResponse;
		xmlHttp.send(user);
	}else{
		setTimeout("process()", 1000);
	}
}

function handleServerResponse(){
	if(xmlHttp.readyState==4){
		if(xmlHttp.status==200){
			xmlResponse = xmlHttp.responseXML;
			xmlDocumentElement = xmlResponse.documentElement;
			message = xmlDocumentElement.firstChild.data;
			document.getElementById("result").innerHTML = '<span style="color: red;">'+ message +'</span>';
			setTimeout("process()", 1000);
	}else{
		alert("Something went Wrong");
	}
}
}

/*
function process(){
	var string;
	string = "<ul>"
			+"<li>Rice</li>"
			+"<li>Curry</li>"
			+"<li>Milk</li>"
			+"</ul>";
			dis = document.getElementById("result");
			dis.innerHTML = string;
}


function process(){
	
	title = document.createTextNode("Here are my Fav. Things");
	list = document.createElement("ul");
	item1 = document.createElement("li");
	text1 = document.createTextNode("Guitar");
	item1.appendChild(text1);
	
	item2 = document.createElement("li");
	text2 = document.createTextNode("Drum");
	item2.appendChild(text2);
	
	item3 = document.createElement("li");
	text3 = document.createTextNode("Bikes");
	item3.appendChild(text3);
	
	item4 = document.createElement("li");
	text4 = document.createTextNode("Cars");
	item4.appendChild(text4);
	
	list.appendChild(item1);
	list.appendChild(item2);
	list.appendChild(item3);
	list.appendChild(item4);
	
	result = document.getElementById("result");
	result.appendChild(title);
	result.appendChild(list);
	
	
}



function boys(){
	table = document.getElementById("table");
	th = document.getElementById("tableHead");
	item1 = document.getElementById("item1");
	item2 = document.getElementById("item2"); 
	
	table.className = "boysTable";
	th.className = "boysHead";
	item1.className = "boysItems";
	item2.className = "boysItems";
}

function girls(){
	table = document.getElementById("table");
	th = document.getElementById("tableHead");
	item1 = document.getElementById("item1");
	item2 = document.getElementById("item2"); 
	
	table.className = "girlsTable";
	th.className = "girlsHead";
	item1.className = "girlsItems";
	item2.className = "girlsItems";
}


var xmlHttp = createXmlHttpRequestObject();

function createXmlHttpRequestObject(){
	var xmlHttp;
	
	if(window.XMLHttpRequest){
		xmlHttp = new XMLHttpRequest();
	}
	else(
	xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
	)
	return xmlHttp;
}

function process(){
	if(xmlHttp){
		try {
			xmlHttp.open()
		}catch(e){
			alert(e.toString() );
		}
	}
}

*/