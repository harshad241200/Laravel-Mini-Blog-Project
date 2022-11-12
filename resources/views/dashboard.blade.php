<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div> -->
<a href="{{ route('post_add') }}">Addpost</a>
    <table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Title</th>
      <th>description</th>
      <th>Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach($posts as $post)
  <tr>
    <th>{{ $post->user->name }}</th>
    <th>{{ $post->title }}</th>
    <th>{{ $post->body }}</th>
    <th><a href="{{route('post_edit', ['id' => $post->id])}}">Edit</a>
    <a href="{{route('post_delete', ['id' => $post->id])}}">Delete</a></th>



</tr>
@endforeach

  </tbody>
</table>

</x-app-layout>
