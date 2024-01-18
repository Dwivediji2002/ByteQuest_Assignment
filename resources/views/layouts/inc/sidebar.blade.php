<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <div class="logo"><a href="#" class="simple-text logo-normal">
          E-commerce
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active">
              <a class="nav-link" href="{{ url ('dashboard') }}">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
              </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="{{ url ('products') }}">
              <i class="material-icons">person</i>
              <p>Product</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url ('add-product') }}">
              <i class="material-icons">person</i>
              <p>Add Product</p>
            </a>
          </li>
        </ul>
      </div>
    </div>