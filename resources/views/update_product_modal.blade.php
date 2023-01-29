
  <!-- Modal -->
  <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <form action="" method="post" id="updateProductForm">
        @csrf
        <input type="hidden" id="up_id">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Product</h5>
                <button  class="close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <div class="errMsgContainer"></div>

                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" class="form-control" name="up_name" id="up_name" placeholder="Product Name">
                </div>    
                <div class="form-group">    
                    <label for="name">Product Price</label>
                    <input type="text" class="form-control" name="up_price" id="up_price" placeholder="Product Price">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary update_product">Update</button>
              </div>
            </div>
          </div>
    </form>
  </div>