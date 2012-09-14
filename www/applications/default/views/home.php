<div class="welcome">
	<?php if($user["language"] == "es") { ?>
		<h2>
			Bienvenid<?php echo (isset($user["gender"])) ? "a" : "o";?> <?php echo $user["name"];?> al Seminario: Derechos humanos, presupuestos p&uacute;blicos y poder judicial
		</h2>
	<?php } else { ?>
		<h2>
			Welcome <?php echo $user["name"];?> to the Seminar: Human rights, public budgets and the Judiciary
		</h2>
	<?php } ?>
</div>

<div id="buttons">
	<?php if($user["language"] == "es") { ?>
		<div class="icon info-icon info-icon-es"></div>
		<div class="icon trabajar-icon trabajar-icon-es"></div>
		<div class="icon documentos-icon documentos-icon-es"></div>
	<?php } else { ?>
		<div class="icon info-icon info-icon-en"></div>
		<div class="icon trabajar-icon trabajar-icon-en"></div>
		<div class="icon documentos-icon documentos-icon-en"></div>
	<?php } ?>
	<div class="section info">
		<ul>
			<li class="doc">
				<?php if($user["language"] == "es") { ?>
					<a href="<?php print get('webURL'); ?>/documents/info/Programa_Seminario.docx" title="Programa">Programa</a>
				<?php } else { ?>
					<a href="<?php print get('webURL'); ?>/documents/info/Seminar_Program.docx" title="Program">Program</a>
				<?php } ?>
			</li>
			
			<?php if($user["language"] == "en") { ?>
				<li>
					<a href="<?php print get('webURL'); ?>/documents/info/Welcome_Packet_Mexico_City_and_Oaxaca_IBP.pdf" title="Welcome Packet">Welcome Packet</a>
				</li>
			<?php } ?>
	
			<li>
				<?php if($user["language"] == "es") { ?>
					<a href="<?php print get('webURL'); ?>/documents/info/Logistica_Seminario_Presupuestos.pdf" title="Logistica Seminario Presupuestos">Log&iacute;stica Seminario Presupuestos</a>
				<?php } else { ?>
					<a href="<?php print get('webURL'); ?>/documents/info/Logistical_Information_Mexico_City_Seminar.pdf" title="Logistical Information Mexico City Seminar">Logistical Information Mexico City Seminar</a>
				<?php } ?>
			</li>

			<li>
				<?php if($user["language"] == "es") { ?>
					<a href="<?php print get('webURL'); ?>/documents/info/Agenda_Invitados_Internacionales.pdf" title="Agenda Invitados Internacionales">Agenda Invitados Internacionales</a>
				<?php } else { ?>
					<a href="<?php print get('webURL'); ?>/documents/info/Agenda_International_Participants.pdf" title="Agenda International Participants">Agenda International Participants</a>
				<?php } ?>
			</li>
			
			<?php if(isset($user["flight"])) { ?>
				<li>
					<?php if($user["language"] == "es") { ?>
						<a href="<?php print get('webURL'); ?>/documents/flights/<?php echo $user["flight"];?>.pdf" title="Vuelo">Vuelo</a>
					<?php } else { ?>
						<a href="<?php print get('webURL'); ?>/documents/flights/<?php echo $user["flight"];?>.pdf" title="Flight">Flight</a>
					<?php } ?>
				</li>
			<?php } ?>
		</ul>
		
		<?php if($user["language"] == "es") { ?>
			<div class="section-icons-min">
				<div class="min-icon trabajar-icon-min trabajar-icon-min-es"></div>
				<div class="min-icon documentos-icon-min documentos-icon-min-es"></div>
			</div>
		<?php } else { ?>
			<div class="section-icons-min">
				<div class="min-icon trabajar-icon-min trabajar-icon-min-en"></div>
				<div class="min-icon documentos-icon-min documentos-icon-min-en"></div>
			</div>
		<?php } ?>
	</div>
	
	
	<div class="section trabajar">
		<ul>
			<li>
				<?php if($user["language"] == "es") { ?>
					<a href="<?php print get('webURL'); ?>/documents/work/Caso_de_Estudio_ACIJ.pdf" title="Caso de Estudio ACIJ">Caso de Estudio ACIJ</a>
				<?php } else { ?>
					<a href="<?php print get('webURL'); ?>/documents/work/ACIJ-summary.pdf" title="ACIJ Summary">ACIJ Summary</a>
				<?php } ?>
			</li>
			
			<li>
				<a href="<?php print get('webURL'); ?>/documents/work/LP-case-study-ACIJ.pdf" title="LP case study ACIJ">LP case study ACIJ</a>
			</li>
			
			<li class="doc">
				<a href="<?php print get('webURL'); ?>/documents/work/Amasango_write_up.docx" title="Amasango write up">Amasango write up</a>
			</li>
			
			
		</ul>
		
		<?php if($user["language"] == "es") { ?>
			<div class="section-icons-min">
				<div class="min-icon info-icon-min info-icon-min-es"></div>
				<div class="min-icon documentos-icon-min documentos-icon-min-es"></div>
			</div>
		<?php } else { ?>
			<div class="section-icons-min">
				<div class="min-icon info-icon-min info-icon-min-en"></div>
				<div class="min-icon documentos-icon-min documentos-icon-min-en"></div>
			</div>
		<?php } ?>
	</div>
	
	<div class="section documentos">
		<ul>
			<li class="link">
				<?php if($user["language"] == "es") { ?>
					<a href="http://fundar.org.mx/seminario/" title="Sittio web del Seminari">Sittio web del Seminario</a>
				<?php } else { ?>
					<a href="http://fundar.org.mx/seminario/" title="Sittio web del Seminari">Seminar Website</a>
				<?php } ?>
			</li>
			
			<li class="link">
				<a target="_blank" href="http://www.inesc.org.br/news/2012/april/budget-monitoring-from-a-human-rights-perspective" title="Budget Monitoring - From a Human Rights perspective (INESC)">
					Budget Monitoring - From a Human Rights perspective (INESC)
				</a>
			</li>
			
			<li class="link">
				<a target="_blank" href="http://www.humanrightsbudgetwork.org/" title="IHRIP Institute of International Education Human rights budget work">
					IHRIP Institute of International Education Human rights budget work
				</a>
			</li>
			
			<li>
				<a href="<?php print get('webURL'); ?>/documents/documents/Guia-de-Analisis-Presupuestario-ACIJ.pdf" title="Guía de Análisis Presupuestario ACIJ">
					Gu&iacute;a de An&aacute;lisis Presupuestario ACIJ
				</a>
			</li>
			
			<li>
				<a href="<?php print get('webURL'); ?>/documents/documents/Politicas-publicas-y-presupuestos-con-perspectiva-de-derechos-humanos-OACNUDH-et-al.pdf" title="Políticas públicas y presupuestos con perspectiva de derechos humanos OACNUDH">
					Pol&iacute;ticas p&uacute;blicas y presupuestos con perspectiva de derechos humanos OACNUDH
				</a>
			</li>
			
			<li class="xls">
				<a href="<?php print get('webURL'); ?>/documents/documents/Revision-bibliografica.xlsx" title="Revisión bibliográfica">
					Revisi&oacute;n bibliogr&aacute;fica
				</a>
			</li>
			
			<li>
				<a href="<?php print get('webURL'); ?>/documents/documents/Prevencion_de_incendios_en_escuelas_Cainfo.pdf" title="Prevención de incendios en escuelas Cainfo">
					Prevenci&oacute;n de incendios en escuelas Cainfo
				</a>
			</li>
			
			<li class="link">
				<a target="_blank" href="http://www.idasa.org/our_products/resources/output/monitoring_government_budgets_2/" title="Idasa, Monitoring government budgets to advance child rights">
					Idasa, Monitoring government budgets to advance child rights
				</a>
			</li>
			
			<li>
				<a href="<?php print get('webURL'); ?>/documents/documents/budget_guide_en.pdf" title="FAO, Budget work to advance the right to food 'Many a slip…'">
					FAO, Budget work to advance the right to food 'Many a slip…'
				</a>
			</li>
			
			
		</ul>
		
		<?php if($user["language"] == "es") { ?>
			<div class="section-icons-min">
				<div class="min-icon info-icon-min info-icon-min-es"></div>
				<div class="min-icon trabajar-icon-min trabajar-icon-min-es"></div>
			</div>
		<?php } else { ?>
			<div class="section-icons-min">
				<div class="min-icon info-icon-min info-icon-min-en"></div>
				<div class="min-icon trabajar-icon-min trabajar-icon-min-en"></div>
			</div>
		<?php } ?>
	</div>
</div>
