
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
                  aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">LIBELLE</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                  aria-label="Browser: activate to sort column ascending">PHONE</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                  aria-label="Platform(s): activate to sort column ascending">FIXE</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                  aria-label="Engine version: activate to sort column ascending">MAIL</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                    aria-label="CSS grade: activate to sort column ascending">FACAEBOOK</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                  aria-label="CSS grade: activate to sort column ascending">RESPONSABLE</th>
              </tr>
            </thead>
            <tbody>
          @foreach($institut as $institute)
              <tr role="row" class="odd">
                <td tabindex="0" class="sorting_1">{{$institute->libelle}}</td>
                <td>{{$institute->phone}}</td>
                <td>{{$institute->fixe}}</td>
                <td>{{$institute->mail}}</td>
                <td>{{$institute->facebook}}</td>
                <td>{{$institute->responsable}}</td>
                 <td>
                  <a href="{{route('institut.edit',$institute->id)}}" type="button" class="btn btn-dark"e style="color:white">Modifier</a>
                 </td>
                 <td>
                     <form action="" method="POST">
                         @csrf
                         @method('DELETE')
                         <button type="submit" class="btn btn-danger" disabled>Delete</button>
                     </form>
                 </td>
              </tr>
            @endforeach
            </tbody>
            <tfoot>
              <div class="nav nav-tabs main-tabs" id="nav-tab" role="tablist">
        </div>
              <tr>
                <th rowspan="1" colspan="1">LIBELLE</th>
                <th rowspan="1" colspan="1">PHONE</th>
                <th rowspan="1" colspan="1">FIXE</th>
                <th rowspan="1" colspan="1">MAIL</th>
                <th rowspan="1" colspan="1">FACEBOOK</th>
                <th rowspan="1" colspan="1">RESPONSABLE</th>
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
