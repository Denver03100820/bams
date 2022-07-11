<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h5 class="card-title"><?php echo $title_page; ?></h5>
						<nav class="float-sm-start float-md-end float-lg-end float-xl-end mt-1" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
						  <ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="<?php echo base_url('certificate') ?>">List of Certificates and Permits</a></li>
						    <li class="breadcrumb-item active" aria-current="page"><?php echo $title_page; ?></li>
						  </ol>
						</nav>
					</div>
				</div>
				</div>
			</div>
		</div>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h6 class="fst-italic">CERTIFICATES/PERMITS INFORMATION</h6>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<div class="row">
					    	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
								<div class="form-floating">
									<select name="type_of_certificate" class="form-select" id="type_of_certificate" aria-label="Floating label select example">
										<option value="" selected="selected">CHOOSE...</option>
										<option value="BARANGAY CLEARANCE">BARANGAY CLEARANCE</option>
										<option value="BARANGAY CERTIFICATE OF INDIGENCY">BARANGAY CERTIFICATE OF INDIGENCY</option>
										<option value="BARANGAY CLEARANCE FOR PROOF OF RESIDENCE AND IDENTIFICATION">BARANGAY CLEARANCE FOR PROOF OF RESIDENCE AND IDENTIFICATION</option>
									</select>
									<label for="floatingSelect">TYPE OF CERTIFICATE/PREMIT</label>
								</div>
							</div>
					    	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
								<div class="form-floating">
					              	<div class="form-floating">
										<select name="type_of_certificate" class="form-select" id="type_of_certificate" aria-label="Floating label select example">
											<option value="" selected="selected">CHOOSE...</option>
											<option value="FOR EMPLOYMENT">FOR EMPLOYMENT</option>
											<option value="FOR PROOF OF RESIDENCE AND IDENTIFICATION">PURPOSE</option>
										</select>
										<label for="floatingSelect">PURPOSE</label>
					    			</div>
					    		</div>
					    	</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
								<a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#search_citizen"><i class="fas fa-search"></i> Search Resident</a>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
								<div class="form-floating">
					              <input type="text" class="form-control text-capitalize" id="name" name="name" placeholder="" value="" autocomplete="off" disabled>
					              <label for="floatingInputValue">NAME</label>
					            </div>
					    	</div>
					    	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
								<div class="form-floating">
					              <input type="text" class="form-control text-capitalize" id="address" name="address" placeholder="" value="" autocomplete="off" disabled>
					              <label for="floatingInputValue">ADDRESS</label>
					            </div>
					    	</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
								<div class="form-floating">
									<select name="type_of_certificate" class="form-select" id="type_of_certificate" aria-label="Floating label select example">
										<option value="" selected="selected">CHOOSE...</option>
										<option value="RELEASED">RELEASED</option>	
										<option value="CANCELLED">CANCELLED</option>	
									</select>
									<label for="floatingSelect">STATUS</label>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3 text-center">
								<a href="<?php echo base_url('certificate/view') ?>" type="submit" class="btn btn-success">SUBMIT</a>
							</div>
					    </div>
					</div>
				</div>	
			</div>	
		</div>	
	</div>	
</div>