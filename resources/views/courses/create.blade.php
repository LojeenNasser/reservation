@extends('layouts.user_type.auth')
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('courses.store') }}"
    method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-md-6 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add New Course</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Title</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">

                                            <input type="text"
                                                id="first-name-icon"
                                                name="title"
                                                placeholder="Title"
                                                class="form-control" />
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                        </div>
                                    </div>
                                    @error('title')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label>Description</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <textarea class="form-control"
                                                name="description">{{old('description')}}</textarea>
                                            @error('description')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                            <div class="form-control-icon">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Period (Days Number)/ Hrs:</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="number"
                                                id="day"
                                                name="day"
                                                class="form-control" />
                                            <div class="form-control-icon">
                                                <i class="bi bi-phone"></i>
                                            </div>
                                        </div>
                                    </div>
                                    @error('day')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label>Price:</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                                <input type="number"
                                                    min="0.00"
                                                    max="10000.00"
                                                    step="0.01"
                                                    id="price"
                                                    name="price"
                                                    class="form-control" />
                                            <div class="form-control-icon">
                                                <i class="bi bi-phone"></i>
                                            </div>
                                        </div>
                                    </div>
                                    @error('price')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label>Instructors</label>
                                </div>
                               <div class="col-md-6 mb-4">
                                    <fieldset class="form-group">
                                        <select class="form-select"
                                            id="basicSelect">
                                            @foreach ($lawyers as $lawyer)
                                            <option value="{{ $lawyer->id }}">{{ $lawyer->name }}</option>
                                            @endforeach
                                        </select>
                                    </fieldset>
                                </div>

                                <div class="col-md-4">
                                    <label>Categories</label>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <fieldset class="form-group">
                                        <select class="form-select"
                                            id="basicSelect">
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                    </fieldset>
                                </div>

                                <div class="col-md-4">
                                    <label>Select Video:</label>
                                </div>
                                <div class="col-md-6 form-group">
                                    <div class="mb-3">
                                        <input type="file"
                                            name="avatar"
                                            class="form-control"
                                            id="formFile">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label>Status:</label>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="mt-1">
                                        <select name="status"
                                            class="form-select">
                                            <option disabled
                                                selected>select option </option>
                                            <option value="1">activate</option>
                                            <option value="0">inactive</option>
                                        </select>
                                    </div>
                                    @error('status')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label>Image:</label>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <input type="file"
                                            id="image"
                                            name="avatar"
                                            accept="image/*"
                                            class="form-control" />
                                    </div>
                                    @error('image')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit"
                                        class="btn btn-primary me-1 mb-1">Submit</button>
                                        <a class="btn btn-light-secondary me-1 mb-1"
                                            href="{{ route('courses.index') }}"> Back</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

