@extends('admin.layouts.master')
@section('content')
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Simple Tables</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">Simple Tables</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12 mb-4">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Simple Tables</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Order</th>
                        <th>Name</th>
                        <th>Photo</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Delete</th>
                        <th>Edit</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($offers as $key=>$offer)
                            
                      
                      <tr>
                        <td><a href="#">{{$key+1}}</a></td>
                        <td>{{$offer->item_name}}</td>
                        <td><img src="{{Storage::url($offer->photo)}}" width="80" height="80"></td>
                       
                        <td>{{$offer->item_details}}</td>
                        <td>{{$offer->price}}</td>
                        <td>{{$offer->discount}}</td>
                        <td>
                        <form action="{{route('offer.destroy',[$offer->id])}}" method="POST"
                            onsubmit="return confirmDelete()">
                            @csrf
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger">Delete</button>

                            </form>
                        </td>
                    <td><a href="{{route('offer.edit',[$offer->id])}}" class="btn btn-primary">Edit</a></td>
                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>
          <!--Row-->
        </div>
@endsection