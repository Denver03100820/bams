<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h5 class="card-title"><?php echo $title_page; ?></h5>
						<nav class="float-sm-start float-md-end float-lg-end float-xl-end mt-1" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
						  <ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="<?php echo base_url('property') ?>">List of Real Estates and Properties</a></li>
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
						<h6 class="fst-italic">REAL ESTATE/PROPERTY INFORMATION</h6>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<div class="row">
					    	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2 " onchange="showDiv('append_data','floatingSelectV')">
								<div class="form-floating">
									<select name="type_of_property" class="form-select" id="floatingSelectV" aria-label="Floating label select example">
										<option value="" selected="selected">CHOOSE...</option>
										<option value="HOUSE">HOUSE</option>
										<option value="APARTMENT">APARTMENT</option>
										<option value="CONDOMINIUM/BUILDING">CONDOMINIUM/BUILDING</option>
										<option value="VACANT LOTS/ OPEN SPACES">VACANT LOTS/ OPEN SPACES</option>
									</select>
									<label for="floatingSelect">TYPE OF PROPERTY</label>
								</div>
							</div>
							<div class="row" id="append_data"></div>
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
<script>
let house = `<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
						<a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#search_citizen"><i class="fas fa-search"></i> Search Resident</a>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
						<div class="form-floating">
			              <input type="text" class="form-control text-capitalize" id="owners_name" name="owners_name" placeholder="" value="" autocomplete="off">
			              <label for="floatingInputValue">OWNER/S NAME</label>
			            </div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
						<div class="form-floating">
			              <input type="text" class="form-control text-capitalize" id="owners_address" name="owners_address" placeholder="" value="" autocomplete="off">
			              <label for="floatingInputValue">ADDRESS</label>
			            </div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
						<div class="form-floating">
			              <input type="text" class="form-control text-capitalize" id="proof_of_ownership" name="proof_of_ownership" placeholder="" value="" autocomplete="off">
			              <label for="floatingInputValue">TCT NO. / PROOF-OF-OWNERSHIP</label>
			            </div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
						<div class="form-floating">
							<select name="type" class="form-select" id="type" aria-label="Floating label select example">
								<option value="" selected="selected">CHOOSE...</option>
								<option value="RESIDENTIAL">RESIDENTIAL</option>
								<option value="COMMERCIAL">COMMERCIAL</option>
								<option value="MIX-USED">MIX-USED</option>
							</select>
							<label for="floatingSelect">TYPE</label>
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
						<div class="form-floating">
			              <input type="number" class="form-control text-capitalize" id="no_floors" name="no_floors" placeholder="" value="" autocomplete="off">
			              <label for="floatingInputValue">NO. OF FLOORS/STOREY</label>
			            </div>
					</div>
				</div>
			</div>`;

let apartment = `<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
							<a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#search_citizen"><i class="fas fa-search"></i> Search Resident</a>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
							<div class="form-floating">
				              <input type="text" class="form-control text-capitalize" id="owners_name" name="owners_name" placeholder="" value="" autocomplete="off">
				              <label for="floatingInputValue">OWNER/S NAME / DEVELOPER</label>
				            </div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
							<div class="form-floating">
				              <input type="text" class="form-control text-capitalize" id="owners_address" name="owners_address" placeholder="" value="" autocomplete="off">
				              <label for="floatingInputValue">ADDRESS</label>
				            </div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
							<div class="form-floating">
				              <input type="text" class="form-control text-capitalize" id="proof_of_ownership" name="proof_of_ownership" placeholder="" value="" autocomplete="off">
				              <label for="floatingInputValue">TCT NO. / PROOF-OF-OWNERSHIP</label>
				            </div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
							<div class="form-floating">
								<select name="type" class="form-select" id="type" aria-label="Floating label select example">
									<option value="" selected="selected">CHOOSE...</option>
									<option value="RESIDENTIAL">RESIDENTIAL</option>
									<option value="COMMERCIAL">COMMERCIAL</option>
									<option value="MIX-USED">MIX-USED</option>
								</select>
								<label for="floatingSelect">TYPE</label>
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
							<div class="form-floating">
				              <input type="number" class="form-control text-capitalize" id="no_floors" name="no_floors" placeholder="" value="" autocomplete="off">
				              <label for="floatingInputValue">NO. OF FLOORS/STOREY</label>
				            </div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
							<div class="form-floating">
				              <input type="number" class="form-control text-capitalize" id="number_of_units" name="number_of_units" placeholder="" value="" autocomplete="off">
				              <label for="floatingInputValue">NO. OF UNITS</label>
				            </div>
						</div>
					</div>
				</div>`;

let building = `<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
							<a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#search_citizen"><i class="fas fa-search"></i> Search Resident</a>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
							<div class="form-floating">
				              <input type="text" class="form-control text-capitalize" id="owners_name" name="owners_name" placeholder="" value="" autocomplete="off">
				              <label for="floatingInputValue">OWNER/S NAME / DEVELOPER</label>
				            </div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
							<div class="form-floating">
				              <input type="text" class="form-control text-capitalize" id="owners_address" name="owners_address" placeholder="" value="" autocomplete="off">
				              <label for="floatingInputValue">ADDRESS</label>
				            </div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
							<div class="form-floating">
								<select name="type" class="form-select" id="type" aria-label="Floating label select example">
									<option value="" selected="selected">CHOOSE...</option>
									<option value="RESIDENTIAL">RESIDENTIAL</option>
									<option value="COMMERCIAL">COMMERCIAL</option>
									<option value="MIX-USED">MIX-USED</option>
								</select>
								<label for="floatingSelect">TYPE</label>
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
							<div class="form-floating">
				              <input type="number" class="form-control text-capitalize" id="no_floors" name="no_floors" placeholder="" value="" autocomplete="off">
				              <label for="floatingInputValue">NO. OF FLOORS/STOREY</label>
				            </div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-2">
							<div class="form-floating">
				              <input type="number" class="form-control text-capitalize" id="number_of_units" name="number_of_units" placeholder="" value="" autocomplete="off">
				              <label for="floatingInputValue">NO. OF UNITS</label>
				            </div>
						</div>
					</div>
				</div>`;

let vacant = `<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
							<a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#search_citizen"><i class="fas fa-search"></i> Search Resident</a>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
							<div class="form-floating">
				              <input type="text" class="form-control text-capitalize" id="owners_name" name="owners_name" placeholder="" value="" autocomplete="off">
				              <label for="floatingInputValue">OWNER/S NAME / DEVELOPER</label>
				            </div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
							<div class="form-floating">
				              <input type="text" class="form-control text-capitalize" id="owners_address" name="owners_address" placeholder="" value="" autocomplete="off">
				              <label for="floatingInputValue">ADDRESS</label>
				            </div>
						</div>
					</div>
				</div>`;
function showDiv(divId,data)
    {
        console.log(divId);
        let floatingSelect = document.getElementById(data).value;
        let appendDiv = document.getElementById(divId);
        console.log( document.getElementById(data).value);
        console.log(floatingSelect);
        if (floatingSelect == 'HOUSE') 
        {
          appendDiv.innerHTML = house;
        }
        else if(floatingSelect == 'APARTMENT')
        {
          appendDiv.innerHTML = apartment;
        }
        else if(floatingSelect == 'CONDOMINIUM/BUILDING')
        {
          appendDiv.innerHTML = building;
        }
        else if(floatingSelect == 'VACANT LOTS/ OPEN SPACES')
        {
          appendDiv.innerHTML = vacant;
        }
        else
        {
          appendDiv.innerHTML ="";
        }
    }
</script>