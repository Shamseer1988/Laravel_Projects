<div class="border-end border-start border-white h-100">
    <div class="text-center m-2">
        <img src="{{asset('images/shamseer.jpg')}}" class="img-fluid rounded-circle mt-5" alt="">
        <h3 class="text-white mt-2 st-font">Shamseer M</h3>
    </div>
<nav class="nav flex-column text-center mt-4">
    <a href="{{Route('home')}}"  class="nav-link {{Request:: routeIs('home') ? 'active' :''}}">Home</a>
    <a href="{{Route('about')}}" class="nav-link {{Request:: routeIs('about') ? 'active' :''}}">My Skill</a>
    <a href="{{Route('services')}}" class="nav-link {{Request:: routeIs('services') ? 'active' :''}}">Services</a>
    <a href="{{Route('contact')}}" class="nav-link {{Request:: routeIs('contact') ? 'active' :''}}">Contact</a>

</nav>



        <div class="text-center p-3 text-danger cus_border  position-fixed" style="background-color: hsl(45, 100%, 51%);">
                    FaizzyWorld
        </div>


</div>