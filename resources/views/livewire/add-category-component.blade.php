
<div>
    <div class="page-header">
        <div class="page-title">
            <h4>Product Add Category</h4>
            <h6>Create new product Category</h6>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="form-group">
                       
                        <a href="#" data-bs-toggle="modal" data-bs-target="#add" class="btn btn-primary btn-sm rounded">Add Category </a>

                        <div  wire:ignore.self class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Add Category</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form  wire:submit.prevent="insertcategory">
                                        <div class="mb-4">
                                            <label for="product_name" class="form-label">Category</label>
                                            <input type="text" placeholder="Type here" class="form-control mb-2" id="product_name" wire:model="name" />
                                            @error('name')
                                             <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="modal-footer">
                                            <form action="">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <input type="submit" class="btn btn-primary" value="Save" />
                                          </div>
                                          </form>
                                
                                </div>
            </div>
        </div>
    </div>


</div>


