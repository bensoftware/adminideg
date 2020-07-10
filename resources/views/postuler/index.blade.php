
@extends('layout')
@section('page-title')
    IGED
@endsection
@section('content-header')
    Institut du Groupe Educatif Descartes
@endsection
@section('page-content')
<div class="card">
  <div class="card-header">
    <a href="{{route('institut.create')}}" type="button" class="btn btn-dark"e style="color:white">Ajout des inforformations</a>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
      <div class="row">
      </div>
      <div class="row">
        <div class="col-sm-12">
          <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid"
            aria-describedby="example1_info">
            <thead>
              <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                  aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">NOM(s)</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                  aria-label="Browser: activate to sort column ascending">PRENOM(s)</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                  aria-label="Platform(s): activate to sort column ascending">EMAIL</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                  aria-label="Engine version: activate to sort column ascending">FILLIERE</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                    aria-label="CSS grade: activate to sort column ascending">PHONE</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                  aria-label="CSS grade: activate to sort column ascending">NIVEAU</th>
              </tr>
            </thead>
            <tbody>
          @foreach($postulers as $postuler)
              <tr role="row" class="odd">
                <td tabindex="0" class="sorting_1">{{$postuler->nom}}</td>
                <td>{{$postuler->prenom}}</td>
                <td>{{$postuler->email}}</td>
                <td>{{$postuler->phone}}</td>
                <td>{{$postuler->filliere}}</td>
                <td>{{$postuler->niveau}}</td>
                 <td>
                     <form action="{{route('postuler.destroy',$postuler->id)}}" method="POST">
                         @csrf
                         @method('DELETE')
                         <button type="submit" class="btn btn-danger" >Delete</button>
                     </form>
                 </td>
              </tr>
            @endforeach
            </tbody>
            <tfoot>
              <div class="nav nav-tabs main-tabs" id="nav-tab" role="tablist">
        </div>
              <tr>
                <th rowspan="1" colspan="1">NOM(s)</th>
                <th rowspan="1" colspan="1">PRENOM(s)</th>
                <th rowspan="1" colspan="1">EMAIL</th>
                <th rowspan="1" colspan="1">FILLIERE</th>
                <th rowspan="1" colspan="1">PHONE</th>
                <th rowspan="1" colspan="1">NIVEAU</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-7">
          <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
            <ul class="pagination">
              <li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#"
                  aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
              <li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1"
                  tabindex="0" class="page-link">1</a></li>
              <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0"
                  class="page-link">2</a></li>
              <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0"
                  class="page-link">3</a></li>
              <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0"
                  class="page-link">4</a></li>
              <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0"
                  class="page-link">5</a></li>
              <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0"
                  class="page-link">6</a></li>
              <li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1"
                  data-dt-idx="7" tabindex="0" class="page-link">Next</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.card-body -->
</div>
@endsection
