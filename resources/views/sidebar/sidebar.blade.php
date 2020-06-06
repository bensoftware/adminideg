<!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="index3.html" class="brand-link">
     <img src="{{URL::asset('public/dist/img/logo.jpg')}}" alt="Admin IGED Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
     <span class="brand-text font-weight-light">Admin IGED</span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar user panel (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       <div class="image">
         <img src="{{URL::asset('public/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
       </div>
       <div class="info">
         <a href="{{url('/')}}" class="d-block">Ben Judicaelle</a>
       </div>
     </div>

     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
         <li class="nav-item has-treeview menu-open">
           <a href="{{url('/')}}" class="nav-link active">
             <i class="nav-icon fas fa-tachometer-alt"></i>
             <p>
               Tableau de bord
               <i class="right fas fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{url('/admin')}}" class="nav-link active">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Tableau de bord</p>
               </a>
             </li>

           </ul>
         </li>

         <li class="nav-item has-treeview">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-table"></i>
             <p>
               Gestion de l'institut
               <i class="fas fa-angle-left right"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{url('/admin/institut')}}" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Institut</p>
               </a>
             </li>
           </ul>
         </li>

         <li class="nav-item has-treeview ">
           <a href="{{url('/admin/domain')}}" class="nav-link ">
             <i class="nav-icon fas fa-tasks"></i>
             <p>
               Domaine/Secteur
               <i class="right fas fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{url('/admin')}}" class="nav-link active">
                 <i class="far fa-circle nav-icon"></i>
                 <p> Domaine/Secteur</p>
               </a>
             </li>

           </ul>
         </li>
         <li class="nav-item has-treeview">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-book"></i>
             <p>
               Gestion des formations
               <i class="fas fa-angle-left right"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Formations</p>
               </a>
             </li>
           </ul>
         </li>
       </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>
