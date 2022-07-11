<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h5 class="card-title"><?php echo $title_page; ?></h5>
						<nav class="float-sm-start float-md-end float-lg-end float-xl-end mt-1" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
						  <ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="<?php echo base_url('project') ?>">List of Projects and Programs</a></li>
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
						<h6 class="fst-italic">PROJECT/PROGRAM INFORMATION</h6>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
					    		<div class="form-floating">
								  <input type="text" class="form-control text-uppercase" id="title" name="title" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">TITLE</label>
								</div>
					    	</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
								<div class="form-floating">
								  <textarea class="form-control" placeholder="Leave a comment here" name="description" id="description" style="height: 120px"></textarea>
								  <label for="floatingTextarea2">DESCRIPTION</label>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
					    		<div class="form-floating">
								  <input type="text" class="form-control text-uppercase" id="objectives" name="objectives" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">OBJECTIVES/GOALS</label>
								</div>
					    	</div>
					    	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
					    		<div class="form-floating">
								  <input type="text" class="form-control text-uppercase" id="beneficiaries" name="beneficiaries" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">BENEFICIARIES/ STAKEHOLDERS</label>
								</div>
					    	</div>
					    	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
					    		<div class="form-floating">
								  <input type="text" class="form-control text-uppercase" id="budget" name="budget" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">BUDGET</label>
								</div>
					    	</div>
					    	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
					    		<div class="form-floating">
								  <input type="date" class="form-control text-uppercase" id="date_start" name="date_start" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">DATE START</label>
								</div>
					    	</div>
					    	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
					    		<div class="form-floating">
								  <input type="date" class="form-control text-uppercase" id="date_end" name="date_end" placeholder="" value="" autocomplete="off">
								  <label for="floatingInputValue">DATE END</label>
								</div>
					    	</div>
					    	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
								<div class="form-floating">
									<select name="complaint_status" class="form-select" id="complaint_status" aria-label="Floating label select example">
										<option value="" selected="selected">CHOOSE...</option>
										<option value="COMMITTEE FOR EDUCATION">COMMITTEE FOR EDUCATION</option>
										<option value="PEACE AND ORDER">PEACE AND ORDER</option>
										<option value="HEALTH">HEALTH</option>
									</select>
									<label for="floatingSelect">PROPONENT</label>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
								<div class="form-floating">
								  <textarea class="form-control" placeholder="Leave a comment here" name="feedback" id="feedback" style="height: 200px"></textarea>
								  <label for="floatingTextarea2">REVIEW/ FEEDBACK</label>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3 text-center">
								<button type="submit" class="btn btn-success">SUBMIT</button>
							</div>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>