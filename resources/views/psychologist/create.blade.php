<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css','resources/js/app.js',)
</head>
<body>
                    <div>
                        <h2>Add Company</h2>
                    </div>
                    <div>
                        <a class="btn btn-primary" href="{{ route('psychologists.index') }}"> Back</a>
                    </div>
                </div>
            </div>
            @if(session()->has('status'))
            <div class="text-green-400">{{session()->get('status')}}</div>
            @endif
            <form action="{{ route('psychologists.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Company Name:</strong>
                            <input type="text" name="name" class="form-control" placeholder="Company Name">
                            @error('name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Company Email:</strong>
                           <input type="phonenumber" name="phonenumber" class="form-control" placeholder="">
                            @error('phonenumber')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                 
                    <x-primary-button>Submit</x-primary-button>
                </div>
            </form>
        </div>

        <div class="">
            <form action="">
              <div class="grid grid-cols-2">
                <div class="">
                <input type="text" placeholder="tyype it !!" id="name" class="rounded-full">
                <label for="name" name="name">Name</label>
                </div>
                <input type="text" placeholder="tyype it !!" id="phonenumber" class="rounded-full">
                <label for="phonenumber" name="phonenumber">Phonenumber</label>
              </div>
            </form>
          </div>
      


   


</body>
</html>