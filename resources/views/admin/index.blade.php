@extends('adminmaster')

@section('title')
 Admin | St. Anne's City Farm
@endsection

@section('content')

<div class="bg-grey-lightest">
    <div class="container mx-auto flex flex-wrap justify-center md:justify-around py-8">
        <div class="w-full md:w-40p h-25r overflow-scroll px-2 py-2">
            <div>
                <h2 class="text-center">News</h2>
                <div class="my-4 flex justify-center">
                <a href="{{route('news.create')}}" class="no-underline bg-green-light text-grey-lightest text-center px-4 py-2 rounded text-xl hover:bg-green-dark active:bg-green-darker">Create News Item</a>
                </div>
                <div>
                    <table class="w-full my-2">
                        <tr>
                            <td>
                                Title
                            </td>
                            <td>
                                Edit
                            </td>
                            <td>
                                Delete
                            </td>
                        </tr>

                        @if($news)
                            @foreach($news as $newsitem)

                            <tr>
                                <td>
                                <a href="{{route('news.newsitem', ['id' => $newsitem->id])}}">{{$newsitem->title}}</a>
                                </td>

                                <td>
                                     <a href="{{route('news.edit', ['id' => $newsitem->id])}}">Edit</a>
                                </td>
                        
                                <td>
                                    <form action="{{route('news.delete', ['id' => $newsitem->id])}}" method="POST" onsubmit="return confirm('Are you sure you want to delete? This cannot be undone!')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="px-2 py-1 bg-red rounded text-grey-lightest">DELETE</button>
                                    </form>
                                </td>

                            </tr>

                            @endforeach

                        @endif
                    </table>
                </div>
            </div>
        </div>

        <div class="w-full md:w-40p h-25r overflow-scroll px-2 py-2">
            <h2 class="text-center">Events</h2>
            <div class="my-4 flex justify-center">
                <a href="{{route('calendar.create')}}" class="no-underline bg-green-light text-grey-lightest text-center px-4 py-2 rounded text-xl hover:bg-green-dark active:bg-green-darker">Create Event</a>
            </div>
            <div>
                    <table class="w-full my-2">
                        <tr>
                            <td>
                                Title
                            </td>
                            <td>
                                Edit
                            </td>
                            <td>
                                Delete
                            </td>
                        </tr>

                        @if($events)
                            @foreach($events as $event)

                            <tr >
                                <td>
                                <a href="{{route('calendar.show', ['id' => $event->id])}}">{{$event->title}}</a>
                                </td>

                                <td>
                                     <a href="{{route('calendar.edit', ['id' => $event->id])}}">Edit</a>
                                </td>
                        
                                <td>
                                    <form action="{{route('calendar.delete', ['id' => $event->id])}}" method="POST" onsubmit="return confirm('Are you sure you want to delete? This cannot be undone!')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="px-2 py-1 bg-red rounded text-grey-lightest">DELETE</button>
                                    </form>
                                </td>

                            </tr>

                            @endforeach

                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@parent


@endsection