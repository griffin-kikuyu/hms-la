<form method="POST" action="{{ route('process.login') }}">
    @csrf
<div class="row register-form">
    <div class="col-md-6">
        <div class="form-group">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control"  name="username" onkeydown="return alphaOnly(event);" required/>
        </div>
        <div class="form-group">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" required/>
           
        </div>
        <input type="submit" class="btnRegister" name="login" value="Login"/>
    </div>
    
</div>
</form>