<?php include 'include/header.php'; ?>
<?php include 'include/sidebar.php'; ?>
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
	<!-- ============================================================== -->
	<!-- Container fluid  -->
	<!-- ============================================================== -->
	<div class="container-fluid">
		<!-- ============================================================== -->
		<!-- Bread crumb and right sidebar toggle -->
		<!-- ============================================================== -->
		<div class="card">
			<div class="card-body">
				<div class="d-flex no-block align-items-center">
					<div>
						<h4 class="card-title">Add</h4>
					</div>
				</div>
				<ul class="nav nav-tabs customtab" role="tablist">
					<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#info1" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Services</span></a> </li>
					<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#info2" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Features</span></a> </li>
					<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#info3" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Articles</span></a> </li>
					<!-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#info4" role="tab" aria-selected="true"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Latest Information</span></a> </li> -->
					<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#info5" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Teams</span></a> </li>
					<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#info6" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Client Testmonials</span></a> </li>
					<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#info7" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Client</span></a> </li>
					<!-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#info8" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Pricing Table</span></a> </li> -->
					<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#info9" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Counter</span></a> </li>
					<!-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#info10" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Countdown Timer</span></a> </li> -->
					<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#info11" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">FAQ</span></a> </li>
					<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#info12" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Contact Us</span></a> </li>
				</ul>
				<form id="sectionStyle" method="post">
					<div class="tab-content">
						<div class="tab-pane active" id="info1" role="tabpanel">
							
							<div class="form-group m-t-10 row">
								<label for="example-text-input" class="col-2 col-form-label">Services Style</label>
								<div class="col-10">
									<select id="servicessection_style" name="services[section_style]" class="select2 form-control custom-select" style="width: 100%; height:36px;">
										<option value="services/services1.php">Services1</option>
										<option value="services/services2.php">Services2</option>
										<option value="services/services3.php">Services3</option>
									</select>
								</div>
							</div>
							<div class="form-group m-t-10 row">
								<label for="example-text-input" class="col-2 col-form-label">Title</label>
								<div class="col-10">
									<input id="servicestitle" type="text" class="form-control" name="services[title]">
									
								</div>
							</div>
							<div class="form-group m-t-10 row">
								<label for="example-text-input" class="col-2 col-form-label">Top Tag Line</label>
								<div class="col-10">
									<input id="servicestop_tag_line" type="text" class="form-control" name="services[top_tag_line]">
									
								</div>
							</div>
							<div class="form-group m-t-10 row">
								<label for="example-text-input" class="col-2 col-form-label">Bottom Tag Line</label>
								<div class="col-10">
									<input id="servicesbottom_tag_line" type="text" class="form-control" name="services[bottom_tag_line]">
									
								</div>
							</div>
							<div class="form-group m-t-10 row">
								<label for="example-text-input" class="col-2 col-form-label">Elements Animations</label>
								<div class="col-10">
									<input id="serviceselements_animation" type="text" class="form-control" name="services[elements_animation]">
								</div>
								</div><div class="form-group m-t-10 row"> <label for="example-text-input" class="col-2 col-form-label">Image Upload</label> <div class="col-10"><input type="hidden" name="services[img]" id="servicesimg"> <input type="file" class="form-control" name="services[img]"> </div> </div>
								<div class="form-group m-t-10 row">
									<label for="example-text-input" class="col-2 col-form-label">Status</label>
									<div class="col-4 bt-switch">
										<div class="m-b-30 col-lg-6">
											<input name="services[status]" value="0" type="hidden" >
											<input name="services[status]" id="servicesstatus" value="1"  type="checkbox" data-on-color="info" data-off-color="danger">
										</div>
									</div>
								</div>
								
								
							</div>
							<div class="tab-pane" id="info2" role="tabpanel">
								<div class="form-group m-t-10 row">
									<label for="example-text-input" class="col-2 col-form-label">Features Style</label>
									<div class="col-10">
										<select id="featuressection_style" name="features[section_style]" class="select2 form-control custom-select" style="width: 100%; height:36px;">
											<option value="features/features1.php">Features1</option>
											<option value="features/features2.php">Features2</option>
											<option value="features/features3.php">Features3</option>
										</select>
									</div>
								</div>
								<div class="form-group m-t-10 row">
									<label for="example-text-input" class="col-2 col-form-label">Title</label>
									<div class="col-10">
										<input id="featurestitle" type="text" class="form-control" name="features[title]">
										
									</div>
								</div>
								<div class="form-group m-t-10 row">
									<label for="example-text-input" class="col-2 col-form-label">Top Tag Line</label>
									<div class="col-10">
										<input id="featurestop_tag_line" type="text" class="form-control" name="features[top_tag_line]">
										
									</div>
								</div>
								<div class="form-group m-t-10 row">
									<label for="example-text-input" class="col-2 col-form-label">Bottom Tag line</label>
									<div class="col-10">
										<input id="featuresbottom_tag_line" type="text" class="form-control" name="features[bottom_tag_line]">
										
									</div>
								</div>
								<div class="form-group m-t-10 row">
									<label for="example-text-input" class="col-2 col-form-label">Element Animation</label>
									<div class="col-10">
										<input id="featureselements_animation" type="text" class="form-control" name="features[elements_animation]">
										
									</div>
									</div><div class="form-group m-t-10 row"> <label for="example-text-input" class="col-2 col-form-label">Image Upload</label> <div class="col-10"><input type="hidden" name="features[img]" id="featuresimg"> <input type="file" class="form-control" name="features[img]"> </div> </div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Status</label>
										<div class="col-4 bt-switch">
											<div class="m-b-30 col-lg-6">
												<input name="features[status]" value="0" type="hidden" >
												<input name="features[status]" id="featuresstatus" value="1"  type="checkbox" data-on-color="info" data-off-color="danger">
											</div>
										</div>
									</div>
									
									
								</div>
								<div class="tab-pane" id="info3" role="tabpanel">
									
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Articles Style</label>
										<div class="col-10">
											<select id="articlessection_style" name="articles[section_style]" class="select2 form-control custom-select" style="width: 100%; height:36px;">
												<option value="article/article03.php">Article03</option>
												<option value="article/article09.php">Article09</option>
												<option value="article/article10.php">Article10</option>
											</select>
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Title</label>
										<div class="col-10">
											<input id="articlestitle" type="text" class="form-control" name="articles[title]">
											
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Top Tag Line</label>
										<div class="col-10">
											<input id="articlestop_tag_line" type="text" class="form-control" name="articles[top_tag_line]">
											
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Bottom Tag line</label>
										<div class="col-10">
											<input id="articlesbottom_tag_line" type="text" class="form-control" name="articles[bottom_tag_line]">
											
										</div>
									</div>
									<div class="form-group m-t-10 row">
										<label for="example-text-input" class="col-2 col-form-label">Element Animation</label>
										<div class="col-10">
											<input id="articleselements_animation" type="text" class="form-control" name="articles[elements_animation]">
											
										</div>
										</div><div class="form-group m-t-10 row"> <label for="example-text-input" class="col-2 col-form-label">Image Upload</label> <div class="col-10"><input type="hidden" name="articles[img]" id="articlesimg"> <input type="file" class="form-control" name="articles[img]"> </div> </div>
										<div class="form-group m-t-10 row">
											<label for="example-text-input" class="col-2 col-form-label">Status</label>
											<div class="col-4 bt-switch">
												<div class="m-b-30 col-lg-6">
													<input name="articles[status]" value="0" type="hidden" >
													<input name="articles[status]" id="articlesstatus" value="1"  type="checkbox" data-on-color="info" data-off-color="danger">
												</div>
											</div>
										</div>
										
										
									</div>
									<div class="tab-pane" id="info4" role="tabpanel">
										
										<div class="form-group m-t-10 row">
											<label for="example-text-input" class="col-2 col-form-label">Latest Information Style</label>
											<div class="col-10">
												<select id="latest_infnsection_style" name="latest_infn[section_style]" class="select2 form-control custom-select" style="width: 100%; height:36px;">
													<option value="latest_information7.php">Latest Information7</option>
												</select>
											</div>
										</div>
										<div class="form-group m-t-10 row">
											<label for="example-text-input" class="col-2 col-form-label">Title</label>
											<div class="col-10">
												<input id="latest_infntitle" type="text" class="form-control" name="latest_infn[title]">
												
											</div>
										</div>
										<div class="form-group m-t-10 row">
											<label for="example-text-input" class="col-2 col-form-label">Top Tag Line</label>
											<div class="col-10">
												<input id="latest_infntop_tag_line" type="text" class="form-control" name="latest_infn[top_tag_line]">
												
											</div>
										</div>
										<div class="form-group m-t-10 row">
											<label for="example-text-input" class="col-2 col-form-label">Bottom Tag line</label>
											<div class="col-10">
												<input id="latest_infnbottom_tag_line" type="text" class="form-control" name="latest_infn[bottom_tag_line]">
												
											</div>
										</div>
										<div class="form-group m-t-10 row">
											<label for="example-text-input" class="col-2 col-form-label">Element Animation</label>
											<div class="col-10">
												<input id="latest_infnelements_animation" type="text" class="form-control" name="latest_infn[elements_animation]">
												
											</div>
											</div><div class="form-group m-t-10 row"> <label for="example-text-input" class="col-2 col-form-label">Image Upload</label> <div class="col-10"><input type="hidden" name="latest_infn[img]" id="latest_infnimg"> <input type="file" class="form-control" name="latest_infn[img]"> </div> </div>
											<div class="form-group m-t-10 row">
												<label for="example-text-input" class="col-2 col-form-label">Status</label>
												<div class="col-4 bt-switch">
													<div class="m-b-30 col-lg-6">
														<input name="latest_infn[status]" value="0" type="hidden" >
														<input name="latest_infn[status]" id="latest_infnstatus" value="1"  type="checkbox" data-on-color="info" data-off-color="danger">
													</div>
												</div>
											</div>
											
											
										</div>
										<div class="tab-pane" id="info5" role="tabpanel">
											
											<div class="form-group m-t-10 row">
												<label for="example-text-input" class="col-2 col-form-label">Teams Style</label>
												<div class="col-10">
													<select id="teamssection_style" name="teams[section_style]" class="select2 form-control custom-select" style="width: 100%; height:36px;">
														<option value="team/team7.php">Team7</option>
														<option value="team/teamBackground.php">Team Background</option>
														<option value="team/teamBorder.php">Team Border</option>
													</select>
												</div>
											</div>
											<div class="form-group m-t-10 row">
												<label for="example-text-input" class="col-2 col-form-label">Title</label>
												<div class="col-10">
													<input id="teamstitle" type="text" class="form-control" name="teams[title]">
													
												</div>
											</div>
											<div class="form-group m-t-10 row">
												<label for="example-text-input" class="col-2 col-form-label">Top Tag Line</label>
												<div class="col-10">
													<input id="teamstop_tag_line" type="text" class="form-control" name="teams[top_tag_line]">
													
												</div>
											</div>
											<div class="form-group m-t-10 row">
												<label for="example-text-input" class="col-2 col-form-label">Bottom Tag line</label>
												<div class="col-10">
													<input id="teamsbottom_tag_line" type="text" class="form-control" name="teams[bottom_tag_line]">
													
												</div>
											</div>
											<div class="form-group m-t-10 row">
												<label for="example-text-input" class="col-2 col-form-label">Element Animation</label>
												<div class="col-10">
													<input id="teamselements_animation" type="text" class="form-control" name="teams[elements_animation]">
													
												</div>
												</div><div class="form-group m-t-10 row"> <label for="example-text-input" class="col-2 col-form-label">Image Upload</label> <div class="col-10"><input type="hidden" name="teams[img]" id="teamsimg"> <input type="file" class="form-control" name="teams[img]"> </div> </div>
												<div class="form-group m-t-10 row">
													<label for="example-text-input" class="col-2 col-form-label">Status</label>
													<div class="col-4 bt-switch">
														<div class="m-b-30 col-lg-6">
															<input name="teams[status]" value="0" type="hidden" >
															<input name="teams[status]" id="teamsstatus" value="1"  type="checkbox" data-on-color="info" data-off-color="danger">
														</div>
													</div>
												</div>
												
												
											</div>
											<div class="tab-pane" id="info6" role="tabpanel">
												
												<div class="form-group m-t-10 row">
													<label for="example-text-input" class="col-2 col-form-label">Client Testmonials Style</label>
													<div class="col-10">
														<select id="client_testimonialssection_style" name="client_testimonials[section_style]" class="select2 form-control custom-select" style="width: 100%; height:36px;">
															<option value="testimonials/testimonial01.php">Client Testmonials01</option>
															<option value="testimonials/testimonial02.php">Client Testmonials02</option>
															<option value="testimonials/testimonial03.php">Client Testmonials03</option>
														</select>
													</div>
												</div>
												<div class="form-group m-t-10 row">
													<label for="example-text-input" class="col-2 col-form-label">Title</label>
													<div class="col-10">
														<input id="client_testimonialstitle" type="text" class="form-control" name="client_testimonials[title]">
														
													</div>
												</div>
												<div class="form-group m-t-10 row">
													<label for="example-text-input" class="col-2 col-form-label">Top Tag Line</label>
													<div class="col-10">
														<input id="client_testimonialstop_tag_line" type="text" class="form-control" name="client_testimonials[top_tag_line]">
														
													</div>
												</div>
												<div class="form-group m-t-10 row">
													<label for="example-text-input" class="col-2 col-form-label">Bottom Tag line</label>
													<div class="col-10">
														<input id="client_testimonialsbottom_tag_line" type="text" class="form-control" name="client_testimonials[bottom_tag_line]">
														
													</div>
												</div>
												<div class="form-group m-t-10 row">
													<label for="example-text-input" class="col-2 col-form-label">Element-Animation</label>
													<div class="col-10">
														<input id="client_testimonialselements_animation" type="text" class="form-control" name="client_testimonials[elements_animation]">
														
													</div>
													</div>
													<div class="form-group m-t-10 row"> <label for="example-text-input" class="col-2 col-form-label">Image Upload</label> <div class="col-10"><input type="hidden" name="client_testimonials[img]" id="client_testimonialsimg"> <input type="file" class="form-control" name="client_testimonials[img]"> </div> </div>
													<div class="form-group m-t-10 row">
														<label for="example-text-input" class="col-2 col-form-label">Status</label>
														<div class="col-4 bt-switch">
															<div class="m-b-30 col-lg-6">
																<input name="client_testimonials[status]" value="0" type="hidden" >
																<input name="client_testimonials[status]" id="client_testimonialsstatus" value="1"  type="checkbox" data-on-color="info" data-off-color="danger">
															</div>
														</div>
													</div>
													
													
												</div>
												<div class="tab-pane" id="info7" role="tabpanel">
													
													<div class="form-group m-t-10 row">
														<label for="example-text-input" class="col-2 col-form-label">Client Style</label>
														<div class="col-10">
															<select id="clientsection_style" name="client[section_style]" class="select2 form-control custom-select" style="width: 100%; height:36px;">
																
																<option value="client/client01.php">Client01</option>
																<option value="client/client02.php">Client02</option>
																<option value="client/client03.php">Client03</option>
																
															</select>
														</div>
													</div>
													<div class="form-group m-t-10 row">
														<label for="example-text-input" class="col-2 col-form-label">Title</label>
														<div class="col-10">
															<input id="clienttitle" type="text" class="form-control" name="client[title]">
															
														</div>
													</div>
													<div class="form-group m-t-10 row">
														<label for="example-text-input" class="col-2 col-form-label">Top Tag Line</label>
														<div class="col-10">
															<input id="clienttop_tag_line" type="text" class="form-control" name="client[top_tag_line]">
															
														</div>
													</div>
													<div class="form-group m-t-10 row">
														<label for="example-text-input" class="col-2 col-form-label">Bottom Tag line</label>
														<div class="col-10">
															<input id="clientbottom_tag_line" type="text" class="form-control" name="client[bottom_tag_line]">
															
														</div>
													</div>
													<div class="form-group m-t-10 row">
														<label for="example-text-input" class="col-2 col-form-label">Element-Animation</label>
														<div class="col-10">
															<input id="clientelements_animation" type="text" class="form-control" name="client[elements_animation]">
															
														</div>
														</div><div class="form-group m-t-10 row"> <label for="example-text-input" class="col-2 col-form-label">Image Upload</label> <div class="col-10"><input type="hidden" name="client[img]" id="clientimg"> <input type="file" class="form-control" name="client[img]"> </div> </div>
														<div class="form-group m-t-10 row">
															<label for="example-text-input" class="col-2 col-form-label">Status</label>
															<div class="col-4 bt-switch">
																<div class="m-b-30 col-lg-6">
																	<input name="client[status]" value="0" type="hidden" >
																	<input name="client[status]" id="clientstatus" value="1"  type="checkbox" data-on-color="info" data-off-color="danger">
																</div>
															</div>
														</div>
														
														
													</div>
													<div class="tab-pane" id="info8" role="tabpanel">
														
														<div class="form-group m-t-10 row">
															<label for="example-text-input" class="col-2 col-form-label">Pricing Table Style</label>
															<div class="col-10">
																<select id="pricing_tablesection_style" name="pricing_table[section_style]" class="select2 form-control custom-select" style="width: 100%; height:36px;">
																	<option value="pricingTable.php">Pricing Table </option>
																	<option value="pricingTableBoxed.php">Pricing Table Boxed</option>
																	<option value="pricingTableCol2.php">Pricing Table 2 columns </option>
																	<option value="pricingTableCol3.php">Pricing Table 3 columns </option>
																	<option value="pricingTableCol4.php">Pricing Table 4 columns </option>
																	<option value="pricingTableMember.php">Pricing Table Member </option>
																</select>
															</div>
														</div>
														<div class="form-group m-t-10 row">
															<label for="example-text-input" class="col-2 col-form-label">Title</label>
															<div class="col-10">
																<input id="pricing_tabletitle" type="text" class="form-control" name="pricing_table[title]">
																
															</div>
														</div>
														<div class="form-group m-t-10 row">
															<label for="example-text-input" class="col-2 col-form-label">Top Tag Line</label>
															<div class="col-10">
																<input id="pricing_tabletop_tag_line" type="text" class="form-control" name="pricing_table[top_tag_line]">
																
															</div>
														</div>
														<div class="form-group m-t-10 row">
															<label for="example-text-input" class="col-2 col-form-label">Bottom Tag line</label>
															<div class="col-10">
																<input id="pricing_tablebottom_tag_line" type="text" class="form-control" name="pricing_table[bottom_tag_line]">
																
															</div>
														</div>
														<div class="form-group m-t-10 row">
															<label for="example-text-input" class="col-2 col-form-label">Element-Animation</label>
															<div class="col-10">
																<input id="pricing_tableelements_animation" type="text" class="form-control" name="pricing_table[elements_animation]">
																
															</div>
															</div><div class="form-group m-t-10 row"> <label for="example-text-input" class="col-2 col-form-label">Image Upload</label> <div class="col-10"><input type="hidden" name="pricing_table[img]" id="pricing_tableimg"> <input type="file" class="form-control" name="pricing_table[img]"> </div> </div>
															<div class="form-group m-t-10 row">
																<label for="example-text-input" class="col-2 col-form-label">Status</label>
																<div class="col-4 bt-switch">
																	<div class="m-b-30 col-lg-6">
																		<input name="pricing_table[status]" value="0" type="hidden" >
																		<input name="pricing_table[status]" id="pricing_tablestatus" value="1"  type="checkbox" data-on-color="info" data-off-color="danger">
																	</div>
																</div>
															</div>
															
															
														</div>
														<div class="tab-pane" id="info9" role="tabpanel">
															
															<div class="form-group m-t-10 row">
																<label for="example-text-input" class="col-2 col-form-label">Counter Style</label>
																<div class="col-10">
																	<select id="countersection_style" name="counter[section_style]" class="select2 form-control custom-select" style="width: 100%; height:36px;">
																		<option value="counter/counter01.php">Counter01</option>
																		<option value="counter/counter02.php">Counter02</option>
																		<option value="counter/counter03.php">Counter03</option>
																	</select>
																</div>
															</div>
															<div class="form-group m-t-10 row">
																<label for="example-text-input" class="col-2 col-form-label">Title</label>
																<div class="col-10">
																	<input id="countertitle" type="text" class="form-control" name="counter[title]">
																	
																</div>
															</div>
															<div class="form-group m-t-10 row">
																<label for="example-text-input" class="col-2 col-form-label">Top Tag Line</label>
																<div class="col-10">
																	<input id="countertop_tag_line" type="text" class="form-control" name="counter[top_tag_line]">
																	
																</div>
															</div>
															<div class="form-group m-t-10 row">
																<label for="example-text-input" class="col-2 col-form-label">Bottom Tag line</label>
																<div class="col-10">
																	<input id="counterbottom_tag_line" type="text" class="form-control" name="counter[bottom_tag_line]">
																	
																</div>
															</div>
															<div class="form-group m-t-10 row">
																<label for="example-text-input" class="col-2 col-form-label">Element-Animation</label>
																<div class="col-10">
																	<input id="counterelements_animation" type="text" class="form-control" name="counter[elements_animation]">
																	
																</div>
																</div><div class="form-group m-t-10 row"> <label for="example-text-input" class="col-2 col-form-label">Image Upload</label> <div class="col-10"><input type="hidden" name="counter[img]" id="counterimg"> <input type="file" class="form-control" name="counter[img]"> </div> </div>
																<div class="form-group m-t-10 row">
																	<label for="example-text-input" class="col-2 col-form-label">Status</label>
																	<div class="col-4 bt-switch">
																		<div class="m-b-30 col-lg-6">
																			<input name="counter[status]" value="0" type="hidden" >
																			<input name="counter[status]" id="counterstatus" value="1"  type="checkbox" data-on-color="info" data-off-color="danger">
																		</div>
																	</div>
																</div>
																
																
															</div>
															<div class="tab-pane" id="info10" role="tabpanel">
																
																<div class="form-group m-t-10 row">
																	<label for="example-text-input" class="col-2 col-form-label">Countdown Timer Style</label>
																	<div class="col-10">
																		<select id="countdown_timersection_style" name="countdown_timer[section_style]" class="select2 form-control custom-select" style="width: 100%; height:36px;">
																			<option value="countdowntimer/countdowntimer1.php">Countdowntimer1</option>
																			<option value="countdowntimer/countdowntimer2.php">Countdowntimer2</option>
																			<option value="countdowntimer/countdowntimer3.php">Countdowntimer3</option>
																		</select>
																	</div>
																</div>
																<div class="form-group m-t-10 row">
																	<label for="example-text-input" class="col-2 col-form-label">Title</label>
																	<div class="col-10">
																		<input id="countdown_timertitle" type="text" class="form-control" name="countdown_timer[title]">
																		
																	</div>
																</div>
																<div class="form-group m-t-10 row">
																	<label for="example-text-input" class="col-2 col-form-label">Top Tag Line</label>
																	<div class="col-10">
																		<input id="countdown_timertop_tag_line" type="text" class="form-control" name="countdown_timer[top_tag_line]">
																		
																	</div>
																</div>
																<div class="form-group m-t-10 row">
																	<label for="example-text-input" class="col-2 col-form-label">Bottom Tag line</label>
																	<div class="col-10">
																		<input id="countdown_timerbottom_tag_line" type="text" class="form-control" name="countdown_timer[bottom_tag_line]">
																		
																	</div>
																</div>
																<div class="form-group m-t-10 row">
																	<label for="example-text-input" class="col-2 col-form-label">Element-Animation</label>
																	<div class="col-10">
																		<input id="countdown_timerelements_animation" type="text" class="form-control" name="countdown_timer[elements_animation]">
																		
																	</div>
																	</div><div class="form-group m-t-10 row"> <label for="example-text-input" class="col-2 col-form-label">Image Upload</label> <div class="col-10"><input type="hidden" name="countdown_timer[img]" id="countdown_timerimg"> <input type="file" class="form-control" name="countdown_timer[img]"> </div> </div>
																	<div class="form-group m-t-10 row">
																		<label for="example-text-input" class="col-2 col-form-label">Status</label>
																		<div class="col-4 bt-switch">
																			<div class="m-b-30 col-lg-6">
																				<input name="countdown_timer[status]" value="0" type="hidden" >
																				<input name="countdown_timer[status]" id="countdown_timerstatus" value="1"  type="checkbox" data-on-color="info" data-off-color="danger">
																			</div>
																		</div>
																	</div>
																	
																	
																</div>
																<div class="tab-pane" id="info11" role="tabpanel">
																	<div class="form-group m-t-10 row">
																		<label for="example-text-input" class="col-2 col-form-label">FAQ Style</label>
																		<div class="col-10">
																			<select id="faqsection_style" name="faq[section_style]" class="select2 form-control custom-select" style="width: 100%; height:36px;">
																				<option value="faq/faq01.php">Faq 01</option>
																				<option value="faq/faq02.php">Faq 02</option>
																				<option value="faq/faq03.php">Faq 03</option>
																			</select>
																		</div>
																	</div>
																	<div class="form-group m-t-10 row">
																		<label for="example-text-input" class="col-2 col-form-label">Title</label>
																		<div class="col-10">
																			<input id="faqtitle" type="text" class="form-control" name="faq[title]">
																			
																		</div>
																	</div>
																	<div class="form-group m-t-10 row">
																		<label for="example-text-input" class="col-2 col-form-label">Top Tag Line</label>
																		<div class="col-10">
																			<input id="faqtop_tag_line" type="text" class="form-control" name="faq[top_tag_line]">
																			
																		</div>
																	</div>
																	<div class="form-group m-t-10 row">
																		<label for="example-text-input" class="col-2 col-form-label">Bottom Tag line</label>
																		<div class="col-10">
																			<input id="faqbottom_tag_line" type="text" class="form-control" name="faq[bottom_tag_line]">
																			
																		</div>
																	</div>
																	<div class="form-group m-t-10 row">
																		<label for="example-text-input" class="col-2 col-form-label">Element-Animation</label>
																		<div class="col-10">
																			<input id="faqelements_animation" type="text" class="form-control" name="faq[elements_animation]">
																			
																		</div>
																		</div><div class="form-group m-t-10 row"> <label for="example-text-input" class="col-2 col-form-label">Image Upload</label> <div class="col-10"><input type="hidden" name="faq[img]" id="faqimg"> <input type="file" class="form-control" name="faq[img]"> </div> </div>
																		<div class="form-group m-t-10 row">
																			<label for="example-text-input" class="col-2 col-form-label">Status</label>
																			<div class="col-4 bt-switch">
																				<div class="m-b-30 col-lg-6">
																					<input name="faq[status]" value="0" type="hidden" >
																					<input name="faq[status]" id="faqstatus" value="1"  type="checkbox" data-on-color="info" data-off-color="danger">
																				</div>
																			</div>
																		</div>
																	</div>
																		<div class="tab-pane" id="info12" role="tabpanel">
																	<div class="form-group m-t-10 row">
																		<label for="example-text-input" class="col-2 col-form-label">Contact Us Style</label>
																		<div class="col-10">
																			<select id="contactsection_style" name="contact[section_style]" class="select2 form-control custom-select" style="width: 100%; height:36px;">
																				<option value="contact/contact1.php">Contact 01</option>
																				<!-- <option value="contact/contact2.php">Contact 02</option> -->
																			</select>
																		</div>
																	</div>
																	<div class="form-group m-t-10 row">
																		<label for="example-text-input" class="col-2 col-form-label">Page Title</label>
																		<div class="col-10">
																			<input id="contactpage_title" type="text" class="form-control" name="contact[page_title]">
																		</div>
																	</div>
																	<div class="form-group m-t-10 row">
																		<label for="example-text-input" class="col-2 col-form-label">Page Tag line</label>
																		<div class="col-10">
																			<input id="contactpage_tag" type="text" class="form-control" name="contact[page_tag]">
																		</div>
																	</div>
																	<div class="form-group m-t-10 row">
																		<label for="example-text-input" class="col-2 col-form-label">Title</label>
																		<div class="col-10">
																			<input id="contacttitle" type="text" class="form-control" name="contact[title]">
																		</div>
																	</div>
																	<div class="form-group m-t-10 row">
																		<label for="example-text-input" class="col-2 col-form-label">Top Tag Line</label>
																		<div class="col-10">
																			<input id="contacttop_tag_line" type="text" class="form-control" name="contact[top_tag_line]">
																			
																		</div>
																	</div>
																	<div class="form-group m-t-10 row">
																		<label for="example-text-input" class="col-2 col-form-label">Bottom Tag line</label>
																		<div class="col-10">
																			<input id="contactbottom_tag_line" type="text" class="form-control" name="contact[bottom_tag_line]">
																			
																		</div>
																	</div>
																	<div class="form-group m-t-10 row">
																		<label for="example-text-input" class="col-2 col-form-label">Element-Animation</label>
																		<div class="col-10">
																			<input id="contactelements_animation" type="text" class="form-control" name="contact[elements_animation]">
																			
																		</div>
																		</div><div class="form-group m-t-10 row"> <label for="example-text-input" class="col-2 col-form-label">Image Upload</label> <div class="col-10"><input type="hidden" name="contact[img]" id="contactimg"> <input type="file" class="form-control" name="contact[img]"> </div> </div>
																		<div class="form-group m-t-10 row">
																			<label for="example-text-input" class="col-2 col-form-label">Status</label>
																			<div class="col-4 bt-switch">
																				<div class="m-b-30 col-lg-6">
																					<input name="contact[status]" value="0" type="hidden" >
																					<input name="contact[status]" id="contactstatus" value="1"  type="checkbox" data-on-color="info" data-off-color="danger">
																				</div>
																			</div>
																		</div>
																	</div>
																		<button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Save</button>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>
											
											<?php include 'include/footer.php'; ?>
											<?php include 'include/js-controller.php'; ?>