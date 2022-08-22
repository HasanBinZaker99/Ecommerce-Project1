@extends('CRM.layouts_successLeeds.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header py-0">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 mb-0">
              <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
                  <a class="navbar-brand" href="#">Client/Company-{{$leed->clientName}}</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                      <ul class="navbar-nav">
                          <li class="nav-item active ml-lg-5">
                              <a class="nav-link" href="{{route('success-leeds-panel',['id'=>$leed->id])}}">Profile</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="{{route('all-meeting',['id'=>$leed->id])}}">Meetings</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="{{route('add-measurement',['id'=>$leed->id])}}">Measurements</a>
                          </li>
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Quotations
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                  <a class="dropdown-item" href="{{route('all-quotation', ['id'=>$leed->id])}}">Quotes</a>
                                  <a class="dropdown-item" href="{{route('all-cart', ['id'=>$leed->id])}}">House Area Cart</a>
                                  <a class="dropdown-item" href="{{route('all-house-area-type', ['id'=>$leed->id])}}">House Area Type</a>
                                  <a class="dropdown-item" href="{{route('all-decoration-type', ['id'=>$leed->id])}}">Decoration</a>
                                  <a class="dropdown-item" href="{{route('edit-sub-body', ['id'=>$leed->id])}}">Subject & Body</a>
                              </div>
                          </li>
                      </ul>
                  </div>
              </nav>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                    <img src="{{asset($leed->logo)}}" alt="" height="150" width="200"/>
                </div>
                <h3 class="profile-username text-center mt-4">{{$leed->email}}</h3>

                <p class="text-muted text-center">Software Engineer</p>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
          @yield('leedContent')
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
