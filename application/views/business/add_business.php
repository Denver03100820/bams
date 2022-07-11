<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h5 class="card-title"><?php echo $title_page; ?></h5>
						<nav class="float-sm-start float-md-end float-lg-end float-xl-end mt-1" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
						  <ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="<?php echo base_url('business') ?>">List of Registered Business</a></li>
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
						<h6 class="fst-italic">REGISTER BUSINESS INFORMATION</h6>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<div class="row">
					    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2" onchange="showDiv('append_data','floatingSelectV')">
								<div class="form-floating">
									<select name="type_of_business" class="form-select" id="floatingSelectV" aria-label="Floating label select example">
										<option value="" selected="selected">CHOOSE...</option>
										<option value="SMALL BUSINESS">SMALL BUSINESS</option>
										<option value="MICRO, SMALL & MEDIUM ENTERPRISES">MICRO, SMALL & MEDIUM ENTERPRISES</option>
									</select>
									<label for="floatingSelect">TYPE OF BUSINESS</label>
								</div>
							</div>
							<div class="clearfix"></div>
				    	<div class="row" id="append_data"></div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3 text-center">
								<a href="<?php echo base_url('business/view') ?>" type="submit" class="btn btn-success">SUBMIT</a>
							</div>
					    </div>
					</div>
				</div>	
			</div>	
		</div>	
	</div>	
</div>
<script>
let small = `<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 mt-2">
								<div class="form-floating">
		              <input type="text" class="form-control text-capitalize" id="name" name="name" placeholder="" value="" autocomplete="off">
		              <label for="floatingInputValue">BUSINESS NAME</label>
		            </div>
		    			</div>
				    	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
								<div class="form-floating">
										<select name="category
										" class="form-select" id="category
										" aria-label="Floating label select example">
											<option value="" selected="selected">CHOOSE...</option>
											<option value="SARI-SARI STORE">SARI-SARI STORE</option>
											<option value="KARINDERYA">KARINDERYA</option>
											<option value="VULCANIZING SHOP">VULCANIZING SHOP</option>
											<option value="RENTAL HOUSE/ROOM">RENTAL HOUSE/ROOM</option>
										</select>
										<label for="floatingSelect">BUSINESS CATEGORY</label>
				    		</div>
				    	</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
								<a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#search_citizen"><i class="fas fa-search"></i> Search Resident</a>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 mt-2">
								<div class="form-floating">
		              <input type="text" class="form-control text-capitalize" id="name" name="name" placeholder="" value="" autocomplete="off">
		              <label for="floatingInputValue">BUSINESS OWNER</label>
		            </div>
		    			</div>
		    			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 mt-2">
								<div class="form-floating">
		              <input type="text" class="form-control text-capitalize" id="address" name="address" placeholder="" value="" autocomplete="off">
		              <label for="floatingInputValue">ADDRESS</label>
		            </div>
				    	</div>`;

let msme = `<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 mt-2">
								<div class="form-floating">
		              <input type="text" class="form-control text-capitalize" id="name" name="name" placeholder="" value="" autocomplete="off">
		              <label for="floatingInputValue">BUSINESS NAME</label>
		            </div>
		    			</div>
				    	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
								<div class="form-floating">
		              <input type="text" class="form-control text-capitalize" id="dti" name="dti" placeholder="" value="" autocomplete="off">
		              <label for="floatingInputValue">DTI NO.</label>
		            </div>
				    	</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
								<a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#search_citizen"><i class="fas fa-search"></i> Search Resident</a>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 mt-2">
								<div class="form-floating">
		              <input type="text" class="form-control text-capitalize" id="name" name="name" placeholder="" value="" autocomplete="off">
		              <label for="floatingInputValue">BUSINESS OWNER</label>
		            </div>
		    			</div>
		    			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 mt-2">
								<div class="form-floating">
		              <input type="text" class="form-control text-capitalize" id="address" name="address" placeholder="" value="" autocomplete="off">
		              <label for="floatingInputValue">ADDRESS</label>
		            </div>
				    	</div>`;

function showDiv(divId,data)
    {
        console.log(divId);
        let floatingSelect = document.getElementById(data).value;
        let appendDiv = document.getElementById(divId);
        console.log( document.getElementById(data).value);
        console.log(floatingSelect);
        if (floatingSelect == 'SMALL BUSINESS') 
        {
          appendDiv.innerHTML = small;
        }
        else if(floatingSelect == 'MICRO, SMALL & MEDIUM ENTERPRISES')
        {
          appendDiv.innerHTML = msme;
        }
        else
        {
          appendDiv.innerHTML ="";
        }
    }
</script>