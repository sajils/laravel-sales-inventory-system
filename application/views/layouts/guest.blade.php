<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Sales/Inventory System</title>

      <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]--> 
      
      {{ Asset::styles() }}

      <link rel="shortcut icon" href="favicon.ico">
    </head>
    <body id="top" data-spy="scroll" data-target=".subnav" data-offset="80">

        @yield('content')

      {{ Asset::scripts() }}
    </body>
</html>