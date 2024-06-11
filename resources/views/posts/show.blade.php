<x-layout>
    <x-slot:heading>
        Post
    </x-slot:heading>

  <x-div>
        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
            <div class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                <div class="lg:pr-4">
                    <div class="lg:max-w-lg">
                        <p class="text-base font-semibold leading-7 text-indigo-600">Deploy faster</p>
                        <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $post->title }}</h1>
                        <p class="mt-6 text-xl leading-8 text-gray-700">Aliquet nec orci mattis amet quisque ullamcorper neque, nibh sem. At arcu, sit dui mi, nibh dui, diam eget aliquam. Quisque id at vitae feugiat egestas.</p>
                    </div>
                </div>
            </div>


            <div class="-ml-12 -mt-12 p-12 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
                @if($post->image)
                <img class="h-720 w-1180 -ml-12 -mt-12 p-12 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden " src="{{ asset('storage/' . $post->image) }}" alt="">
                @endif
            </div>

            <div class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                <div class="lg:pr-4">
                    <div class="max-w-xl text-base leading-7 text-gray-700 lg:max-w-lg">
                        {{ $post->text }}

                        <p class="mt-8">Et vitae blandit facilisi magna lacus commodo. Vitae sapien duis odio id et. Id blandit molestie auctor fermentum dignissim. Lacus diam tincidunt ac cursus in vel. Mauris varius vulputate et ultrices hac adipiscing egestas. Iaculis convallis ac tempor et ut. Ac lorem vel integer orci.</p>
                        <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900">No server? No problem.</h2>
                        <p class="mt-6">Id orci tellus laoreet id ac. Dolor, aenean leo, ac etiam consequat in. Convallis arcu ipsum urna nibh. Pharetra, euismod vitae interdum mauris enim, consequat vulputate nibh. Maecenas pellentesque id sed tellus mauris, ultrices mauris. Tincidunt enim cursus ridiculus mi. Pellentesque nam sed nullam sed diam turpis ipsum eu a sed convallis diam.</p>
                    </div>
                </div>
            </div>
        </div>
    <div class="mt-6 flex items-center justify-end gap-x-6">
        <x-button href="{{ route('posts.edit', $post) }}">Edit Post</x-button>
    <form action="{{ route('posts.destroy', $post) }}"  method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="flex justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Delete post
        </button>
    </form>
    </div>


{{--      likes--}}
      <form action="{{ route('likes.store', $post) }}" method="POST">
          @csrf
          <button type="submit">{{ $post->likes->count() }} Like</button>
      </form>
      <form action="{{ route('likes.destroy', $post) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit">Unlike</button>
      </form>

{{--      comments--}}
      <h2>Comments</h2>
      @foreach ($post->comments as $comment)
          <p>{{ $comment->body }}</p>
          @if ($comment->user_id == auth()->id())
              <form action="{{ route('comments.destroy', [$post, $comment]) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit">Delete</button>
              </form>
          @endif
      @endforeach

      <form action="{{ route('comments.store', $post) }}" method="POST">
          @csrf
          <textarea name="body" required></textarea>
          <button type="submit">Add Comment</button>
      </form>


  </x-div>
</x-layout>
