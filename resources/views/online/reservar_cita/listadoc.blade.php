@extends('template.layout')

@section('tittle')
    FINDOCTOR - Find easily a doctor and book online an appointment
@endsection

@section('content')
<main class="theia-exception">
		<div id="results">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h4><strong>Mostrando 10</strong> de 140 resultados</h4>
					</div>
					<div class="col-md-6">
						<div class="search_bar_list">
							<input type="text" class="form-control" placeholder="Especialidades....">
							<input type="submit" value="Buscar">
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /results -->

		<!--<div class="filters_listing">
			<div class="container">
				<ul class="clearfix">
					<li>
						<h6>Type</h6>
						<div class="switch-field">
							<input type="radio" id="all" name="type_patient" value="all" checked>
							<label for="all">All</label>
							<input type="radio" id="doctors" name="type_patient" value="doctors">
							<label for="doctors">Doctors</label>
							<input type="radio" id="clinics" name="type_patient" value="clinics">
							<label for="clinics">Clinics</label>
						</div>
					</li>
					<li>
						<h6>Layout</h6>
						<div class="layout_view">
							<a href="grid-list.html"><i class="icon-th"></i></a>
							<a href="#0" class="active"><i class="icon-th-list"></i></a>
							<a href="list-map.html"><i class="icon-map-1"></i></a>
						</div>
					</li>
					<li>
						<h6>Sort by</h6>
						<select name="orderby" class="selectbox">
						<option value="Closest">Closest</option>
						<option value="Best rated">Best rated</option>
						<option value="Men">Men</option>
						<option value="Women">Women</option>
						</select>
					</li>
				</ul>
			</div>-->
			<!-- /container -->
		<!--</div>-->
		<!-- /filters -->
		
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-7">

					<div class="strip_list wow fadeIn">
						<a href="#0" class="wish_bt"></a>
						<figure>
							<a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" alt=""></a>
						</figure>
						<small>Pediatra</small>
						<h3>Dr. Gustavo</h3>
						<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
						<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
						<a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="img/badges/badge_1.svg" width="15" height="15" alt=""></a>
						<ul>
							<li><a href="#0" onclick="onHtmlClick('Doctors', 0)" class="btn_listing">Ver en el Mapa</a></li>
							<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Direcciones</a></li>
							<li><a href="/detalle">Reservar ahora</a></li>
						</ul>
					</div>
					<!-- /strip_list -->

					<div class="strip_list wow fadeIn">
						<a href="#0" class="wish_bt"></a>
						<figure>
							<a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" alt=""></a>
						</figure>
						<small>Psicólogo</small>
						<h3>Dr. Jorge</h3>
						<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
						<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
						<a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="img/badges/badge_2.svg" width="15" height="15" alt=""></a>
						<ul>
							<li><a href="#0" onclick="onHtmlClick('Doctors', 1)" class="btn_listing">Ver en el Mapa</a></li>
							<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Direcciones</a></li>
							<li><a href="/detalle">Reservar ahora</a></li>
						</ul>
					</div>
					<!-- /strip_list -->

					<div class="strip_list wow fadeIn">
						<a href="#0" class="wish_bt"></a>
						<figure>
							<a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" alt=""></a>
						</figure>
						<small>Pediatra</small>
						<h3>Dr. Jean</h3>
						<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
						<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
						<a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="img/badges/badge_3.svg" width="15" height="15" alt=""></a>
						<ul>
							<li><a href="#0" onclick="onHtmlClick('Doctors', 2)" class="btn_listing">Ver en el Mapa</a></li>
							<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Direcciones</a></li>
							<li><a href="/detalle">Reservar ahora</a></li>
						</ul>
					</div>
					<!-- /strip_list -->

					<div class="strip_list wow fadeIn">
						<a href="#0" class="wish_bt"></a>
						<figure>
							<a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" alt=""></a>
						</figure>
						<small>Pediatra</small>
						<h3>Dr. Fidel</h3>
						<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
						<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
						<a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="img/badges/badge_4.svg" width="15" height="15" alt=""></a>
						<ul>
							<li><a href="#0" onclick="onHtmlClick('Doctors', 1)" class="btn_listing">Ver en el Mapa</a></li>
							<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Direcciones</a></li>
							<li><a href="/detalle">Reservar ahora</a></li>
						</ul>
					</div>
					<!-- /strip_list -->

					<div class="strip_list wow fadeIn">
						<a href="#0" class="wish_bt"></a>
						<figure>
							<a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" alt=""></a>
						</figure>
						<small>Psicólogo</small>
						<h3>Dr. Eder</h3>
						<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
						<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
						<a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="img/badges/badge_4.svg" width="15" height="15" alt=""></a>
						<ul>
							<li><a href="#0" onclick="onHtmlClick('Doctors', 1)" class="btn_listing">Ver en el Mapa</a></li>
							<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Direcciones</a></li>
							<li><a href="/detalle">Reservar ahora</a></li>
						</ul>
					</div>
					<!-- /strip_list -->
					
					<nav aria-label="" class="add_top_20">
						<ul class="pagination pagination-sm">
							<li class="page-item disabled">
								<a class="page-link" href="#" tabindex="-1">Anterior</a>
							</li>
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#">Siguiente</a>
							</li>
						</ul>
					</nav>
					<!-- /pagination -->
				</div>
				<!-- /col -->
				
				<aside class="col-lg-5" id=""> <!-- id="sidebar"-->
					<div id="map_listing" class="normal_list">
					</div>
				</aside>
				<!-- /aside -->
				
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>
	<!-- /main -->

@endsection