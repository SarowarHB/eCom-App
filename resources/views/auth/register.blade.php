@extends('index.indexMaster')

@section('title')
Register
@endsection

@section('content')
<div class="container">
    <nav class="biolife-nav">
        <ul>
            <li class="nav-item"><a href="{{route('/')}}" class="permal-link">Home</a></li>
            <li class="nav-item"><span class="current-page">Authentication</span></li>
        </ul>
    </nav>
</div>

<div id="main-content" class="main-content">
    <div class="container">

        <div class="row ">

            <!--Form Sign In-->
            <div class="col-md-6 ">
                <div class="signin-container" style="align-content: center;">

                <h2 class="page-title text-center">SignUp As New User</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <p class="form-row">
                            <label for="fid-name">Name:<span class="requite">*</span></label>
                            <input class="txt-input" id="name" type="text" name="name" :value="old('name')" required
                                autofocus autocomplete="name">
                        </p>

                        <p class="form-row">
                            <label for="fid-name">Email Address:<span class="requite">*</span></label>
                            <input type="email" class="txt-input" id="email" name="email" :value="old('email')"
                                required>
                        </p>


                        <p class="form-row">
                            <label for="fid-pass">Password:<span class="requite">*</span></label>
                            <input type="password" class="txt-input" id="password" name="password" required
                                autocomplete="new-password">
                        </p>

                        <p class="form-row">
                            <label for="fid-pass">Confirm Password:<span class="requite">*</span></label>
                            <input type="password" class="txt-input" id="password_confirmation"
                                name="password_confirmation" required autocomplete="new-password">
                        </p>
                        <p class="form-row wrap-btn">
                            <button class="btn btn-submit btn-bold" type="submit">sign Up</button>
                            <a href="{{ route('login') }}" class="link-to-help">Already registered?</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>


@endsection
