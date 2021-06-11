<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      @yield('tittle')
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--enable mobile device-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--fontawesome css-->
      <link rel="stylesheet" href="resources\css\font-awesome.min.css">
      <!--bootstrap css-->
      <link rel="stylesheet" href="resources\css\bootstrap.min.css">
      <!--animate css-->
      <link rel="stylesheet" href="resources\css\animate-wow.css">
      <!--main css-->
      <link rel="stylesheet" href="resources\css\style.css">
      <link rel="stylesheet" href="resources\css\bootstrap-select.min.css">
      <link rel="stylesheet" href="resources\css\slick.min.css">
      <!--responsive css-->
      <link rel="stylesheet" href="resources\css\responsive.css">
   </head>
   <body>
      @yield('content')
   </body>
   @yield('extraScript')
</html>