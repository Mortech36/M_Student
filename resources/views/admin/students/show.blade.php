<!DOCTYPE html>
<html>
  <head> 
    
    @include('admin.css')
  </head>
  <body class="flex flex-col min-h-screen">
    @include('sweetalert::alert')
    @include('admin.header')
    
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation -->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      
      <!-- Main Content Area -->
      <div class="page-content flex-1 p-4">
        @if(session()->has('message'))
        <div class="alert alert-danger">

          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
          {{session()->get('message')}}

        </div>
      @endif
        <!-- Page Heading -->
        <div class="text-center font-bold text-2xl mb-5 text-gray-500">All Posts</div>
        
        <!-- Table Container -->
        <div class="overflow-x-auto bg-gray-900 shadow-md rounded-lg">
          <table class="w-full min-w-max text-left text-slate-800">
            <thead>
              <tr class="text-slate-500 border-b border-slate-300 bg-slate-50">
                <th class="p-4">Image</th>
                <th class="p-4">Full Name</th>
                <th class="p-4">Email</th>
                <th class="p-4">Phone Number</th>
                <th class="p-4">Action</th>
               
              </tr>
            </thead>
            <tbody>
              @foreach ($student as $student)
              <tr class="hover:bg-slate-50">
                <td class="p-4">
                  <img src="/studentimage/{{ $student->image }}" class="h-16 w-16 rounded-full object-cover">
                </td>
                <td class="p-4">{{ $student->name }}</td>
                <td class="p-4">{{ $student->email }}</td>
                <td class="p-4">{{ $student->phone }}</td>
                
                <td>
                  <div class="flex space-x-4 p-4">
                    <button onclick="confirmDelete({{ $student->id }})" class="btn btn-danger">Delete</button>
                    <a href="{{url('update_student_page',$student->id)}}" class="btn btn-secondary ">Update</a>
                    <a href="{{url('accept_student',$student->id)}}" class="btn btn-success ">Accept</a>
                    <a href="{{url('reject_student',$student->id)}}" class="btn btn-primary ">Reject</a>
                  </div>
                  
                </td>
                
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Footer -->
   
      @include('admin.footer')
   
    

    <!-- JavaScript files -->
    @include('admin.js')
    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
        function confirmDelete(studentId) {
            Swal.fire({
                title: "Are you sure?",
                text: "This action cannot be undone!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = `/del_Mystudent/${studentId}`;
                }
            });
        }
    </script>
  </body>
</html>
