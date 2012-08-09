<div class="welcome">
	<?php if($user["language"] == "es") { ?>
		<h2>
			Bienvenido(a) <?php echo $user["name"];?> al Seminario: Derechos humanos, presupuestos p&uacute;blicos y poder judicial
		</h2>
	<?php } else { ?>
		<h2>
			Welcome <?php echo $user["name"];?> to the Seminar: Human rights, public budgets, and judicial control
		</h2>
	<?php } ?>
</div>

<div id="buttons">
	<div class="icon info-icon"></div>
	<div class="icon trabajar-icon"></div>
	<div class="icon documentos-icon"></div>
	
	<div class="section info">
		<ul>
			<li>
				<?php if($user["language"] == "es") { ?>
					<a href="/documents/info/Programa_Seminario.docx" title="Programa">Programa</a>
				<?php } else { ?>
					<a href="/documents/info/Seminar_Program.docx" title="Program">Program</a>
				<?php } ?>
			</li>
			
			<?php if($user["language"] == "en") { ?>
				<li>
					<a href="/documents/info/Welcome_Packet_Mexico_City_and_Oaxaca_IBP.pdf" title="Welcome Packet">Welcome Packet</a>
				</li>
			<?php } ?>
	
			<li>
				<?php if($user["language"] == "es") { ?>
					<a href="/documents/info/Logistica_Seminario_Presupuestos.pdf" title="Logistica Seminario Presupuestos">Log&iacute;stica Seminario Presupuestos</a>
				<?php } else { ?>
					<a href="/documents/info/Logistical_Information_Mexico_City_Seminar.pdf" title="Logistical Information Mexico City Seminar">Logistical Information Mexico City Seminar</a>
				<?php } ?>
			</li>

			<li>
				<?php if($user["language"] == "es") { ?>
					<a href="/documents/info/Agenda_Invitados_Internacionales.pdf" title="Agenda Invitados Internacionales">Agenda Invitados Internacionales</a>
				<?php } else { ?>
					<a href="/documents/info/Agenda_International_Participants.pdf" title="Agenda International Participants">Agenda International Participants</a>
				<?php } ?>
			</li>
		</ul>
		
		<div class="section-icons-min">
			<div class="min-icon trabajar-icon-min"></div>
			<div class="min-icon documentos-icon-min"></div>
		</div>
	</div>
	
	
	<div class="section trabajar">
		<ul>
			<li>
				<?php if($user["language"] == "es") { ?>
					<a href="/documents/work/Caso_de_Estudio_ACIJ.pdf" title="Caso de Estudio ACIJ">Caso de Estudio ACIJ</a>
				<?php } else { ?>
					<a href="/documents/work/ACIJ-summary.pdf" title="ACIJ Summary">ACIJ Summary</a>
				<?php } ?>
			</li>
			
			<li>
				<a href="/documents/work/LP-case-study-ACIJ.pdf" title="LP case study ACIJ">LP case study ACIJ</a>
			</li>
		</ul>
		
		<div class="section-icons-min">
			<div class="min-icon info-icon-min"></div>
			<div class="min-icon documentos-icon-min"></div>
		</div>
	</div>
	
	<div class="section documentos">
		<ul>
			<li>
				<?php if($user["language"] == "es") { ?>
					<a href="http://fundar.org.mx/seminario/" title="Sittio web del Seminari">Sittio web del Seminario</a>
				<?php } else { ?>
					<a href="http://fundar.org.mx/seminario/" title="Sittio web del Seminari">Seminar Website</a>
				<?php } ?>
			</li>
		</ul>
		
		<div class="section-icons-min">
			<div class="min-icon info-icon-min"></div>
			<div class="min-icon trabajar-icon-min"></div>
		</div>
	</div>
</div>
