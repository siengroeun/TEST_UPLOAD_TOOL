<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- Navigation -->
<style>
  body {
    margin: 0;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #f7f7f7;
  }
  .navbar1 {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 5px;
  }

  /*
  headeer top
  */
  .topbar1{
    background-color: #212529;
    padding: 0;
  }

  .topbar1 .container .row {
    margin:-7px;
    padding:0;
  }

  .topbar1 .container .row .col-md-12 {
    padding:0;
  }

  .topbar1 p{
    margin:0;
    display:inline-block;
    font-size: 13px;
    color: #f1f6ff;
  }

  .topbar1 p > i{
    margin-right:5px;
  }
  .topbar1 p:last-child{
    text-align:right;
  }

  header .navbar {
    margin-bottom: 0;
  }

  .topbar1 li.topbar {
    display: inline;
    padding-right: 18px;
    line-height: 52px;
    transition: all .3s linear;
  }

  .topbar1 li.topbar:hover {
    color: #1bbde8;
  }

  .topbar1 ul.info i {
    color: #131313;
    font-style: normal;
    margin-right: 8px;
    display: inline-block;
    position: relative;
    top: 4px;
  }

  .topbar1 ul.info li {
    float: right;
    padding-left: 30px;
    color: #ffffff;
    font-size: 13px;
    line-height: 44px;
  }

  .topbar1 ul.info i span {
    color: #aaa;
    font-size: 13px;
    font-weight: 400;
    line-height: 50px;
    padding-left: 18px;
  }




  .mx-background-top-linear {
    background: -webkit-linear-gradient(45deg, #638b9e 48%, #1b1e21 48%);
    background: -webkit-linear-gradient(left, #638b9e 48%, #1b1e21 48%);
    background: linear-gradient(45deg, #638b9e 48%, #1b1e21 48%);
  }

</style>
<div class="fixed-top">

  <nav class="navbar1 navbar-expand-lg navbar-dark mx-background-top-linear">
    <div class="container1">

      <div class="collapse navbar-collapse" id="navbarResponsive">

        <ul class="navbar-nav ml-auto">

          <li class="nav-item active">
            <a class="nav-link" href="#" style="font-family: Battambang">ឈ្មោះអ្នកប្រើប្រាស់ : <span style="text-transform: uppercase">{{ $user-> name }}</span> & អាសយដ្ឋាន :
              <span style="text-transform: uppercase">{{ $user->email }}</span>

            </a>
          </li>


        </ul>
      </div>
    </div>
    <div class="container">


      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">

        <ul class="navbar-nav ml-auto">

          <li class="nav-item active">
            <a class="nav-link" href="{{  route('home') }}">Power Editor
              <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Scan Page</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Share Group</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Scan Group</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Auto Add</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#" id="btn_modal_token">Set AccessToken</a>
          </li>

          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
              @csrf

              <a class="nav-link" href="{{ route('logout') }}"
                 onclick="event.preventDefault();   this.closest('form').submit();" style="font-size: 14px">

                {{ __('Logout') }}
              </a>

            </form>
          </li>

        </ul>
      </div>
    </div>
  </nav>

</div>
<div class="container">
  <div class='panel-accounts' style="margin-top: 70px">

    <div class='fb-account-small' data-fb-id='' data-access-token=''>
      <span class='fb-account-small-picture'><img src='' /></span><span class='fb-account-small-name'> <span id="fb_name"></span>&nbsp;&nbsp;<span id="select_access" style="color: red">&nbsp;&nbsp;Click here</span></span>
      <div class='clear'></div>
    </div>

    <!--  <button class="btn btn-secondary " id="login_fb">Get User</button> -->

    <div class='clear'>


    </div>

    <div>

    </div>
</div>


@yield('content')
