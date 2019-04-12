<?php
	include('header.html');
?>
<main class="inner cover" role="main">
	<div class="row">
		<div class="col-sm-4">
			<form class="form-horizontal" method="POST" action="emails.php">
				<fieldset>

					<!-- Form Name -->
					<legend>Contato</legend>

							<div class="form-group">
					<label for="InputNome">Name</label>
					<input type="nome" 
						class="form-control" 
						id="nome" 
						aria-describedby="nomehelp" 
						placeholder="Enter with your name"
						name="nome">
					<small id="nomeHelp" class="form-text text-muted">Please, use your compĺete name, no alias.</small>
				</div>
				<div class="form-group">
					<label for="InputEmail1">Email address</label>
					<input type="email" 
						class="form-control"
						 id="email1"
						 aria-describedby="emailHelp" 
						 placeholder="Enter email"
						 name="email">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label for="InputAssunto">Topic</label>
					<input type="assunto"
						class="form-control" 
						id="assunto" 
						aria-describedby="assuntoHelp" 
						placeholder="what is about"
						name="assunto">
					<small id="assuntoHelp" class="form-text text-muted">the title of your mensage.</small>
				</div>
				<div class="form-group">
					<label for="formControlTextarea">Message</label>
					<textarea class="form-control" 
						id="formControlTextarea" 
						rows="1" 
						name="mensagem">
					</textarea>
				</div>
				<button class="btn btn-primary" type="submit">submit</button>
				</fieldset>
			</form>
		</div>
	
		<div class="col-sm-8">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1802.193017293525!2d-51.4655511088069!3d-25.391885598500938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ef36304a759317%3A0x9445763b5bcfef16!2sR.+XV+de+Novembro%2C+7286+-+Centro%2C+Guarapuava+-+PR%2C+85010-000!5e0!3m2!1spt-BR!2sbr!4v1554748818397!5m2!1spt-BR!2sbr"
			width="100%"
			height="450"
			frameborder="0"
			style="border:0"
			allowfullscreen>
		</iframe>
		</div>
	</div>
</main>
<?php
	include('footer.html')
?>
 