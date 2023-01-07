{{-- @extends('layouts.user_type.auth')
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
<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <div class="col-md-6 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add New Category</h4>
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
                                    <label>Order:</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="number"
                                                id="order"
                                                name="order"
                                                placeholder="Order"
                                                class="form-control" />
                                            <div class="form-control-icon">
                                                <i class="bi bi-phone"></i>
                                            </div>
                                        </div>
                                    </div>
                                    @error('order')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
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
                                            name="image"
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
                                        href="{{ route('categories.index') }}"> Back</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</form>

@endsection --}}



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
<form action="{{ route('categories.store') }}"
    method="POST"
    enctype="multipart/form-data">
    @csrf
    <div class="col-md-6 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add New Category</h4>
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
                                    <label>Order:</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="number"
                                                id="order"
                                                name="order"
                                                placeholder="Order"
                                                class="form-control" />
                                            <div class="form-control-icon">
                                                <i class="bi bi-phone"></i>
                                            </div>
                                        </div>
                                    </div>
                                    @error('order')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
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
                                        href="{{ route('categories.index') }}"> Back</a>
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
