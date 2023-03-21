@php
    $id = Session::get('customerID');
    use App\Models\Customer;
        $customerInfo = Customer::find($id);
    use App\Models\Cart;
    $productCountByUserId = Cart::where('user_id', $id)->count();
@endphp
<section class="topbar" id="home">
    <div class="row c-mr-0">
        <div class="col-md-6">
            <div class="left-contact">
                <a href=""><i class="fa-solid fa-hand-holding-heart"></i>Help</a>
                <a href=""><i class="bar fa fa-percent"></i>Discount</a>
                <a href=""><i class="bar fa fa-gift"></i>Offer</a>
                <a href="{{ 'customer-signup' }}"><i class="bar fa fa-gift"></i>SignUp / Login</a>
            </div>

        </div>
        <div class="col-md-6">
            <div class="right-contact">
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="bar fa-brands fa-facebook-f"></i></a>
                <a href=""><i class="bar fa-brands fa-google-plus-g"></i></a>
                <a href=""><i class="bar fa-brands fa-linkedin-in"></i></a>
                <a href=""><i class="bar fa-brands fa-instagram"></i></a>
            </div>
        </div>
    </div>
</section>


<section class="sticky-top">
<!--*************** Logo and Search ******************-->
<section class="logoSearch p-0-135 bg-white">
    <div class="row logo-searchBox-bar ">
           <div class="col-md-3 logo">
               <img src ="{{asset('frontEndAsset')}}/image/logo.png">
           </div>
           <div class="col-md-5 logo">
               <div class="input-group search-box">
                   <input type="search" class="form-control" placeholder="Search Books Publications Authors....">
                   <div class="input-group-append">
                       <button class="btn btn-secondary" type="button">
                           <i class="fa fa-search"></i>
                       </button>
                   </div>
               </div>
           </div>
{{--        @php--}}
{{--            $cartProductCountByUser = Cart::cartProductCountByUser($id);--}}
{{--        @endphp--}}
           <div class="col-md-4 icon-search-left">
               {{--           <i class="fa fa-shopping-cart"></i>--}}
               <a href=""><i class="fa fa-heart"></i></a>
               {{--            <a href=""><i class="fa-regular fa-bell"></i></a>--}}
               {{--            <a href="{{ route('customer-login') }}"><i class="fas fa-user-circle"></i> </a>--}}
                @if($id)
               <a href="{{ route('cart',['id' => $id ]) }}" class="shopping-bag">
                   <i class="fa fa-shopping-cart"></i>
                   <span class="position-relative translate-middle badge rounded-pill bg-secondary">
                    {{ $productCountByUserId }}
                   </span>
               </a>
               @else
                   <a href="#" class="shopping-bag">
                       <i class="fa fa-shopping-cart"></i>
                       <span class="position-relative translate-middle badge rounded-pill bg-secondary">
                    0
                   </span>
                   </a>
               @endif

               @if(Session::get('customerID'))
                   <div class="btn-group user-profile-btn">
                       <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                           <img src="{{ asset($customerInfo -> customer_image) }}" class="img-fluid rounded-circle user-profile-img"  alt="img"><span>{{ Session::get('customerName') }}</span>
                       </button>
                       <ul class="dropdown-menu">
                           <li><a class="dropdown-item" href="{{ route('customer-profile', ['customerId' => Session::get('customerID')]) }}">Profile</a></li>
                           <li><a class="dropdown-item" href="#">Dashboard</a></li>
                           <li><a class="dropdown-item" href="#">Setting</a></li>
                           <li><hr class="dropdown-divider"></li>
                           <li><a class="dropdown-item" href="{{ route('customer-logout', ['customerId' => Session::get('customerID')]) }}">Logout</a></li>
                       </ul>
                   </div>
               @else

                   <a href="{{ route('customer-login') }}" class="btn btn-outline-primary user-profile-btn">Login</a>

               @endif
           </div>
    </div>
</section>

<!--*************** Navbar Menu ******************-->
<section class="menu" id="myHeader" class="headerr">
    <div class="row c-mr-0">
        <div class="col-md-12 p-0">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand site-logo" href="{{ route('/') }}">
                        <h1>Ebook Share</h1>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('/') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('book') }}">eBooks</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('categories') }}">Genres</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('authors') }}">Authors</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('publishers') }}">Publishers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">Reviews</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#clients">Audio Books</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#teams">About</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</section>
</section>
