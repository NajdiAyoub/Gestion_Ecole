@extends('layouts.app')
   
@section('content')


<link rel="stylesheet"  href="Style.css">



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
             <center><strong><mark><em>Welcome Administrator<em></mark></strong></center>
                </div>
            </div>
        </div>
    </div>
</div>
<center>
  <ul id="menu-accordeon">
    <li><a href="#">EspacesProfs</a>
       <ul>
          <li><a href="#">GestionAbsencesProfs</a></li>
          <li><a href="#">GestionPaiementsProfs</a></li>
          <li><a href="#">GestionEmploisProfs</a></li>
          <li><a href="#">lien sous menu 1</a></li>
       </ul>
    </li>
     <li><a href="#">EspacesEleves</a>
       <ul>
          <li><a href="#">Lien sous menu 2</a></li>
          <li><a href="#">Lien sous menu 2</a></li>
          <li><a href="#">Lien sous menu 2</a></li>
          <li><a href="#">Lien sous menu 2</a></li>
       </ul>
    </li>
    <li><a href="#">EspacesAffectations</a>
       <ul>
          <li><a href="#">Lien sous menu 3</a></li>
          <li><a href="#">Lien sous menu 3</a></li>
          <li><a href="#">Lien sous menu 3</a></li>
          <li><a href="#">Lien sous menu 3</a></li>
       </ul>
    </li>
 </ul>
</center>

@endsection
