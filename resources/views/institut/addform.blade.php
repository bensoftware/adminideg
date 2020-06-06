
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
         <form class="form-horizontal" action="{{route('institut.store')}}"  method="POST">
            @csrf
           <div class="card-body">
             <div class="form-group row">
               <label for="libelle" class="col-sm-2 col-form-label">LIBELLE</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control" id="libelle" name="libelle" placeholder="Libelle" required>
               </div>
             </div>
             <div class="form-group row">
               <label for="libelle" class="col-sm-2 col-form-label">RESPONSABLE</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control" id="responsable" name="responsable" placeholder="Libelle" required>
               </div>
             </div>
             <div class="form-group row">
               <label for="phone" class="col-sm-2 col-form-label">PHONE</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required>
               </div>
             </div>
             <div class="form-group row">
               <label for="phone" class="col-sm-2 col-form-label">FIXE</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control" id="fixe" name="fixe" placeholder="Fixe" required>
               </div>
             </div>
             <div class="form-group row">
               <label for="mail" class="col-sm-2 col-form-label" >MAIL</label>
               <div class="col-sm-10">
                 <input type="email" class="form-control" id="mail" name="mail" placeholder="Mail" required>
               </div>
             </div>

             <div class="form-group row">
               <label for="adresse" class="col-sm-2 col-form-label">ADRESSE</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control" id="adresse" name="adresse" placeholder="adresse" required>
               </div>
             </div>

             <div class="form-group row">
               <label for="description" class="col-sm-2 col-form-label">DESCRIPTION</label>
               <div class="col-sm-10">
                 <input type="textarea" class="form-control" id="description" name="description" placeholder="Description" required>
               </div>
             </div>
             <div class="form-group row">
               <label for="banniere" class="col-sm-2 col-form-label">BANNIERE</label>
               <div class="col-sm-10">
                 <input type="file" class="form-control" id="banniere" name="banniere"placeholder="Banniere" required>
               </div>
             </div>
             <div class="form-group row">
               <label for="logo" class="col-sm-2 col-form-label">LOGO</label>
               <div class="col-sm-10">
                 <input type="file" class="form-control" id="logo" name="logo" placeholder="Logo" required>
               </div>
             </div>
           </div>
           <!-- /.card-body -->
           <div class="card-footer">
             <button type="submit" class="btn btn-info">Enregistrer</button>
             <button type="submit" class="btn btn-default float-right">Annuler</button>
           </div>
           <!-- /.card-footer -->
         </form>
       </div>
@endsection
