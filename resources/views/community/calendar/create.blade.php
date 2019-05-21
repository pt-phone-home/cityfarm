@extends('adminmaster')

@section('title')

Create Event | admin

@endsection

@section('content')
<div class="bg-pattern-grey-lightest bg-grey-lightest">
    <div class="container mx-auto py-8">
        <h1 class="text-center font-dec ">Create Event </h1>
    </div>
</div>

<div class="bg-grey">

    <div class="container mx-auto">

    <form action="{{route('calendar.store')}}" method="POST" class="py-8" enctype="multipart/form-data">
        @csrf
            <div class="py-2">
                <label for="title" class="block my-2 text-xl">Title:</label>
            <input type="text" name="title" class="block w-80p md:w-80p h-8 outline-none rounded" value="{{old('title')}}" required>
            </div>
            <div class="py-2">
                <label for="headline" class="block my-2 text-xl">Headline:</label>
            <input type="text" name="headline" class="block w-80p md:w-80p h-8 outline-none rounded" value="{{old('headline')}}" required>
            </div>
            <div class="py-2">
                <label for="short_description" class="block my-2 text-xl">Short Description:</label>
            <input type="text" name="short_description" class="block w-80p md:w-80p h-8 outline-none rounded" value="{{old('short_description')}}" required>
            </div>
            <div class="py-2">
                <label for="location" class="block my-2 text-xl">Location:</label>
            <input type="text" name="location" class="block w-80p md:w-80p h-8 outline-none rounded" value="{{old('location')}}" required>
            </div>
            <div class="flex flex-wrap">
                <div class="py-2 w-full md:w-1/4">
                    <label for="date" class="block my-2 text-xl">Date:</label>
                    <input type="date" name="date" class="block w-80p md:w-80p h-8 outline-none rounded" value="{{old('date')}}" required>
                </div>
                <div class="py-2 w-full md:w-1/4">
                    <label for="time_from" class="block my-2 text-xl">Time From:</label>
                <input type="text" name="time_from" class="block w-80p md:w-80p h-8 outline-none rounded" value="{{old('time_from')}}" required>
                </div>
                <div class="py-2 w-full md:w-1/4">
                    <label for="time_to" class="block my-2 text-xl">Time To:</label>
                <input type="text" name="time_to" class="block w-80p md:w-80p h-8 outline-none rounded" value="{{old('time_to')}}" required>
                </div>
            </div>
            <div class="py-2">
                <label for="content" class="block my-2 text-xl">Event Details:</label>
            <textarea name="content" id="content" cols="30" rows="10" class="block w-80p md:w-80p h-48 outline-none rounded">{{old('content')}}</textarea>
            </div>
            <div class="py-2">
                <label for="img" class="block my-2 text-xl">Image (Optional):</label>
                <input type="file" name="img" id="img" class="block w-80p md:w-80p h-8 outline-none rounded">
            </div>
            <div class="py-2">
                <label for="link" class="block my-2 text-xl">Link:</label>
            <input type="text" name="link" class="block w-80p md:w-80p h-8 outline-none rounded" value="{{old('link')}}" required>
            </div>
            <div class="my-4">
                <button type="submit" class="bg-green-light text-grey-lightest rounded px-4 py-2 text-2xl hover:bg-green outline-none active:bg-green-dark active:outline-none">Save</button>
            </div> 

        </form>
    </div>

</div>

@endsection

@section('scripts')
<script src="https://cdn.ckeditor.com/4.11.1/standard-all/ckeditor.js"></script>
<script>
        CKEDITOR.replace('content', {
            toolbarGroups:[{
                'name': 'basicstyles', 
                'groups': ['basicstyles']
            },
            {
                'name': 'clipboard',
                'groups': ['clipboard', 'undo']
            },
            {
                'name': 'paragraph',
                'groups': ['list', 'indent', 'blocks']
            },
            {
                'name': 'styles',
                'groups': ['styles']
            }
            ]
        });
    </script>

@endsection