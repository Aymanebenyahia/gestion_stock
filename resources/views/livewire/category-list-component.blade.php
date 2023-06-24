<div>
    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Product Category list
                </h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">View/Search product Category</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">

                    <p class="card-text">
                   
                    </p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $cat)
                                <tr>
                                    <td>{{$cat->id}}</td>
                                    <td>{{$cat->name}}</td>
                                    <td>
                                        <a href="" class="btn btn-sm font-sm rounded btn-brand" data-bs-toggle="modal" data-bs-target="#exampleModal" wire:click.prevent="getId({{ $cat->id }})" ></i> Edit </a>
                                        <a href="#" wire:click.prevent="deleteCategory({{ $cat->id }})" class="btn btn-sm font-sm btn-light rounded" data-bs-toggle="modal" data-bs-target="#delete"> <i class="material-icons md-delete_forever"></i> Delete </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div> 
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

            <div  wire:ignore.self  class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Category</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form  wire:submit.prevent="UpdateCategory">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Category</label>
                                    <input type="text" placeholder="Type here" class="form-control mb-2" id="product_name" wire:model="name" />
                                    @error('name')
                                     <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" value="Save" />
                                  </div>
                            </form>
                        </div>
                        <div  wire:ignore.self  class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">delete Category</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure to delete this category ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" wire:click.prevent="confirmDeleteCategory">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
    </div>
    
    </div>
    </div>
</div>



