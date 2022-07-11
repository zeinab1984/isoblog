@extends('layout.master')

@section('page-title','صفحه اصلی')


@section('content')
<main class="rtl mt-3">
    <div class="d-flex justify-content-center flex-wrap">

        @foreach($posts as $post)
            @include('layout.post-card',['my_post'=> $post])
        @endforeach
    </div>
</main>
@endsection
