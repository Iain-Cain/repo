var request = document.getElementById('requestDiv');
var feedback =  document.getElementById('feedbackDiv');
var requestLink = document.getElementById('requestLink');
var feedbackLink = document.getElementById('feedbackLink');
var requestForm = document.getElementById('requestForm');
var feedbackForm = document.getElementById('feedbackForm');

request.onclick = function(){
	if(requestForm.style.display = "none"){
		requestForm.style.display = "block";
		if(feedbackForm.style.display = "block"){
			feedbackForm.style.display = "none";
		}
	}
}
feedback.onclick = function(){
	if(feedbackForm.style.display = "none"){
		feedbackForm.style.display = "block";
		if(requestForm.style.display = "block"){
			requestForm.style.display = "none";
		}
	}
}
