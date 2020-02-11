@extends('layouts.app')
   
@section('content')


<link rel="stylesheet"  href="Style.css">



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
             <mark><center><strong><em>Welcome Admin.<em></strong></center></mark>
                </div>
            </div>
        </div>
    </div>
</div>
<center>
<button class="accordion">Espaces Profs</button>
<div class="panel">
  <p>Lorem ipsum...</p>
</div>

<button class="accordion">Espaces Eleves</button>
<div class="panel">
  <p>Lorem ipsum...</p>
</div>

<button class="accordion">Affectations</button>
<div class="panel">
  <p>Lorem ipsum...</p>
</div>
</center>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
<style>
    .panel {
      padding: 0 18px;
      background-color: white;
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.2s ease-out;
    }
    </style>
    
    <script>
    var acc = document.getElementsByClassName("accordion");
    var i;
    
    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
          panel.style.maxHeight = null;
        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
        }
      });
    }
    </script>
@endsection
