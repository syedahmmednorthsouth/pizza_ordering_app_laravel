@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4">
          <div class="card">
              <div class="card-header">Menu</div>

              <div class="card-body">
                <ul class="list-group">
                  <a href="" class="list-group-item list-group-item-action">View</a>
                  <a href="" class="list-group-item list-group-item-action">Create</a>

                </ul>

          </div>
        </div>
      </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">pizza</div>

                <div class="card-body ">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->

                    <div class="form-group">
                      <label >Name of Pizza</label>
                      <input type="text" class="form-group" name="name">
                    </div>

                    <div class="form-group">
                      <label >Description of Pizza</label>
                     <textarea class="form-group" name="description" ></textarea>
                   </div>

                    <div class="form-inline">
                      <label > Pizza Pirce($)</label>
                      <input type="number" class="form-control" placeholder="small pizza prices">
                      <input type="number" class="form-control" placeholder="medium pizza prices">
                      <input type="number" class="form-control" placeholder="large pizza prices">
                    </div>


                    <div class="form-group">
                      <label  class="form-group">Catagory</label>
                      <select class="form-control" name="">
                         <option value=""></option>
                         <option value="Vegtarian">Vegtarian Pizza</option>
                         <option value="nonvegetarian">Non nonvegetarian Pizza</option>
                         <option value="traditional"> traditional Pizza</option>
                      </select>
                     </div>
                     <div class="form-group">
                       <label>Image</label>
                       <input type="file" class="form-group" >
                     </div>
                     <div class="form-group text-center">
                       <button type="sumbit" class="btn btn-primary">Submit</button>
                     </div>








                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
