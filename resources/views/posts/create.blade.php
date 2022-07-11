@extends('layout.new-master')
@section('title','ایجاد پست جدید')


@section('content')
    <form  method="post" action="{{route('posts.store')}}" >
    @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card-header">
            <h3 class="card-title">ثبت پست جدید</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="" >
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">عنوان پست</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="عنوان دسته بندی را وارد کنید">
                </div>


                <div class="form-group">
                    <label>محتوا</label>
                    <textarea name="post_content" class="form-control" rows="3" placeholder=" محتوا را وارد نمایید"></textarea>
                </div>

                <div class="form-group">
                    <label>نام دسته بندی</label>
                    <select name="category_id" class="form-control">
                        <option>انتخاب کنید:</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label class="control-label" for="inputError"> وضعیت انتشار</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" value="draft" checked>
                        <label class="form-check-label">پیش نویس</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" value="published">
                        <label class="form-check-label">منتشر شده</label>
                    </div>
                </div>
                <div class="form-group">
                    <p>تگ ها:</p>
                    @foreach($tags as $tag)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="tag[]" value="{{$tag->id}}" >
                            <label class="form-check-label">{{$tag->title}}</label>
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
