<!DOCTYPE html>
<html lang="en">
<head>
  @include('admin.css')
</head>
<body>
  @include('sweetalert::alert')
  @include('admin.header')

  <div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    @include('admin.sidebar')
    <!-- Sidebar Navigation end-->
    
    <div class="page-content">
      @if(session()->has('message'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
          {{session()->get('message')}}
        </div>
      @endif
      
      <!-- Form Heading -->
      <div class="heading text-center font-bold text-2xl m-5 text-white-800">New Student</div>

      <form action="{{ route('students.add') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="editor mx-auto w-full md:w-10/12 flex flex-col space-y-4 text-gray-800 border border-gray-300 p-4 shadow-lg max-w-2xl">
          <!-- Input Fields -->
          <input class="block w-full bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" placeholder="Full Name" type="text" name="name">
          <input class="block w-full bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" placeholder="Email" type="email" name="email">
          <input class="block w-full bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" placeholder="Date of Birth" type="date" name="dob">
          <input class="block w-full bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" placeholder="Phone Number" type="number" name="phone">
          <input class="block w-full bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" placeholder="Post Image" type="file" name="image">
          
          <!-- Submit Button -->
          <div class="flex mt-3">
            <input type="submit" value="Post" class="btn border border-indigo-500 p-1 px-4 font-semibold cursor-pointer text-gray-200 ml-auto bg-indigo-500">
          </div>
        </div>
      </form>
    </div>
  </div>

  @include('admin.footer')
  @include('admin.js')
</body>
</html>
