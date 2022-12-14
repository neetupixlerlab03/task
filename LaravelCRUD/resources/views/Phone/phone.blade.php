@extends('Phone.frontend')

@section('content')


    <div class="container px-6 mx-auto">
        <h3 class="text-2xl font-medium text-gray-700">Product List</h3>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($phones as $phone)
            <div class=" max-w-sm mx-auto overflow-hidden rounded-md shadow-md">
                <img src="{{ Storage::url($phone->image) }}" height="50" width="50" alt="hii" >
                <div class="flex items-end justify-end w-full bg-cover">
                    
                </div>
                <div class="px-5 py-3">
                    <h3 class="text-gray-700 uppercase">{{ $phone->name }}</h3>
                    <span class="mt-2 text-gray-500">${{ $phone->price }}</span>
                    <form action="{{ route('addcarts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $phone->id }}" name="id">
                        <input type="hidden" value="{{ $phone->name }}" name="name">
                        <input type="hidden" value="{{ $phone->price }}" name="price">
                        <input type="hidden" value="{{ $phone->image }}" name="image">
                        
                        
                        <input type="hidden" value="1" name="quantity">
                        <button class="px-4 py-2 text-white bg-blue-800 rounded" name="addtocartbtn">Add To Cart</button>
                    </form>
                </div>
                
            </div>
            @endforeach
        
           
        </div>
        {!! $phones->links() !!}
    </div>
    
@endsection