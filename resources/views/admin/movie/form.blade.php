@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <a href="{{route('movie.index')}}" class="btn btn-primary">Liệt Kê Phim</a>
                <div class="card-header">{{ __('Quản lý phim') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (!isset($movie))
                        <form action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
                    @else
                        <form action="{{ route('movie.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT') <!-- Thêm phương thức PUT -->
                    @endif
                            @csrf
                            <div class="form-group">
                                <label for="title" class="form-label">Tên</label>
                                <input type="text" name="title" value="{{ isset($movie) ? $movie->title : '' }}"
                                    class="form-control" placeholder="Nhập dữ liệu" id="slug" ,
                                    onkeyup="ChangeToSlug()">
                            </div>
                            <div class="form-group">
                                <label for="Tên tiếng anh" class="form-label">Tên tiếng anh</label>
                                <input type="text" name="name_eng" value="{{ isset($movie) ? $movie->name_eng : '' }}"
                                    class="form-control" placeholder="Nhập dữ liệu">
                            </div>
                            <div class="form-group">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" name="slug" value="{{ isset($movie) ? $movie->slug : '' }}"
                                    class="form-control" placeholder="Nhập dữ liệu" id="convert_slug">
                            </div>
                            <div class="form-group">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" class="form-control" placeholder="Nhập dữ liệu"
                                    id="description"
                                    style="resize: none;">{{ isset($movie) ? $movie->description : '' }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="Active" class="form-label">Active</label>
                                <select name="status" class="form-control" style="width: 100%;">
                                    <option value="1" {{ old('status', isset($movie) ? $movie->status : null) == '1' ? 'selected' : '' }}>Hiển thị</option>
                                    <option value="0" {{ old('status', isset($movie) ? $movie->status : null) == '0' ? 'selected' : '' }}>Không hiển thị</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select name="category_id" class="form-control" id="category">
                                    <option value="">--Chọn danh mục--</option>
                                    @foreach ($category as $id => $title)
                                        <option value="{{ $id }}" {{ isset($movie) && $movie->category_id == $id ? 'selected' : '' }}>
                                            {{ $title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="country">Country</label>
                                <select name="country_id" class="form-control" id="country">
                                    <option value="">--Chọn quốc gia--</option>
                                    @foreach ($country as $id => $title)
                                        <option value="{{ $id }}" {{ isset($movie) && $movie->country_id == $id ? 'selected' : '' }}>
                                            {{ $title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="genre">Genre</label>
                                <select name="genre_id" class="form-control" id="genre">
                                    <option value="">--Chọn thể loại--</option>
                                    @foreach ($genre as $id => $title)
                                        <option value="{{ $id }}" {{ isset($movie) && $movie->genre_id == $id ? 'selected' : '' }}>
                                            {{ $title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Hot">Hot</label>
                                <select name="phim_hot" class="form-control" id="phim_hot">
                                    <option value="">--Chọn thể loại--</option>
                                    <option value="1" {{ old('status', isset($movie) ? $movie->phim_hot : null) == '1' ? 'selected' : '' }}>Có</option>
                                    <option value="0" {{ old('status', isset($movie) ? $movie->phim_hot : null) == '0' ? 'selected' : '' }}>Không</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="Image">Image</label>
                                <input type="file" name="image" class="form-control-file" id="image">
                                @if(isset($movie))
                                    <<img width="20%" src="{{ url('uploads/movie/' . $movie->image) }}">                            
                                @endif
                            </div>
                            @if (!isset($movie))
                                <button type="submit" class="btn btn-success">Thêm dữ liệu</button>
                            @else
                                <button type="submit" class="btn btn-success">Cập nhật</button>
                            @endif
                        </form>

                </div>
            </div>
           
        </div>
    </div>
</div>
@endsection