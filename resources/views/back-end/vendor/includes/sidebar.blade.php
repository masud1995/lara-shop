<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
       <li class="nav-item">
         <a href="{{ route('admin') }}" class="nav-link">
           <i class="nav-icon fas fa-tachometer-alt"></i>
           <p>
             Dashboard
           </p>
         </a>
       </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Products
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ url('vendor/product/add') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Add New</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('vendor/products/view') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>View Products</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
           Seller
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
          <a href="{{route('vendor.seller.add')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Add New</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('vendor.seller.view')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>View Seller</p>
            </a>
          </li>
        </ul>
      </li>
     
      
      
      
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
          <i class="nav-icon far fa-circle text-info"></i>
          <p>Logout</p>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      </li>
    </ul>
  </nav>
  