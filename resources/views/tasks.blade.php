@include("includes/header")


<body>

<div class="container">

    @if(count($tasks) > 0)
      
       <h1>Data exits</h1>
   
    @endif


  {{-- <h2>All Tasks</h2> --}}
           
  {{-- <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>

        {{-- @foreach ($tasks as $task)
      <tr>
        <td>{{$task->id}}</td>
        <td>{{$task->name}}</td>
        <td>{{$task->description}}</td>
      </tr>
      @endforeach --}}
    {{-- </tbody> --}}
  {{-- </table> --}} 
</div>


@include("includes/footer")
