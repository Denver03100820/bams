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
						<a href="<?php echo base_url('business/add') ?>" class="btn btn-sm btn-success"><i class="fas fa-plus-circle"></i> Add New Business</a>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
						<form class="row row-cols-lg-auto g-3 align-items-center">

						  <div class="col-12">
						    <label class="" for="inlineFormSelectPref">Search By:</label>
						    <select class="form-select" id="inlineFormSelectPref">
						      <option selected>Choose...</option>
						      <option value="1">Type of Business</option>
						      <option value="2">Category Business</option>
						      <option value="2">Business Name</option>
						      <option value="3">Business Owner/s</option>
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
										<th>Type of Business</th>
										<th>Category Business</th>
										<th>Business Name</th>
										<th>Business Owner/s</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>SMALL BUSINESS</td>
										<td>SARI-SARI STORE</td>
										<td>BDD AXIE</td>
										<td>JOHN DENVER DIAZ</td>
										<th><a href="<?php echo base_url('business/view') ?>" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="View Business"><i class="fas fa-eye"></i></a></th>
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