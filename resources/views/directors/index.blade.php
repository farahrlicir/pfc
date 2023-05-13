@extends('master')


@section('title')

@stop

@section('main')

<div class="">
      
  @if ($message = Session::get('success'))
  <div class="alert alert-success">
      <p class=" text-green-800 font-bold px-2 bg-green-200 border-green-600  border-y-2 border-x-2 w-fit">{{ $message }}</p>
  </div>
  @endif
  <br><br>
 <div class="flex justify-center px-5 py-5">
    <div class="border-bluey border-y-2 border-x-2">
    

        @foreach ($directors as $director)
           <div class="flex w-full bg-blue-100 justify-center items-center">
             <img src="/img/director.jpg" alt=""  class="rounded-full">
            </div><br><br><br>
            <div class="flex justify-center align-middle ">
               <span><p class="font-bold text-lg px-6">FullName:<br><span class="font-light">{{ $director->fullname}}</span></p></span><br>
               <span><p class="font-bold text-lg px-6">Num:<br> <span class="font-light">{{ $director->phonenum}}</span></p></span><br>
               <span><p class="font-bold text-lg px-6">Email:<br><span class="font-light">{{ $director->email }}</span></p></span><br>
               <span><p class="font-bold text-lg px-6">Address: <br><span class="font-light">{{ $director->address }}</span></p></span><br>
            </div> <br><br><br>
              
               <form action="{{ route('directors.destroy',$director->id) }}" method="Post" class="flex justify-between px-3 py-3">
                 <a href="{{ route('directors.edit',$director->id) }}"  class="bg-slate-700 text-white p-2 rounded-lg font-semibold">Edit</a>
                  @csrf
                  @method('DELETE')
                  <button onclick="return confirm('Are you sure?')" type="submit" class="bg-red-800 text-white p-2  rounded-lg font-semibold">Delete</button>
               
                </form>
         

        @endforeach
    </div>
</div>
 {!! $directors->links() !!}

</div>

@stop

