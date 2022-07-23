<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <form enctype="multipart/form-data" method="post" action="{{url('uploadfile')}}">
  	@csrf
  	<input type="file" required name="file">
    <input type="submit">
  </form>
</body>
</html>