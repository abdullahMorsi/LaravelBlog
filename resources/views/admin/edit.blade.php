<x-layout>
    <x-setting heading="Publish New Post">
        <form method="POST" action="/admin/posts/{{$post->id}}" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <x-form.input name="title" value="{{$post->title}}"/>
            <x-form.input name="slug" value="{{$post->slug}}"/>
            <div class="flex mt-6">
                <div class="flex-1">
                    <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)" />
                </div>

                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="rounded-xl ml-6"height="100" width="200">
            </div>

            <x-form.textarea name="excerpt" >{{$post->excerpt}}</x-form.textarea>
            <x-form.textarea name="body">{{$post->body}}</x-form.textarea>

            <x-form.field>
                <x-form.label name="category"/>
                <select name="category_id" id="category_id" class=" border border-gray-200 rounded-xl">
                    @foreach(\App\Models\Category::all() as $category)
                        <option value="{{$category->id}}" {{$category->id==$post->category_id?'selected':''}}>{{ucwords($category->name)}}</option>
                    @endforeach
                </select>
                <x-form.error name="category"/>
            </x-form.field>
            <x-form.button>Update</x-form.button>
        </form>
    </x-setting>

</x-layout>
