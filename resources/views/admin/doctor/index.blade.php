@extends('templateadmin.layout')

@section('titulo')
    Doctor
@endsection

@section('titulo-seccion')
    Doctor
@endsection

@section('content')


			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Doctor List</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="">Doctors</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Doctor List</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tabbable-line">
                               <ul class="nav nav-pills nav-pills-rose">
									<li class="nav-item tab-all"><a class="nav-link active show"
										href="#tab1" data-toggle="tab">List View</a></li>
									<li class="nav-item tab-all"><a class="nav-link" href="#tab2"
										data-toggle="tab">Grid View</a></li>
								</ul>
                                <div class="tab-content">
                                    <div class="tab-pane active fontawesome-demo" id="tab1">
                                        <div class="row">
					                        <div class="col-md-12">
					                            <div class="card  card-box">
					                                <div class="card-head">
					                                    <header></header>
					                                    <div class="tools">
					                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
						                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
						                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
					                                    </div>
					                                </div>
					                                <div class="card-body ">
					                                  <div class="table-scrollable">
					                                    <table class="table table-hover table-checkable order-column full-width" id="example4">
					                                        <thead>
					                                            <tr>
					                                            	<th></th>
					                                                <th> Nombre </th>
					                                                <th> Departmento </th>
					                                                <th> Especializacion </th>
					                                                <th> Grado </th>
					                                                <th> Celular </th>
					                                                <th> Correo Electronico </th>
					                                                <th> Dia de Ingreso</th>
					                                                <th> Accion </th>
					                                            </tr>
					                                        </thead>
					                                        <tbody>
																<tr class="odd gradeX">
																	<td class="patient-img">
																			<img src="../assets/img/doc/doc1.jpg" alt="">
																	</td>
																	<td>Dr.Rajesh</td>
																	<td class="left">General surgery</td>
																	<td class="left">18</td>
																	<td class="left">MBBS,MD</td>
																	<td><a href="tel:4444565756">
																			4444565756 </a></td>
																	<td><a href="mailto:shuxer@gmail.com">
																			rajesh@gmail.com </a></td>
																	<td class="left">22 Feb 2000</td>
																	<td class="center">
																		<a href="edit_doctor.html" class="btn btn-tbl-edit btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a>
																		<a class="btn btn-tbl-delete btn-xs">
																			<i class="fa fa-trash-o "></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																			<img src="../assets/img/doc/doc10.jpg" alt="">
																	</td>
																	<td>Dr.Pooja Patel</td>
																	<td class="left">Cardiology</td>
																	<td class="left">5</td>
																	<td class="left">M.D.</td>
																	<td><a href="tel:444786876">
																			444786876 </a></td>
																	<td><a href="mailto:shuxer@gmail.com">
																			pooja@gmail.com </a></td>
																	<td class="left">27 Aug 2005</td>
																	<td class="center">
																		<a href="edit_doctor.html" class="btn btn-tbl-edit btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a>
																		<a class="btn btn-tbl-delete btn-xs">
																			<i class="fa fa-trash-o "></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																			<img src="../assets/img/doc/doc2.jpg" alt="">
																	</td>
																	<td>Dr.Sarah Smith</td>
																	<td class="left">Anaesthetics</td>
																	<td class="left">15</td>
																	<td class="left">MBBS,DGO,MD</td>
																	<td><a href="tel:44455546456">
																			44455546456 </a></td>
																	<td><a href="mailto:shuxer@gmail.com">
																			sarah@gmail.com </a></td>
																	<td class="left">05 Jun 2011</td>
																	<td class="center">
																		<a href="edit_doctor.html" class="btn btn-tbl-edit btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a>
																		<a class="btn btn-tbl-delete btn-xs">
																			<i class="fa fa-trash-o "></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																			<img src="../assets/img/doc/doc3.jpg" alt="">
																	</td>
																	<td>Dr.John Deo</td>
																	<td class="left">Dentist</td>
																	<td class="left">23</td>
																	<td class="left">BDS,MDS</td>
																	<td><a href="tel:444543564">
																			444543564 </a></td>
																	<td><a href="mailto:shuxer@gmail.com">
																			john@gmail.com </a></td>
																	<td class="left">15 Feb 2012</td>
																	<td class="center">
																		<a href="edit_doctor.html" class="btn btn-tbl-edit btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a>
																		<a class="btn btn-tbl-delete btn-xs">
																			<i class="fa fa-trash-o "></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																			<img src="../assets/img/doc/doc4.jpg" alt="">
																	</td>
																	<td>Dr.Jay Soni</td>
																	<td class="left">General</td>
																	<td class="left">10</td>
																	<td class="left">BHMS</td>
																	<td><a href="tel:444543564">
																			444543564 </a></td>
																	<td><a href="mailto:shuxer@gmail.com">
																			kenh@gmail.com </a></td>
																	<td class="left">12 Nov 2012</td>
																	<td class="center">
																		<a href="edit_doctor.html" class="btn btn-tbl-edit btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a>
																		<a class="btn btn-tbl-delete btn-xs">
																			<i class="fa fa-trash-o "></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																			<img src="../assets/img/doc/doc5.jpg" alt="">
																	</td>
																	<td>Dr.Jacob Ryan</td>
																	<td class="left">Urology</td>
																	<td class="left">14</td>
																	<td class="left">MBBS,MS</td>
																	<td><a href="tel:444543564">
																			444543564 </a></td>
																	<td><a href="mailto:shuxer@gmail.com">
																			johnson@gmail.com </a></td>
																	<td class="left">03 Dec 2001</td>
																	<td class="center">
																		<a href="edit_doctor.html" class="btn btn-tbl-edit btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a>
																		<a class="btn btn-tbl-delete btn-xs">
																			<i class="fa fa-trash-o "></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																			<img src="../assets/img/doc/doc6.jpg" alt="">
																	</td>
																	<td>Dr.Megha Trivedi</td>
																	<td class="left">Gynaecology</td>
																	<td class="left">7</td>
																	<td class="left">MBBS,MS</td>
																	<td><a href="tel:444543564">
																			444543564 </a></td>
																	<td><a href="mailto:shuxer@gmail.com">
																			megha@gmail.com </a></td>
																	<td class="left">17 Mar 2013</td>
																	<td class="center">
																		<a href="edit_doctor.html" class="btn btn-tbl-edit btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a>
																		<a class="btn btn-tbl-delete btn-xs">
																			<i class="fa fa-trash-o "></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																			<img src="../assets/img/doc/doc1.jpg" alt="">
																	</td>
																	<td>Dr.Rajesh</td>
																	<td class="left">General surgery</td>
																	<td class="left">18</td>
																	<td class="left">MBBS,MD</td>
																	<td><a href="tel:4444565756">
																			4444565756 </a></td>
																	<td><a href="mailto:shuxer@gmail.com">
																			rajesh@gmail.com </a></td>
																	<td class="left">22 Feb 2000</td>
																	<td class="center">
																		<a href="edit_doctor.html" class="btn btn-tbl-edit btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a>
																		<a class="btn btn-tbl-delete btn-xs">
																			<i class="fa fa-trash-o "></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																			<img src="../assets/img/doc/doc10.jpg" alt="">
																	</td>
																	<td>Dr.Pooja Patel</td>
																	<td class="left">Cardiology</td>
																	<td class="left">5</td>
																	<td class="left">M.D.</td>
																	<td><a href="tel:444786876">
																			444786876 </a></td>
																	<td><a href="mailto:shuxer@gmail.com">
																			pooja@gmail.com </a></td>
																	<td class="left">27 Aug 2005</td>
																	<td class="center">
																		<a href="edit_doctor.html" class="btn btn-tbl-edit btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a>
																		<a class="btn btn-tbl-delete btn-xs">
																			<i class="fa fa-trash-o "></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																			<img src="../assets/img/doc/doc2.jpg" alt="">
																	</td>
																	<td>Dr.Sarah Smith</td>
																	<td class="left">Anaesthetics</td>
																	<td class="left">15</td>
																	<td class="left">MBBS,DGO,MD</td>
																	<td><a href="tel:44455546456">
																			44455546456 </a></td>
																	<td><a href="mailto:shuxer@gmail.com">
																			sarah@gmail.com </a></td>
																	<td class="left">05 Jun 2011</td>
																	<td class="center">
																		<a href="edit_doctor.html" class="btn btn-tbl-edit btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a>
																		<a class="btn btn-tbl-delete btn-xs">
																			<i class="fa fa-trash-o "></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																			<img src="../assets/img/doc/doc3.jpg" alt="">
																	</td>
																	<td>Dr.John Deo</td>
																	<td class="left">Dentist</td>
																	<td class="left">23</td>
																	<td class="left">BDS,MDS</td>
																	<td><a href="tel:444543564">
																			444543564 </a></td>
																	<td><a href="mailto:shuxer@gmail.com">
																			john@gmail.com </a></td>
																	<td class="left">15 Feb 2012</td>
																	<td class="center">
																		<a href="edit_doctor.html" class="btn btn-tbl-edit btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a>
																		<a class="btn btn-tbl-delete btn-xs">
																			<i class="fa fa-trash-o "></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																			<img src="../assets/img/doc/doc4.jpg" alt="">
																	</td>
																	<td>Dr.Jay Soni</td>
																	<td class="left">General</td>
																	<td class="left">10</td>
																	<td class="left">BHMS</td>
																	<td><a href="tel:444543564">
																			444543564 </a></td>
																	<td><a href="mailto:shuxer@gmail.com">
																			kenh@gmail.com </a></td>
																	<td class="left">12 Nov 2012</td>
																	<td class="center">
																		<a href="edit_doctor.html" class="btn btn-tbl-edit btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a>
																		<a class="btn btn-tbl-delete btn-xs">
																			<i class="fa fa-trash-o "></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																			<img src="../assets/img/doc/doc5.jpg" alt="">
																	</td>
																	<td>Dr.Jacob Ryan</td>
																	<td class="left">Urology</td>
																	<td class="left">14</td>
																	<td class="left">MBBS,MS</td>
																	<td><a href="tel:444543564">
																			444543564 </a></td>
																	<td><a href="mailto:shuxer@gmail.com">
																			johnson@gmail.com </a></td>
																	<td class="left">03 Dec 2001</td>
																	<td class="center">
																		<a href="edit_doctor.html" class="btn btn-tbl-edit btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a>
																		<a class="btn btn-tbl-delete btn-xs">
																			<i class="fa fa-trash-o "></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																			<img src="../assets/img/doc/doc6.jpg" alt="">
																	</td>
																	<td>Dr.Megha Trivedi</td>
																	<td class="left">Gynaecology</td>
																	<td class="left">7</td>
																	<td class="left">MBBS,MS</td>
																	<td><a href="tel:444543564">
																			444543564 </a></td>
																	<td><a href="mailto:shuxer@gmail.com">
																			megha@gmail.com </a></td>
																	<td class="left">17 Mar 2013</td>
																	<td class="center">
																		<a href="edit_doctor.html" class="btn btn-tbl-edit btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a>
																		<a class="btn btn-tbl-delete btn-xs">
																			<i class="fa fa-trash-o "></i>
																		</a>
																	</td>
																</tr>
															</tbody>
					                                    </table>
					                                    </div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <div class="row">
					                        <div class="col-md-4">
				                                <div class="card card-box">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="../assets/img/doc/doc10.jpg" class="doctor-pic" alt="">
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Dr.Pooja Patel </div>
					                                            <div class="name-center"> Cardiology </div>
					                                        </div>
				                                                <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                            <a href="doctor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
					                        <div class="col-md-4">
				                                <div class="card card-box">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="../assets/img/doc/doc1.jpg" class="doctor-pic" alt="">
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Dr.Rajesh </div>
					                                            <div class="name-center"> General surgery </div>
					                                        </div>
				                                                <p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai</p>
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="doctor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
					                        <div class="col-md-4">
				                                <div class="card card-box">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="../assets/img/doc/doc2.jpg" class="doctor-pic" alt="">
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Dr.Sarah Smith </div>
					                                            <div class="name-center"> Anaesthetics </div>
					                                        </div>
				                                                <p>456, Estern evenue, Courtage area, <br />New York</p>
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="doctor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
                    					</div>
                    					<div class="row">
					                        <div class="col-md-4">
				                                <div class="card card-box">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="../assets/img/doc/doc3.jpg" class="doctor-pic" alt="">
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Dr.John Deo </div>
					                                            <div class="name-center"> Dentist </div>
					                                        </div>
				                                                <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="doctor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
					                        <div class="col-md-4">
				                                <div class="card card-box">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="../assets/img/doc/doc4.jpg" class="doctor-pic" alt="">
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Dr.Jay Soni </div>
					                                            <div class="name-center"> General Physician </div>
					                                        </div>
				                                                <p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai</p>
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="doctor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
					                        <div class="col-md-4">
				                                <div class="card card-box">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="../assets/img/doc/doc5.jpg" class="doctor-pic" alt="">
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Dr.Jacob Ryan </div>
					                                            <div class="name-center"> Urology </div>
					                                        </div>
				                                                <p>456, Estern evenue, Courtage area, <br />New York</p>
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="doctor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
                    					</div>
                    					<div class="row">
					                        <div class="col-md-4">
				                                <div class="card card-box">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="../assets/img/doc/doc6.jpg" class="doctor-pic" alt="">
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Dr.Megha Trivedi </div>
					                                            <div class="name-center"> Gynaecology </div>
					                                        </div>
				                                                <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="doctor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
					                        <div class="col-md-4">
				                                <div class="card card-box">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="../assets/img/doc/doc1.jpg" class="doctor-pic" alt="">
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Dr.Rajesh </div>
					                                            <div class="name-center"> General surgery </div>
					                                        </div>
				                                                <p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai</p>
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="doctor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
					                        <div class="col-md-4">
				                                <div class="card card-box">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="../assets/img/doc/doc2.jpg" class="doctor-pic" alt="">
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Dr.Sarah Smith </div>
					                                            <div class="name-center"> Anaesthetics </div>
					                                        </div>
				                                                <p>456, Estern evenue, Courtage area, <br />New York</p>
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="doctor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
                    					</div>
                    					<div class="row">
					                        <div class="col-md-4">
				                                <div class="card card-box">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="../assets/img/doc/doc10.jpg" class="doctor-pic" alt="">
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Dr.Pooja Patel </div>
					                                            <div class="name-center"> Cardiology </div>
					                                        </div>
				                                                <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="doctor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
					                        <div class="col-md-4">
				                                <div class="card card-box">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="../assets/img/doc/doc1.jpg" class="doctor-pic" alt="">
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Dr.Rajesh </div>
					                                            <div class="name-center"> General surgery </div>
					                                        </div>
				                                                <p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai</p>
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="doctor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
					                        <div class="col-md-4">
				                                <div class="card card-box">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="../assets/img/doc/doc3.jpg" class="doctor-pic" alt="">
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Dr.John Deo </div>
					                                            <div class="name-center"> Dentist </div>
					                                        </div>
				                                                <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="doctor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
                    					</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page content -->


@endsection
