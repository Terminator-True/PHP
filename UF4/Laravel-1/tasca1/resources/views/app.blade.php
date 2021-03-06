<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <style>
       table {
                border-collapse: collapse;
                width: 100%;
            }
  
  th, td {
            text-align: left;
            padding: 8px;
        }
  
  tr:nth-child(even) {background-color: #f2f2f2;}
    .card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
   </style>
   <title>tasca4-laravel  @yield('title')</title>
</head>
    <body>
        @section('sidebar')
                Sidebar
        @show
        <div>
            @yield('content')    
        </div>
    </body>
</html>
