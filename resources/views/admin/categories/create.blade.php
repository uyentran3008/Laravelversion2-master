@extends('admin.layouts.app')
@section('title', 'Create Category')
@section('content')
<div class="card">
    <h1>Tạo danh mục</h1>
    <div>
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="input-group input-group-static mb-4">
                <label>Name</label>
                <input type="text" name="name" class="form-control">

                {{-- @error('name')
                    <span class="text-danger">{{ message }}</span>
                @enderror --}}
            </div>

            <div class="input-group input-group-static mb-4">
                <label name="group" class="ms-0">Parent Category</label>
                <select name="parent_id" class="form-control">
                    <option value=""> Select Parent Category </option>
                    @foreach ($parentCategories as $item)
                        <option value="{{ $item->id }}" {{ old('parent_id') == $item->id ? 'selected' : '' }}>
                            {{ $item->name }}</option>
                    @endforeach
                </select>
            </div>

            <button typpe="submit" class="btn btn-submit btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection