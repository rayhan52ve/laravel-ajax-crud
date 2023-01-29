<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel-Ajax-Crud</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <h2 class="my-5 text-center">Laravel Ajax Crud</h2>
                <a type="button" class="btn btn-success my-3"  data-bs-toggle="modal" data-bs-target="#addModal">Add Product</a>
                <div class="table-data">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($products as $key=>$product)
                          <tr>
                            <th>{{$key+1}}</th>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>
                                <a href="" class="btn btn-success update_product_form" 
                                data-bs-toggle="modal"
                                 data-bs-target="#updateModal"
                                 data-id="{{ $product->id }}"
                                 data-name="{{ $product->name }}"
                                 data-price="{{ $product->price }}"
                                 >
                                <i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="" class="btn btn-danger delete_product" data-id="{{ $product->id }}">
                                  <i class="fa-solid fa-trash"></i></a>
                            </td>
                          </tr>  
                          @endforeach
                        </tbody>
                      </table>
                      {!! $products->links() !!}
                </div>
            </div>
        </div>
    </div>
    
    @include('script');
    @include('add_product_modal');
    @include('update_product_modal');
  </body>
</html>
