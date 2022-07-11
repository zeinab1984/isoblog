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
    <form  method="post" action="{{route('categories.update',['category'=>$category->id])}}" >
    @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">عنوان دسته بندی</label>
                <input type="text" name="title" value="{{old('title',$category->title)}}" class="form-control" id="exampleInputEmail1" placeholder="عنوان دسته بندی را وارد کنید">
            </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">ثبت</button>
        </div>
    </form>
@endsection
