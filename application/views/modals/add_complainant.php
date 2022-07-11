
<!-- Modal -->
<div class="modal fade" id="add_complainant" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">ADD COMPLAINANT</h5>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <form class="row row-cols-lg-auto g-3 align-items-center">
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                <div class="form-floating">
                  <input type="text" class="form-control text-uppercase" id="complainant_lname" name="complainant_lname" placeholder="" value="" autocomplete="off">
                  <label for="floatingInputValue">LAST NAME</label>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                <div class="form-floating">
                  <input type="text" class="form-control text-uppercase" id="complainant_fname" name="complainant_fname" placeholder="" value="" autocomplete="off">
                  <label for="floatingInputValue">FIRST NAME</label>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                <div class="form-floating">
                  <input type="text" class="form-control text-uppercase" id="complainant_mname" name="complainant_mname" placeholder="" value="" autocomplete="off">
                  <label for="floatingInputValue">MIDDLE NAME</label>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                <div class="form-floating">
                  <input type="number" class="form-control text-uppercase" id="complainant_contact" name="complainant_contact" placeholder="" value="" autocomplete="off">
                  <label for="floatingInputValue">CONTACT NUMBER</label>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                <div class="form-floating">
                  <input type="text" class="form-control text-uppercase" id="complainant_nationality" name="complainant_nationality" placeholder="" value="" autocomplete="off">
                  <label for="floatingInputValue">NATIONALITY</label>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2">
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Leave a comment here" name="complainant_address" id="complainant_address" style="height: 100px"></textarea>
                  <label for="floatingTextarea2">COMPLETE ADDRESS</label>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal"><i class="fas fa-times"></i> Close</button>
        <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-times"></i> Add</button>
      </div>
    </div>
  </div>
</div>