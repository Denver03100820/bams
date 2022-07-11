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
						<a href="<?php echo base_url('property/add') ?>" class="btn btn-sm btn-success"><i class="fas fa-plus-circle"></i> Add New Property</a>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
						<form class="row row-cols-lg-auto g-3 align-items-center">

						  <div class="col-12">
						    <label class="" for="inlineFormSelectPref">Search By:</label>
						    <select class="form-select" id="inlineFormSelectPref">
						      <option selected>Choose...</option>
						      <option value="1">Type Property</option>
						      <option value="2">Owner/s Name / Developer</option>
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
										<th>Type of Property</th>
										<th>Owner/s Name / Developer</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>HOUSE</td>
										<td>JOHN DENVER DIAZ</td>
										<th><a href="<?php echo base_url('property/view') ?>" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="View Property"><i class="fas fa-eye"></i></a></th>
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