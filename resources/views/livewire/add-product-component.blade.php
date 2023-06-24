<div>
    <div class="page-header">
        <div class="page-title">
            <h4>Product Add Category</h4>
            <h6>Create new product Category</h6>
        </div>
    </div>

    <div class="d-flex justify-content-sm-between"></div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">

            

                    <div class="card-body">
                        <form wire:submit.prevent="submit"  enctype="multipart/form-data">
                            <div class="mb-4">
                                <label for="product_name" class="form-label">Product title</label>
                                <input type="text" placeholder="Type here" class="form-control mb-2" id="product_name" wire:model="name" />
                                @error('name')
                                 <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Full description</label>
                                <textarea placeholder="Type here" class="form-control mb-2" rows="4" wire:model="Description"></textarea>
                                @error('Description')
                                 <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="row">

                    <div class="row  mb-3">
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Product Name" aria-label=" name">
                        </div>
                        
                        <div class="col sm-7">
                            <input type="text" class="form-control" placeholder="category" aria-label="reference">
                          </div>

                        

                          
                            
                            <div class="col mb-3" >
                                <input type="text" class="form-control" placeholder="Qte" aria-label="reference">
                              </div>
{{-- <div>
                              <button type="button" class="btn btn-rounded btn-primary">Add product</button>    
                              
</div> --}}

                              




    
    <div class="col sm-7">
        <input type="text" class="form-control" placeholder="price" aria-label="reference">
      </div>




                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label> Product Image</label>
                                    <div class="image-upload">
                                        <input type="file">
                                        <div class="image-uploads">
                                            <img src="assets/img/icons/upload.svg" alt="img">
                                            <h4>Drag and drop a file to upload</h4>
                                        </div>
                                    </div>



                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>




                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <a href="javascript:void(0);" class="btn btn-submit me-2">Submit</a>
                            <a href="categorylist.html" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    

</div>
