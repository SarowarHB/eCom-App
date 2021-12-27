@extends('index.indexMaster')

@section('title')
LoginPage
@endsection

@section('content')
<div class="container">
    <nav class="biolife-nav">
        <ul>
            <li class="nav-item"><a href="{{url('/')}}" class="permal-link">Home</a></li>
            <li class="nav-item"><span class="current-page">Authentication</span></li>
        </ul>
    </nav>
</div>

<div id="main-content" class="main-content">
    <div class="container">

        <div class="row">

            <!--Form Sign In-->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="signin-container">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                       
                           

                            <p class="form-row">
                                    <label for="fid-name">Email Address:<span class="requite">*</span></label>
                                    <input type="email" class="txt-input" name="email" aria-describedby="emailHelp"
                                    placeholder="email">
                            </p>
                            

                            <p class="form-row">
                                    <label for="fid-pass">Password:<span class="requite">*</span></label>
                                    <input type="password" class="txt-input" name="password" placeholder="Password">
                            </p>
                            <p class="form-row wrap-btn">
                                    <button class="btn btn-submit btn-bold" type="submit">sign in</button>
                                   
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="link-to-help">Forgot your password</a>
                                    @endif
                            </p>
                     
                    </form>


                </div>
            </div>

            <!--Go to Register form-->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="register-in-container">
                    <div class="intro">
                        <h4 class="box-title">New Customer?</h4>
                        <p class="sub-title">Create an account with us and you’ll be able to:</p>
                        <ul class="lis">
                            <li>Check out faster</li>
                            <li>Save multiple shipping anddesses</li>
                            <li>Access your order history</li>
                            <li>Track new orders</li>
                            <li>Save items to your Wishlist</li>
                        </ul>
                        <a href="{{url('register')}}" class="btn btn-bold">Create an account</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection
