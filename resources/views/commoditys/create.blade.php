@section('content')
    <div class="container mt-4">
        <div class="border p-4">
            <h1 class="h5 mb-4">
                投稿の新規作成
            </h1>

            <form method="POST" action="{{route('commoditys.store')}}" enctype="multipart/form-data">
                <!-- @csrf -->
                {{ csrf_field() }}

                <fieldset class="mb-4">
                    <div class="form-group">
                        <label for="name">
                            タイトル
                        </label>
                        <input
                            id="name"
                            name="name"
                            class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                            value="{{ old('name') }}"
                            type="text"
                        >
                        @if ($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="price">
                            本文
                        </label>

                        <textarea
                            id="price"
                            name="price"
                            class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}"
                            rows="4"
                        >{{ old('price') }}</textarea>
                        @if ($errors->has('price'))
                            <div class="invalid-feedback">
                                {{ $errors->first('price') }}
                            </div>
                        @endif
                    </div>
                    <input type="file" name="image">

                    <div class="mt-5">
                        <a class="btn btn-secondary" href="/index">
                            キャンセル
                        </a>

                        <button type="submit" class="btn btn-primary">
                            投稿する
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>