@extends('layout.new-master')
@section('title','ساخت دسته بندی جدید')


@section('content')
    <form  method="post" action="{{route('categories.store')}}" >
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
            <div class="form-group">
                <label for="exampleInputEmail1">عنوان دسته بندی</label>
                <input type="text" name="title" value="{{old('title')}}" class="form-control" id="exampleInputEmail1" placeholder="عنوان دسته بندی را وارد کنید">
            </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">ثبت</button>
        </div>
    </form>
@endsection
