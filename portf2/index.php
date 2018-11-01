<?php  
	include('include/header.php');
?>


		<div id="headContent" class="contentSection">
			<div id="headingBox">
				<h1>Iain Cain</h1>
				<cite>developing webs</cite>
			</div>
			<div class="subLink" id="requestDiv">
				<a href="#" id="requestLink">make request</a>
			</div>
			<div class="subLink" id="feedbackDiv">
				<a href="#" id="feedbackLink">send feedback</a>
			</div>
			<div id="requestForm">
				<form>
					<label for="userName">Name:<br><input type="text" name="userName" placeholder="Name"></label><br>
					<label for="email">Email Address:<input type="text" placeholder="Email Address"></label><br>
					<label for"">Request: </br><textarea name="" id="requestInput" cols="30" rows="3" placeholder="Enter Request"></textarea></label>
					<button>Submit</button>
				</form>
			</div>
						<div id="feedbackForm">
				<form>
					<label for="userName">Name:<br><input type="text" name="userName" placeholder="Name"></label><br>
					<label for="email">Email Address:<input type="text" placeholder="Email Address"></label><br>
					<label for"">Feedback: </br><textarea name="" id="feedbackInput" cols="30" rows="3" placeholder="Enter Feedback"></textarea></label>
					<button>Submit</button>
				</form>
			</div>

		</div>
	
		<div id="bodyContent" class="contentSection">
			<div id="profileDiv">
				<img src="img/profile.jpg" class="img-fluid rounded" alt="Responsive image">
			</div>
			<div id="contentText">
				<h3>Web Development</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ab fugiat aliquid recusandae, adipisci fugit debitis soluta! Quod libero, ex nobis ratione porro iusto expedita, eos, deleniti temporibus quibusdam, est.</p>
			</div>
		</div>

		<div id="bodyContent2" class="contentSection">
			<div id="iconContainer" class="row">
				<div id="a" class="center col-3">
					<a href=""><img id="imgA" src="img/codepen.svg" class="img-fluid mx-auto d-inline" alt="Responsive image"></a>
				</div>
				<div id="b" class="center col-3">
					<a href=""><img id="imgA" src="img/github.svg" class="img-fluid mx-auto d-inline" alt="Responsive image"></a>
				</div>
				<div id="c" class="center col-3">
					<a href=""><img id="imgA" src="img/linkedin.png" class="img-fluid mx-auto d-inline" alt="Responsive image"></a>
				</div>
			</div>
			<div id="additionalText" class="row">
				<h1 class="col-6">Lorem ipsum dolor sit amet</h1>

				<p class="col-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, sit harum eos eligendi aperiam nesciunt minima sequi recusandae quisquam reiciendis voluptatem. Suscipit rerum impedit fugit quibusdam voluptates culpa, sunt tempora.</p>
			</div>
			<div>
				
			</div>
			
		</div>


<?php
	include('include/footer.php');
