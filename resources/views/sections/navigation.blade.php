<!-- Navigation -->



<nav class="nav navbar navbar-expand-lg navbar-light bg-light pt-3 pb-3" style="border-bottom: 2px solid grey">
  
  <span class="pl-5">
   <span class="pr-2"><img src="/svg/logo.svg" style="height: 40px"></span>
   <a class="navbar-brand pl-2" href="/" style="border-left:1px solid">VECMOCON</a>
 </span>

 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <ul class="navbar-nav pl-5 ml-auto">
   <li class="nav-item active pl-4 pr-5">
    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item dropdown pl-4 pr-5">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Ecosystem
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background:#e6e6e6">
      <a class="dropdown-item" href="{{ route('motorcontroller')}}">MOTOR CONTROLLER</a>
      <a class="dropdown-item" href="{{ route('bms')}}">BATTERY & BMS</a>
      <a class="dropdown-item" href="{{ route('ivec')}}">I-VEC</a>
      <a class="dropdown-item" href="{{ route('services')}}">SERVICES</a>

    </div>
  </li>
  <li class="nav-item active pl-4 pr-5">
    <a class="nav-link" href="{{ route('associates')}}">Associates</a>      
  </li>
  <li class="nav-item active pl-4 pr-5">
    <a class="dropdown-item" href="{{ route('team')}}">Team</a>
  </li>
  
  <li class="nav-item pl-4 pr-4">

    <a class="nav-link" href="contact_us">Contact Us</a>
  </li>


</ul>
</div>

</nav>


<!-- 
// html & body

html, body {
  height: 100%;
  width: 100%;
  line-height: 1.6;
}

html {
  font-size: 0.96rem;
}

::selection {
  background-color: $regblack;
  color: $regwhite;
}

h1, h2, h3, h4, h5, h6 {
  margin: 0 0 24px 0;
}

p {
  padding: 1em 0;
}

a {
  color: inherit;
  font-weight: inherit;
  font-size: inherit;
  transition: all 0.65s cubic-bezier(0.075, 0.82, 0.165, 1);
  text-decoration: none;
  cursor: pointer;
}

a:hover, a:visited, a:link, a:active, a:focus {
  text-decoration: none;
  transition: all 0.65s cubic-bezier(0.075, 0.82, 0.165, 1);
}

img {
  vertical-align: middle;
}

hr {
  display: block;
  height: 1px;
  border: 0;
  border-top: 1px solid;
  margin: 1em 0;
  padding: 0;
}

@media print {
  
} -->