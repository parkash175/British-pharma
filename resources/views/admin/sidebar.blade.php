

<div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

<!--

    Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
    Tip 2: you can also add an image using data-image tag

-->

  <div class="sidebar-wrapper">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text">
                Creative Tim
            </a>
        </div>

        <ul class="nav">
            <li class="active">
                <a href="{{ url('/admin/index')}}">
                    <i class="pe-7s-graph"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="user.html">
                    <i class="pe-7s-user"></i>
                    <p>User Profile</p>
                </a>
            </li>

            <li>
                <a href="{{ url('admin/codepage')}}">
                    <i class="pe-7s-user"></i>
                    <p>Generate codes</p>
                </a>
            </li>

            <li>
                <a href="{{ url('admin/product')}}">
                    <i class="pe-7s-user"></i>
                    <p>Add product</p>
                </a>
            </li>

            <li>
                <a href="{{ url('admin/view')}}">
                    <i class="pe-7s-user"></i>
                    <p>View products</p>
                </a>
            </li>




    <li>
      <a  href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                                  <i class="fa fa-sign-out" aria-hidden="true"></i>
                     {{ __('Logout') }}

                 </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                 </form>
            </li>

        </ul>
  </div>
</div>
