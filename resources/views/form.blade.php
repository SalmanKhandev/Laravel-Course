@extends("master")


@section("content")

<div class="container"><br>
    <h1>Register Form</h1>
<div class="row">
  <div class="col-sm-8">
    <form method="post" action={{url('signup')}}>
        {{-- @csrf --}}
        <div class="form-group">
          <label>Name</label>
          <input type="text" required class="form-control" placeholder="Name" name="name">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" required class="form-control" placeholder="email" name="email">
          </div>
          <div class="form-group">
            <label>Phone Number</label>
            <input type="text" required class="form-control" placeholder="Phone " name="phone">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" required class="form-control" placeholder="Password" name="password">
          </div>
          <button type="submit" class="btn btn-primary">Register Now</button>
    </form>
  </div>
</div>
</div>


@endsection