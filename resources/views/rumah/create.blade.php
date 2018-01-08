@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-10 col-md-offset-1">
          <center><h1>Data Rumah</h1></center>
           <div class="panel ">
                <div class="panel-heading bg-yellow">Data Rumah
                <div class="panel-title pull-right">
                <a href="{{ URL::previous() }}">Kembali</a></div></div>

                 <div class="panel-body">
      <form action="{{route('rumah.store')}}" method="post" enctype="multipart/form-data">
                  {{csrf_field()}}

                  <div class="form-group">
                  <label class="control_label">Keterangan</label>
                  <input type="text" name="a" class="form-control" required="">
                  </div>

                  <div class="form-group">
                  <label class="control_label">Agen</label>
                  <input type="text" name="b" class="form-control" required="">
                  </div>

        

                  <div class="form-group">
                    <label >Foto Rumah</label>
                    <input type="file"  name="foto" class="form-control">
                </div>
                

                  <div>
                      <button type="submit" class="btn btn-success">
                          Simpan
                      </button>
                       <button type="reset" class="btn btn-danger">
                          Reset
                      </button>
                  </div>
                                    
              </form>
                  
                </div>

             
                </div>
                </div>
            </div>
        </div>
    
@endsection
