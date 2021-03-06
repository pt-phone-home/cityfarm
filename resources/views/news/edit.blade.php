@extends('adminmaster')

@section('title')

Edit News Item | admin

@endsection

@section('content')
<div class="bg-grey-lightest">
    <div class="container mx-auto py-8">
        <h1 class="text-center">Edit news item</h1>
    </div>
</div>

<div class="bg-grey">

    <div class="container mx-auto">

    <form action="{{route('news.update', ['id' => $newsitem->id])}}" method="POST" class="py-8" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="py-2">
                <label for="title" class="block my-2 text-xl">Title:</label>
            <input type="text" name="title" class="block w-80p md:w-80p h-8 outline-none rounded" value="{{$newsitem->title}}">
            </div>
            <div class="py-2">
                <label for="headline" class="block my-2 text-xl">Headline:</label>
            <input type="text" name="headline" class="block w-80p md:w-80p h-8 outline-none rounded" value="{{$newsitem->headline}}">
            </div>
            <div class="py-2">
                <label for="body" class="block my-2 text-xl">News Text:</label>
            <textarea name="body" id="body" cols="30" rows="10" class="block w-80p md:w-80p h-48 outline-none rounded">{{$newsitem->body}}</textarea>
            </div>
            <div class="py-2">
                <label for="img" class="block my-2 text-xl">Image (Optional):</label>
                <input type="file" name="img" id="img" class="block w-80p md:w-80p h-8 outline-none rounded">
            </div>
            <div class="my-4">
                <button type="submit" class="bg-green-light text-grey-lightest rounded px-4 py-2 text-2xl hover:bg-green outline-none active:bg-green-dark active:outline-none">Update</button>
            </div> 

        </form>
    </div>

</div>

@endsection

@section('scripts')
<script src="https://cdn.ckeditor.com/4.11.1/standard-all/ckeditor.js"></script>
<script>
        CKEDITOR.replace('body', {
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