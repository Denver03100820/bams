<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h5 class="card-title"><?php echo $title_page; ?></h5>
						<nav class="float-sm-start float-md-end float-lg-end float-xl-end mt-1" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
						  <ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="<?php echo base_url('incident') ?>">List of Incident Reports</a></li>
						    <li class="breadcrumb-item active" aria-current="page"><?php echo $title_page; ?></li>
						  </ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
		<div class="card ">
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<a href="<?php echo base_url('incident/edit') ?>" class="btn btn-success btn-sm float-end"><i class="fas fa-edit"></i> EDIT</a>
						<h6 class="fst-italic">INCIDENT INFORMATION</h6>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<tbody>
									<tr>
										<td width="35%">
											<b>INCIDENT DATE AND TIME</b>
										</td>
										<td>
											JANUARY 01, 2022 11:15 AM
										</td>
									</tr>
									<tr>
										<td>
											<b>ACTION TAKEN</b>
										</td>
										<td>
											INSPECTION
										</td>
									</tr>
									<tr>
										<td>
											<b>DESK OFFICER/ SECURITY OFFICER <br>INCHARGE/ON-DUTY</b>
										</td>
										<td>
											JUAN BAUTISTA
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 mt-2">
						<div class="form-floating">
						  <textarea class="form-control" placeholder="Leave a comment here" name="nature_of_complaint" id="nature_of_complaint" style="height: 170px" disabled>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</textarea>
						  <label for="floatingTextarea2">INCIDENT DESCRIPTION/DETAILS</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>