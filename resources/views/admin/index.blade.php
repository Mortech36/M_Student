<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  </head>
  <body>
    <header class="header">
        @include('admin.header')
    </header>
    
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      @include('admin.body')
        <footer class="footer">
          @include('admin.footer')
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
    
  </body>
</html>