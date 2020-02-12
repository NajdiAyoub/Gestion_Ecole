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
<center>
  <ul id="menu-accordeon">
    <li><a href="#">EspacesProfs</a></br>
       <ul>
          <li><a href="#">GestionAbsencesProfs</a></li>
          <li><a href="#">GestionPaiementsProfs</a></li>
          <li><a href="#">GestionEmploisProfs</a></li>
       </ul>
    </li>
     <li><a href="#">EspacesEleves</a></br>
       <ul>
          <li><a href="#">GestionAbsencesEleves</a></li>
          <li><a href="#">GestionEmploisEleves</a></li>
          <li><a href="#">GestionPaiementsEleves</a></li>
       </ul>
    </li>
    <li><a href="#">EspacesAffectations</a></br>
       <ul>
          <li><a href="#">AffectationsProfsMatieres</a></li>
          <li><a href="#">AffectationsClassesExams</a></li>
          <li><a href="#">AffectationsEmplois</a></li>
          <li><a href="#">GestionsEvenements</a></li>
       </ul>
    </li>
 </ul>
</center>

@endsection
