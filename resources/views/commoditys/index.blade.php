@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <div class="mb-4">
                        <a href="{{ route('commoditys.create') }}" class="btn btn-primary">
                            投稿を新規作成する
                        </a>
                    </div>
                    <div class="container mt-4">
                        @foreach ($commoditys as $post)
                            <div class="card mb-4">
                                <div class="card-header">
                                    {{ $post->name }}
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        {{ $post->price }}
                                    </p>
                                </div>
                                <div class="card-bodys">
                                    <!-- <img src="{{ asset($post -> image) }}"> -->
                                    <img src="{{asset('storage/'. $post->image)}}" width="100px" height="100px">
                                </div>
                            </div>
                        @endforeach
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
