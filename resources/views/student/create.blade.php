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
        <div class="h4 text-white">Multiple Do-list</div>
        
</div>
</div>

<div class="container ">
    <div class="d-flex justify-content-between py-3 ">
        <div class="h4">Multiple Do-list</div>
        <div>
            <a href="{{route('students.index')}}" class="btn btn-primary">Back</a>
</div>
</div>
<form action="{{route('students.store')}}" method="post" enctype="multipart/form-data">
    @csrf
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <div class="mb-3">
                        <lable for="name" class="form-lable">Name</lable>
                        <input type="text" name="name" id="name" placeholder="enter your job" class="form-control
                        @error('name') is-invalid @enderror" value="{{ old('name') }}">
                        @error('name')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
</div>

                
                    <div class="mb-3">
                        <lable for="discription" class="form-lable">Discription</lable>
                        <input type="text" name="discription" id="discription" placeholder="enter your discripcion" class="form-control @error('discripcion') is-invalid @enderror">
                        @error('discription')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
</div>

               
                    <div class="mb-3">
                        <lable for="date" class="form-lable">due Date</lable>
                        <input type="date" name="age" id="age" placeholder="enter age" class="form-control @error('age') is-invalid @enderror">
                        @error('age')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror

                        <div class="mb-3">
                        <lable for="time" class="form-lable">due Time</lable>
                        <input type="time" name="time" id="time" placeholder="enter age" class="form-control @error('time') is-invalid @enderror">
                        @error('age')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror


               
                    <div class="mb-3">
                        <lable for="name" class="form-lable">Status</lable>
                        <br>
                       
                                <input type="radio" name="state" value="Complete"  class="form-check-input" >complete
                                <input type="radio" name="state" value="InComplete" class="form-check-input">Incomplete
</div>

                    

                    
            </div>
            </div>  
            
            <button class="btn btn-primary mt-3">Save</button>
</form>
 
</body>
</html>