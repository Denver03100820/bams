<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="card card_min618">
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h5 class="card-title"><?php echo $title_page; ?></h5>
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<a href="<?php echo base_url('incident/add') ?>" class="btn btn-sm btn-success"><i class="fas fa-plus-circle"></i> Add New Incident</a>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
						<form class="row row-cols-lg-auto g-3 align-items-center">

						  <div class="col-12">
						    <label class="" for="inlineFormSelectPref">Search By:</label>
						    <select class="form-select" id="inlineFormSelectPref">
						      <option selected>Choose...</option>
						      <option value="1">Action Taken</option>
						      <option value="1">Incident Description</option>
						      <option value="2">Officer</option>
						    </select>
						  </div>
						  <div class="col-12">
						    <label class="" for="inlineFormInputGroupUsername">&nbsp;</label>
						      <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="">
						  </div>
						  <div class="col-12">
						    <button type="submit" class="btn btn-sm btn-primary mt-3"><i class="fas fa-search"></i> Search</button>
						  </div>
						</form>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-5">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>Incident Description/Details</th>
										<th>Incident Date and Time</th>
										<th>Action Taken</th>
										<th>Desk Officer/ Security Officer Incharge/On-Duty</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
										<td>JANUARY 01, 2022 11:15 AM</td>
										<td>INSPECTION</td>
										<td>JUAN BAUTISTA</td>
										<th><a href="<?php echo base_url('incident/view') ?>" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="View Incident"><i class="fas fa-eye"></i></a></th>
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