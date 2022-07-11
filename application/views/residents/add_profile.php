<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h5 class="card-title"><?php echo $title_page; ?></h5>
						<nav class="float-sm-start float-md-end float-lg-end float-xl-end mt-1" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
						  <ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="<?php echo base_url('residents') ?>">List of Residents</a></li>
						    <li class="breadcrumb-item active" aria-current="page"><?php echo $title_page; ?></li>
						  </ol>
						</nav>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
						<h6><i class="fab fa-wpforms"></i> Resident Registration Form</h6>
					<hr>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h6 class="fst-italic">PERSONAL INFORMATION:</h6>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
						<div class="row">
					    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2 profile_pic text-center">
					    		<p class="fw-bold">PROFILE PICTURE</p>
					    		<img src="<?php echo base_url().'assets/images/profile.png' ?>" class="rounded"  alt="Upload Picture">
					    		<div class="input-group mb-3">
								  <input type="file" class="form-control" id="inputGroupFile01">
								</div>
					    	</div>

					    </div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 mt-2">
						<div class="row">
					    	<div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 mt-2">
					    		<div class="form-floating">
								  <input type="text" class="form-control text-capitalize" id="title_name" name="title_name" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">TITLE <!-- <b>*</b> --></label>
								</div>
					    	</div>
							<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
					    		<div class="form-floating">
								  <input type="text" class="form-control text-capitalize" id="family_name" name="family_name" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">LAST NAME</label>
								</div>
					    	</div>
					    	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
					    		<div class="form-floating">
								  <input type="text" class="form-control text-capitalize" id="first_name" name="first_name" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">FIRST NAME</label>
								</div>
					    	</div>
					    	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
					    		<div class="form-floating">
								  <input type="text" class="form-control text-capitalize" id="middle_name" name="middle_name" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">MIDDLE NAME</label>
								</div>
					    	</div>
					    	<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 mt-2">
					    		<div class="form-floating">
								  <input type="text" class="form-control text-capitalize" id="suffix_name" name="suffix_name" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">NAME SUFFIX</label>
								</div>
					    	</div>
					    	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
								<div class="form-floating">
									<select name="gender" class="form-select" id="gender" aria-label="Floating label select example">
										<option value="" selected="selected">SELECT GENDER</option>
										<option value="M">MALE</option>
										<option value="F">FEMALE</option>
									</select>
									<label for="floatingSelect">GENDER</label>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
								<div class="form-floating">
									<select name="civil_status" class="form-select" id="civil_status" aria-label="Floating label select example">
										<option value="" selected="selected">SELECT MARITAL STATUS</option>
										<option value="SINGLE">SINGLE</option>
										<option value="MARRIED">MARRIED</option>
										<option value="DIVORCED">DIVORCED</option>
										<option value="WIDOWED">WIDOWED</option>
										<option value="SEPARATED">SEPARATED</option>
										<option value="LIVE-IN">LIVE-IN</option>
									</select>
									<label for="floatingSelect">MARITAL STATUS</label>
								</div>
							</div>
					    	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
					    		<div class="form-floating">
								  <input type="date" class="form-control" id="birth_date" name="birth_date" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">BIRTH DATE</label>
								</div>
					    	</div>
					    	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
					    		<div class="form-floating">
								  <input type="text" class="form-control text-uppercase" id="spouse_name" name="spouse_name" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">NAME OF SPOUSE(If Married)</label>
								</div>
					    	</div>
					    	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
					    		<div class="form-floating">
								  <input type="number" class="form-control text-uppercase" id="contact_no" name="mobile_no" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">CONTACT NUMBER</label>
								</div>
					    	</div>
					    	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
					    		<div class="form-floating">
								  <input type="text" class="form-control text-uppercase" id="lengthofstay" name="lengthofstay" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">LENGTH OF STAY</label>
								</div>
					    	</div>

						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
						<h6 class="fst-italic">ADDRESS INFORMATION:</h6>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
					    		<div class="form-floating">
								  <input type="text" class="form-control text-uppercase" id="house_no" name="house_no" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">HOUSE NO.</label>
								</div>
					    	</div>
					    	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
								<div class="form-floating">
									<select name="street" class="form-select" id="street" aria-label="Floating label select example">
										<option value="" selected="selected">SELECT STREET</option>
										<option value="TEST STREET">TEST STREET</option>
									</select>
									<label for="floatingSelect">STREET</label>
								</div>
							</div>
					    	<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 mt-2">
					    		<div class="form-floating">
								  <input type="text" class="form-control text-capitalize" id="barangay" name="barangay" placeholder="" value="PIO DEL PILAR" autocomplete="off" disabled>
								  <label for="floatingInputValue">BARANGAY</label>
								</div>
					    	</div>
					    	<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 mt-2">
					    		<div class="form-floating">
								  <input type="text" class="form-control text-capitalize" id="city" name="city" placeholder="" value="MAKATI CITY" autocomplete="off" disabled>
								  <label for="floatingInputValue">CITY</label>
								</div>
					    	</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
					    		<div class="form-floating">
								  <input type="date" class="form-control text-uppercase" id="address_from" name="address_from" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">FROM</label>
								</div>
					    	</div>
					    	<!-- <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
					    		<div class="form-floating">
								  <input type="date" class="form-control text-uppercase" id="address_to" name="address_to" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">TO</label>
								</div>
					    	</div> -->
					    	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
					    		<div class="form-floating">
								  <input type="text" class="form-control text-uppercase" id="address_to_prsent" name="address_to_prsent" placeholder="" value="PRESENT" autocomplete="off" disabled>
								  <label for="floatingInputValue">TO</label>
								</div>
					    	</div>
					    	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
					    		<button type="button" class="btn btn-success btn-sm mt-3">PRESENT</button>
					    	</div>
					    </div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
						<h6 class="fst-italic">IDENTIFICATION INFORMATION:</h6>
						<a class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#add_id_information"><i class="fas fa-plus"></i> Add Identification Information</a>

					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<tbody>
									<tr>
										<td><b>#</b></td>
										<td><b>ID CARD TYPE</b></td>
										<td><b>ID NUMBER</b></td>
										<td><b>ACTION</b></td>
									</tr>
									<tr>
										<td>1</td>
										<td>YELLOW CARD</td>
										<td>2022000000001</td>
										<td><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-times"></i></button></td>
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