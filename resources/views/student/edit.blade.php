<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student crud</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
</head>
<body>
    <div class="bg-dark py-3">
        <div class="container">
        <div class="h4 text-white">Student</div>
        
</div>
</div>

<div class="container ">
    <div class="d-flex justify-content-between py-3 ">
        <div class="h4">Edit Student</div>
        <div>
            <a href="{{route('students.index')}}" class="btn btn-primary">Back</a>
</div>
</div>
<form action="{{route('students.update',$student->id)}}" method="post" enctype="multipart/form-data">
    @csrf
   @method('put')
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <div class="mb-3">
                        <lable for="name" class="form-lable">Name</lable>
                        <input type="text" name="name" id="name" placeholder="enter name" class="form-control
                        @error('name') is-invalid @enderror" value="{{ old('name',$student->name) }}">
                        @error('name')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
</div>

                
                    <div class="mb-3">
                        <lable for="discription" class="form-lable">Work Discription</lable>
                        <input type="text" name="discription" id="discription" placeholder="edit Work Discription" class="form-control @error('discription') is-invalid @enderror"  value="{{ old('discription',$student->discription) }}">
                        @error('discription')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                        
</div>
              
                    <div class="mb-3">
                        <lable for="age" class="form-lable">Work Due Date</lable>
                        <input type="text" name="age" id="age" placeholder="enter age" class="form-control @error('age') is-invalid @enderror"  value="{{ old('age',$student->age) }}">
                        @error('age')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
</div>
                    <div class="mb-3">
                        <lable for="time" class="form-lable">Work Due Time</lable>
                        <input type="time" name="time" id="time" placeholder="enter time" class="form-control @error('time') is-invalid @enderror"  value="{{ old('time',$student->time) }}">
                        @error('time')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
</div>

               
                    <div class="mb-3">
                        <lable for="name" class="form-lable">Status</lable>
                        <br>
                        <input type="radio" name="state" value="Complete" value="{{ old('state',$student->state) }}">Complete
                         <input type="radio" name="state" value="InComplete" value="{{ old('state',$student->state) }}">Incomplete

</div>
                   

                    
            </div>
            </div>  
            
            <button class="btn btn-primary mt-3">Update Record</button>
</form>   
</body>
</html>