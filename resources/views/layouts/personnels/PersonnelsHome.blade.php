@extends('layouts.app')
   
@section('content')


<link rel="stylesheet"  href="Style.css">



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
             <center><em><strong><mark><div class="card-header">Dashboard</div></mark></strong></em></center>
                <div class="card-body">
             <center><strong><mark><em>Welcome Administrator<em></mark></strong></center>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="sidebar-wrapper">
  <div class="side-top">
      <ul class="sidebar-nav">
          <li><a class="active" href="">Home</a>
          </li>
          <li><a href="">Espaces Profs</a>
              <ul>
                      <li><a href="#">Absences</a></li>
                      <li><a href="#">Emplois</a></li>
                      <li><a href="#">Paiements</a></li>
              </ul>
          </li>
          <li><a href="">Espaces Eleves</a>
              <ul>
                      <li><a href="#">Absences</a></li>
                      <li><a href="#">Emplois</a></li>
                      <li><a href="#">Paiements</a></li>
                      
              </ul>
          </li>
          <li><a href="">Affectations</a>
              <ul>
                      <li><a href="#">Profs Matieres</a></li>
                      <li><a href="#">Classes Exams</a></li>
                      <li><a href="#">Evenements</a></li>
                      
              </ul>
          </li>
          <li><a href="">Parametre</a>
              <ul>
                      <li><a href="#">Annee Scolaire</a></li>
                      <li><a href="#">Niveaux</a></li>
                      <li><a href="#">Filieres</a></li>
                      <li><a href="#">Classes</a></li>
                      <li><a href="#">Role</a></li>
              </ul>
          </li>
      </ul>
  </div>
</div>


@endsection
