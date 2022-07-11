
<!-- Modal -->
<div class="modal fade" id="add_id_information" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">ADD IDENTIFICATION INFORMATION</h5>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <form class="row row-cols-lg-auto g-3 align-items-center">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <label class="" for="inlineFormSelectPref">ID CARD TYPE:</label>
                  <select class="form-select" id="inlineFormSelectPref">
                    <option selected>Choose...</option>
                    <option value="2">VOTER'S ID</option>
                    <option value="1">YELLOW CARD</option>
                    <option value="2">MAKATIZEN CARD</option>
                    <option value="2">NATIONAL ID</option>
                  </select>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <label class="" for="inlineFormInputGroupUsername">ID NUMBER</label>
                    <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal"><i class="fas fa-times"></i> Close</button>
        <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add</button>
      </div>
    </div>
  </div>
</div>