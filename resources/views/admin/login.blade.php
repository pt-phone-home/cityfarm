@extends('adminmaster')

@section('title')
Login | St. Anne's City Farm Admin
@endsection

@section('content')
<div class="bg-pattern-grey-lightest">
    <div class="container mx-auto flex justify-center">
        <div>
            @if($errors)
            @foreach($errors->all() as $error)
        <li>{{$error}}</li>

            @endforeach
            @endif
        </div>
            <div class="w-full md:w-3/4 flex flex-col items-start bg-pattern-grey px-6 my-6 py-4">
                <div class="w-full">
                <form action="{{route('login.post')}}" method="POST" class="my-4">
                    @csrf
                            <h2 class="my-4 text-4xl font-dec text-center">Login</h2>
                        <div class="my-2">
                            <label for="email" class="block my-2 text-xl">Email:</label>
                            <input type="text" name="email" class="block w-80p md:w-80p h-8 outline-none rounded" required>
                        </div>                    
                        <div class="my-2">
                            <label for="password" class="block my-2 text-xl">Password:</label>
                            <input type="password" name="password" class="block w-80p md:w-80p h-8 outline-none rounded" required>
                        </div>                                    
                        <div class="my-4 flex justify-center pt-4">
                            <button type="submit" class="bg-green-light text-grey-lightest rounded px-4 py-2 text-2xl hover:bg-green outline-none active:bg-green-dark active:outline-none">Login</button>
                        </div>                    
                    </form>
                </div>
            </div>

    </div>

</div>
@endsection

@section('scripts')

@endsection
