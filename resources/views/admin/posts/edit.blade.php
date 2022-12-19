<x-layout>
    <x-setting :heading="'Edit Post: '  . $post->title">
        <form method="POST" action="/admin/posts/{{$post->id}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="title" :value="$post->title"/>
            <x-form.input name="slug" :value="$post->slug"/>
            <div class="flex mt-6">
                <div class="flex-1 mr-6">
                    <x-form.input name="thumbnail" type="file" :value="$post->thumbnail"/>
                </div>
                <img src="/storage/{{$post->thumbnail}}" alt="" class="rounded-xl" width="100">
            </div>

            <x-form.textarea name="excerpt">{{$post->excerpt}}</x-form.textarea>
            <x-form.textarea name="body">{{$post->body}}</x-form.textarea>

            <div class="mb-6">
                <x-form.label name="category_id"/>

                <select name="category_id" id="category_id">
                    @php
                        $categories = App\Models\Category::all()
                    @endphp

                    @foreach($categories as $category)
                        <option
                            value="{{$category->id}}"
                            {{old('category_id', $post->category_id)==$category->id?'selected':''}}>
                            {{ucwords($category->name)}}
                        </option>
                    @endforeach
                </select>

                <x-form.error name="category_id"/>
            </div>

            <x-submit-button>Update</x-submit-button>
        </form>
    </x-setting>
</x-layout>
