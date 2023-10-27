<div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar" style="background-color:#fff;border-radius:10px">
   
<div class="row ms-md-auto pe-md-3 d-flex align-items-center">
      <div class="col-7 input-group">
      <!--  <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>-->
      <!--  <input type="text" class="form-control" placeholder="Type here...">-->
      <img src="{{ asset('assets/images/logo.png') }}" alt="a" width="200px" class="img-fluid" style="mix-blend-mode: multiply;padding:10px">
      </div>
    </div>
    <ul class="col-5 navbar-nav  justify-content-end">
      <li class="nav-item d-flex align-items-center">
        <a href="javascript:;" class="nav-link text-dark font-weight-bold px-0 p-0">
          <div class="dropdown">
            <a class="pe-2 text-dark" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-user me-sm-1"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="userDropdown" style="margin-top:0px!important;">
              <a class="dropdown-item" href="{{Route('logout')}}">Logout</a>
            </div>
          </div>
          @if(Auth::check())
          <span class="d-sm-inline d-none text-dark">
            {{ Auth::user()->name }}</span>
         @endif
        </a>
      </li>
      <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
        <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
          <div class="sidenav-toggler-inner">
            <i class="sidenav-toggler-line bg-white"></i>
            <i class="sidenav-toggler-line bg-white"></i>
            <i class="sidenav-toggler-line bg-white"></i>
          </div>
        </a>
      </li>
      <li class="nav-item px-3 d-flex align-items-center">
        <a href="javascript:;" class="nav-link text-dark p-0">
          <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
        </a>
      </li>
      
    </ul>
  </div>
 