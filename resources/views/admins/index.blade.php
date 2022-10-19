@extends('admins.layout')
@extends('admins.partials._body')
@extends('admins.partials._navbar')
@extends('admins.partials._settings-panel')
@extends('admins.partials._sidebar')
@extends('admins.partials._footer')

@section('dashboard-link-active') active @endsection

@section('page-title') Overview @endsection

@section('welcome-message')
<ul class="navbar-nav">
  <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
    <h1 class="welcome-text">Bonjour, <span class="text-black fw-bold text-capitalize">{{auth()->user()->name}}</span></h1>
    <h3 class="welcome-sub-text">Les differents chiffres de la gestion de Miam-Sertem </h3>
  </li>
</ul>
@endsection

@section('main')
<div class="col-sm-12">
    <div class="home-tab">
      <div class="d-sm-flex align-items-center justify-content-between border-bottom">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active ps-0 border-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
          </li>
        </ul>
      </div>
      <div class="tab-content tab-content-basic">
        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
          <div class="row">
            <div class="col-sm-12">
              <div class="statistics-details d-flex align-items-center justify-content-between">
                <div>
                  <p class="statistics-title">Nombre d'employes</p>
                  <h3 class="rate-percentage">345</h3>
                </div>
                <div>
                  <p class="statistics-title">Somme due au Traiteur</p>
                  <h3 class="rate-percentage">340000</h3>
                </div>
                <div>
                  <p class="statistics-title">Nonbres de commandes Mensuels</p>
                  <h3 class="rate-percentage">500</h3>
                </div>
                <div class="d-none d-md-block">
                  <p class="statistics-title">Subventions Mensuels</p>
                  <h3 class="rate-percentage">345000</h3>
                </div>
                                </div>
                            </div>
                        </div>
          </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection