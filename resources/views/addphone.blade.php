@extends("master")


@section("content")

<div class="container"><br>
    <h1>Add Phone</h1>
<div class="row">
  <div class="col-sm-8">
    <form method="post" action={{url('addcontact')}}>
        @csrf
        <div class="form-group">
          <label>Select User</label>
          <select name="user_id" id="" class="form-control">
            @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->fullname}}</option>
            @endforeach
          </select>
        </div>
          <div class="form-group">
            <label>Phone Number</label>
            <input type="text" required class="form-control" placeholder="Phone " name="phone">
          </div>
          <button type="submit" class="btn btn-primary">Add Phone</button>
    </form>
    <hr>

    <table class="table table-striped ">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach($phones as $phone)
            <tr>
                <td>{{$phone->id}}</td>
                <td>{{$phone->fullname}}</td>
                <td>{{$phone->phone->phone_number}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
  </div>
</div>
</div>


@endsection