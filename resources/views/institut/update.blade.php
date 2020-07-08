
@extends('layout')
@section('page-title')
    IGED
@endsection
@section('content-header')
    Institut du Groupe Educatif Descartes
@endsection
@section('page-content')
<!-- Horizontal Form -->
       <div class="card card-info">
         <div class="card-header">
           <h3 class="card-title">FORMULAIRE</h3>
         </div>
         <!-- /.card-header -->
         @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
         <!-- form start -->
         <form class="form-horizontal" action="{{route('institut.update',$institut)}}"  method="POST">
           @csrf

 @method('PUT')

           <div class="card-body">
             <div class="form-group row">
               <label for="libelle" class="col-sm-2 col-form-label">LIBELLE</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control" id="libelle" name="libelle" value="{{$institut->libelle}}" placeholder="" required>
               </div>
             </div>
             <div class="form-group row">
               <label for="libelle" class="col-sm-2 col-form-label">RESPONSABLE</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control" id="responsable" value="{{$institut->responsable}}" name="responsable" placeholder="Responsable" required>
               </div>
             </div>
             <div class="form-group row">
               <label for="phone" class="col-sm-2 col-form-label">PHONE</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control" id="phone"  value="{{$institut->phone}}" name="phone" placeholder="Phone" required>
               </div>
             </div>
             <div class="form-group row">
               <label for="phone" class="col-sm-2 col-form-label">FIXE</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control" id="fixe" name="fixe"  value="{{$institut->fixe}}" placeholder="Fixe" required>
               </div>
             </div>
             <div class="form-group row">
               <label for="mail" class="col-sm-2 col-form-label" >MAIL</label>
               <div class="col-sm-10">
                 <input type="email" class="form-control" id="mail" name="mail"  value="{{$institut->mail}}"  placeholder="Mail" required>
               </div>
             </div>
             <div class="form-group row">
               <label for="adresse" class="col-sm-2 col-form-label">ADRESSE</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control" id="adresse" name="adresse"  value="{{$institut->adresse}}" placeholder="adresse" required>
               </div>
             </div>
             <div class="form-group row">
               <label for="description" class="col-sm-2 col-form-label">DESCRIPTION</label>
               <div class="col-sm-10">
                 <input type="textarea" class="form-control" id="description"  name="description"  value="{{$institut->description}}" placeholder="Description" required>
               </div>
             </div>
             <div class="form-group row">
               <label for="description" class="col-sm-2 col-form-label">LINKEDDIN</label>
               <div class="col-sm-10">
                 <input type="textarea" class="form-control" id="LINKEDDIN"  name="LINKEDDIN" placeholder="LINKDIN" required>
               </div>
             </div>
             <div class="form-group row">
               <label for="description" class="col-sm-2 col-form-label">FACEBOOK</label>
               <div class="col-sm-10">
                 <input type="textarea" class="form-control" id="facebook"  value="{{$institut->facebook}}"  name="facebook" placeholder="FACEBOOK" required>
               </div>
             </div>

           </div>
           <!-- /.card-body -->
           <div class="card-footer">
             <button type="submit" class="btn btn-info">Modifier</button>
             <button type="submit" class="btn btn-default float-right">Annuler</button>
           </div>
           <!-- /.card-footer -->
         </form>
       </div>
@endsection
