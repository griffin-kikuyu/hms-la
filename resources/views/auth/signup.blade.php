<form method="POST" action="{{ route('process.signup') }}">
    @csrf
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div class="row register-form">
    
    <div class="col-md-3">
        <div class="form-group">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control"  name="username" value="{{old('username')}}" onkeydown="return alphaOnly(event);" required/>
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control"  name="email"  />
        </div>
        <div class="form-group">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control"  id="password" name="password" onkeyup='check();' required/>
        </div>
        
        <div class="form-group">
            <div class="maxl">
                <label class="form-check-inline"> 
                    <input type="radio" name="gender" value="Male" checked>
                    <span> Male </span> 
                </label>
                <label class="radio inline"> 
                    <input type="radio" name="gender" value="Female">
                    <span>Female </span> 
                </label>
            </div>
           
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control"  name="age" onkeydown="return alphaOnly(event);" required/>
        </div>
        
        <div class="form-group">
            <label for="Phone-number" class="form-label">Phone number</label>
            <input type="tel" minlength="10" maxlength="10" name="contact" class="form-control"  />
        </div>
        <div class="form-group">
            <label for="Confirm password" class="form-label">Confirm password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" onkeyup='check();' required/><span id='message'></span>
        </div>
        <input type="submit" class="btnRegister" name="signup"  value="Register"/>
    </div>

</div>

</form>