<div class="form-group">
    <label class="col-md-12">Category</label>
    <div class="col-md-12">
        @php
            if(old("category_id")){
                $category_id = old('category_id');
            }elseif(isset($post)){
                $category_id = $post->category_id;
            }else{
                $category_id = null;
            }
        @endphp
        <select name="category_id" id="category" class="form-control form-control-line @error('category_id') is-invalid @enderror">
            <option value="">Please select category</option>
            @foreach($categories as $category)
                <option @if($category_id == $category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    @error('category_id')
    <div class="pl-1 text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label class="col-md-12">Author</label>
    <div class="col-md-12">
        @php
            if(old("author_id")){
                $author_id = old('author_id');
            }elseif(isset($post)){
                $author_id = $post->author_id;
            }else{
                $author_id = null;
            }
        @endphp
        <select name="author_id" id="author" class="form-control form-control-line @error('author_id') is-invalid @enderror">
            <option value="">Please select author</option>
            @foreach($authors as $author)
                <option @if($author_id == $author->id) selected @endif value="{{ $author->id }}">{{ $author->name }}</option>
            @endforeach
        </select>
    </div>
    @error('author_id')
    <div class="pl-1 text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label class="col-md-12">Title</label>
    <div class="col-md-12">
        <input name="title" value="{{ old('title',isset($post)?$post->title:null) }}" type="text" placeholder="Enter post title" class="form-control form-control-line @error('title') is-invalid @enderror">
    </div>
    @error('title')
    <div class="pl-1 text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label class="col-md-12">Details</label>
    <div class="col-md-12">
        <textarea rows="5" name="details" class="form-control form-control-line @error('details') is-invalid @enderror">{{ old('details',isset($post)?$post->details:null) }}</textarea>
    </div>
    @error('details')
    <div class="pl-1 text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label class="col-md-12">Status</label>
    @php
        if(old("status")){
            $status = old('status');
        }elseif(isset($post)){
            $status = $post->status;
        }else{
            $status = null;
        }
    @endphp
    <div class="col-md-12">
        <input name="status" @if($status =='published') checked @endif value="published" type="radio" id="published"> <label for="published"> Published</label>
        <input name="status" @if($status =='unpublished') checked @endif value="unpublished" type="radio" id="unpublished"> <label for="unpublished"> Unpublished</label>
        <input name="status" @if($status =='draft') checked @endif value="draft" type="radio" id="draft"> <label for="draft"> Draft</label>
    </div>
    @error('status')
    <div class="pl-1 text-danger">{{ $message }}</div>
    @enderror
</div>