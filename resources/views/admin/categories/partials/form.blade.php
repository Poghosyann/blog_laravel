<label for="status">Status</label>
<select name="published" class="form-control">
    @if(isset($category->id))
        <option value="0" @if($category->published == 0) selected = "" @endif> don`t published </option>
        <option value="1" @if($category->published == 1) selected = "" @endif> published </option>
    @else
        <option value="0"> don`t published </option>
        <option value="1"> published </option>
    @endif
</select>

        <label for="">Name</label>
        <input type="text" class="form-control" name="title" placeholder="category title" value="{{$category->title or ""}}" required>

        <label for="">Slug</label>
        <input class="form-control" type="text" name="slug" placeholder="auto generate" value="{{$category->slug or ""}}" readonly="">

        <label for="">Main category</label>
        <select class="form-control" name="parent_id">
            <option value="0">-- out main category --</option>
            @include('admin.categories.partials.categories', ['categories' => $categories])
        </select>

        <hr />

        <input class="btn btn-primary" type="submit" value="Save">
