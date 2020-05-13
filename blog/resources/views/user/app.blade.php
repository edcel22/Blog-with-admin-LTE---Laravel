<!DOCTYPE html>
<html lang="en">

<head>
  @include('user/layouts/head')
</head>
	
<body>

  <!-- navigation & header -->
  @include('user/layouts/header')
  
  <!-- Main Content -->
  @section('main-content')
    @show

  <!-- Footer -->
  <hr>
  @include('user/layouts/footer')
</body>

</html>
