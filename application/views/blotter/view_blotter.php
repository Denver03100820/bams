<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h5 class="card-title"><?php echo $title_page; ?></h5>
						<nav class="float-sm-start float-md-end float-lg-end float-xl-end mt-1" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
						  <ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="<?php echo base_url('blotter') ?>">List of Blotters</a></li>
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
						<a href="<?php echo base_url('blotter/edit') ?>" class="btn btn-success btn-sm float-end"><i class="fas fa-edit"></i> EDIT</a>
						<h6 class="fst-italic">BLOTTER INFORMATION</h6>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
								<div class="table-responsive">
									<table class="table table-bordered table-hover">
										<tbody>
											<tr>
												<td width="35%">
													<b>COMPLAINED DATE AND TIME</b>
												</td>
												<td>
													JANUARY 01, 2022 11:15 AM
												</td>
											</tr>
											<tr>
												<td>
													<b>RECOMMENDATION</b>
												</td>
												<td>
													FOR HEARING
												</td>
											</tr>
											<tr>
												<td>
													<b>COMPLAINT STATUS</b>
												</td>
												<td>
													CLOSE
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="form-floating">
									  <textarea class="form-control" placeholder="Leave a comment here" name="nature_of_complaint" id="nature_of_complaint" style="height: 200px" disabled>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</textarea>
									  <label for="floatingTextarea2">DETAILS OF COMPLAIN OR CASE DESCRIPTION</label>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
								<div class="table-responsive">
									<table class="table table-bordered table-hover">
										<tbody>
											<tr>
												<td colspan="5"  class="text-center">
													<b>COMPLAINANTS</b>
												</td>
											</tr>
											<tr>
												<td><b>#</b></td>
												<td><b>NAME</b></td>
												<td><b>CONTACT NUMBER</b></td>
												<td><b>COMPLETE ADDRESS</b></td>
											</tr>
											<tr>
												<td>1</td>
												<td>Mc Jayvee Ortiz Diaz</td>
												<td>09123457</td>
												<td>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT, SED DO EIUSMOD</td>
											</tr>
										</tbody>
									</table>
									<table class="table table-bordered table-hover mt-2">
										<tbody>
											<tr>
												<td colspan="5" class="text-center">
													<b>RESPONDENTS</b>
												</td>
											</tr>
											<tr>
												<td><b>#</b></td>
												<td><b>NAME</b></td>
												<td><b>CONTACT NUMBER</b></td>
												<td><b>COMPLETE ADDRESS</b></td>
											</tr>
											<tr>
												<td>1</td>
												<td>Juan S. Dela Cruz</td>
												<td>09123457</td>
												<td>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT, SED DO EIUSMOD</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>