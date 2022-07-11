@extends('layout.new-master')
@section('title','ویرایش دسته بندی جدید')


@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<form role="form" method="post" action="{{route('posts.update',['post'=>$post->id])}}" >
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">عنوان پست</label>
            <input type="text" name="title" value="{{old('title',$post->title)}}" class="form-control" id="exampleInputEmail1">
        </div>


        <div class="form-group">
            <label>محتوا</label>
            <textarea name="post_content"  class="form-control" rows="3" >{{old('post_content',$post->content)}}</textarea>
        </div>

        <div class="form-group">
            <label>نام دسته بندی</label>
            <select name="category_id" class="form-control">

                @foreach($categories as $category)
                <option value="{{$category->id}}" @if($post->category->id===$category->id) selected @endif>{{$category->title}}</option>
                @endforeach

            </select>
        </div>

        <div class="form-group">
            <label class="control-label" for="inputError"> وضعیت انتشار</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" value="draft" @if($post->status=='draft') checked @endif>

                <label class="form-check-label">پیش نویس</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" value="published" @if($post->status=='published') checked @endif>
                <label class="form-check-label">منتشر شده</label>
            </div>
            <p>تگ ها:</p>

            @foreach($tags as $tag)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="tag[]" value="{{$tag->id}}" @if() checked @endif>
                    <label class="form-check-label">{{old('title',$tag->title)}}</label>
                </div>
            @endforeach

        </div>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">ثبت</button>
    </div>
</form>
@endsection
