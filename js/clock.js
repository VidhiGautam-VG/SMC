digiClock = document.getElementById('digiClock');

function digitalClock(){
	date = new Date()
	//date.setHours(date.getHours() + 3);
	getHours = date.getHours();
	var ampm = (getHours >= 12) ? "PM" : "AM";
	getHours = date.getHours() % 12 || 12;
	getMinutes = date.getMinutes();
	getSeconds = date.getSeconds();

	if(getHours < 10){
		getHours = "0"+getHours
	}
	if(getMinutes < 10){
		getMinutes = "0"+getMinutes
	}
	if(getSeconds < 10){
		getSeconds = "0"+getSeconds
	}

	ClockView = "<span>"+getHours + "</span>:<span>"+getMinutes+"</span>:<span id='second'>"+getSeconds+"</span>"+"<span id='ampm'>  "+ampm+"</span>";
	digiClock.innerHTML= ClockView
	setTimeout(digitalClock,1000)
}
digitalClock()