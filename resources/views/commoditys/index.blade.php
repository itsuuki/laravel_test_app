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
                <div>
                    <img src="{asset(/storage/dog-1728494_1280.png)}}" width="100px" height="100px">
                </div>
            </div>
        @endforeach
    </div>