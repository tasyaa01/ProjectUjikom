<aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="home" class="brand-link">
         <img src="{{ asset('assets/images/logo.png') }}" alt="TROPISANIMAL Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">  TROPISANIMAL  </span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">

                 <li class="nav-item">
                     <a href="{{ route('berita.index') }}" class="nav-link">
                         <i class="nav-icon fas fa-copy"></i>
                         <p>
                             News
                         </p>
                     </a>
                 </li>  
                 <li class="nav-item">
                     <a href="{{ route('about.index') }}" class="nav-link">
                         <i class="nav-icon fas fa-copy"></i>
                         <p>
                             About
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('galeri.index') }}" class="nav-link">
                         <i class="nav-icon fas fa-copy"></i>
                         <p>
                             Gallery
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('kontak.index') }}" class="nav-link">
                         <i class="nav-icon fas fa-copy"></i>
                         <p>
                             Contact
                         </p>
                     </a>
                 </li>

             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>