@extends('layout.new-master')


@section('content')
    <table class="table table-bordered">
        <thead>
        <tr>
            <th style="width: 10px">ردیف</th>
            <th>عنوان</th>
            <th>دسته بندی</th>
            <th>نویسنده</th>
            <th>عملیات</th>
        </tr>
        </thead>
        <tbody>

        @foreach($posts as $post)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->category->title}}</td>
            <td></td>

            <td>
                <a href="{{route('posts.edit',['post'=>$post->id])}}" class="btn btn-sm btn-primary">ویرایش</a>
                <a href="{{route('posts.destroy',['post'=>$post->id])}}" onclick="return confirm('آیا مطمئن هستید؟')" class="btn btn-sm btn-danger">حذف</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

@endsection
