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
<form action="{{ route('lawyers.store') }}"
    method="POST"
    enctype="multipart/form-data">
    @csrf
    <section class="list-group-navigation">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add New Lawyer</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-4">
                                    <div class="list-group"
                                        role="tablist">
                                        <a class="list-group-item list-group-item-action active"
                                            id="list-home-list"
                                            data-bs-toggle="list"
                                            href="#list-home"
                                            role="tab">Home</a>
                                        <a class="list-group-item list-group-item-action"
                                            id="list-profile-list"
                                            data-bs-toggle="list"
                                            href="#list-profile"
                                            role="tab">Profile</a>
                                        <a class="list-group-item list-group-item-action"
                                            id="list-messages-list"
                                            data-bs-toggle="list"
                                            href="#list-messages"
                                            role="tab">Services</a>
                                        <a class="list-group-item list-group-item-action"
                                            id="list-settings-list"
                                            data-bs-toggle="list"
                                            href="#list-settings"
                                            role="tab">Settings</a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 mt-1">
                                    <div class="tab-content text-justify"
                                        id="nav-tabContent">
                                        <div class="tab-pane show active"
                                            id="list-home"
                                            role="tabpanel"
                                            aria-labelledby="list-home-list">
                                            <div class="col-md-4">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">

                                                        <input type="text"
                                                            id="first-name-icon"
                                                            name="name"
                                                            placeholder="Name"
                                                            class="form-control" />
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-person"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('name')
                                                <div class="text-sm text-red-400">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group has-icon-left">
                                                <strong>Email:</strong>
                                                <div class="mt-1">
                                                    <input type="email"
                                                        id="email"
                                                        placeholder="Email"
                                                        name="email"
                                                        class="form-control" />
                                                </div>
                                                @error('email')
                                                <div class="text-sm text-red-400">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <strong>phone:</strong>
                                                <div class="mt-1">
                                                    <input type="tel"
                                                        id="phone"
                                                        name="phone"
                                                        class="form-control" />
                                                </div>
                                                @error('phone')
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
                                            <strong>Password:</strong>
                                            <div class="col-md-6">
                                                <input id="password"
                                                    type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password"
                                                    required
                                                    autocomplete="current-password">

                                                @error('password')
                                                <span class="invalid-feedback"
                                                    role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <strong>Confirm Password:</strong>

                                            <div class="col-md-6">
                                                <input id="password"
                                                    type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password_confirmation"
                                                    required
                                                    autocomplete="current-password">
                                            </div>
                                            <label for="select2Multiple">Multiple Tags</label>
                                            <select class="select2-multiple form-control"
                                                name="tags[]"
                                                multiple="multiple"
                                                id="select2Multiple">
                                                <option value="tag1">Administrative</option>
                                                <option value="tag2">Labor</option>
                                                <option value="tag3">Family</option>
                                                <option value="tag4">Criminal</option>
                                                <option value="tag5">Personal Conditions</option>
                                                <option value="tag6">Comercial</option>
                                            </select>
                                        </div>


                                        <div class="tab-pane"
                                            id="list-profile"
                                            role="tabpanel"
                                            aria-labelledby="list-profile-list">

                                            <strong>Job Title:</strong>
                                            <div class="mt-1">
                                                <input type="text"
                                                    id="job_title"
                                                    name="job_title"
                                                    placeholder="Job Title"
                                                    class="form-control" />
                                            </div>
                                            @error('job_title')
                                            <div class="text-sm text-red-400">{{ $message }}</div>
                                            @enderror

                                            <strong>Description:</strong>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <textarea class="form-control"
                                                            name="description">{{old('description')}}</textarea>
                                                        @error('description')
                                                        <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <strong>City:</strong>
                                            <div class="mt-1">
                                                <input type="text"
                                                    id="city"
                                                    name="city"
                                                    class="form-control" />
                                            </div>
                                            @error('city')
                                            <div class="text-sm text-red-400">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <div class="tab-pane"
                                            id="list-messages"
                                            role="tabpanel"
                                            aria-labelledby="list-messages-list">
                                            <label for="voicecall"
                                                class="block text-sm font-medium text-gray-700"> voice call </label>
                                            <div class="mt-1">
                                                <input type="number"
                                                    min="0.00"
                                                    max="10000.00"
                                                    step="0.01"
                                                    id="voice_call"
                                                    name="voice_call"
                                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                            </div>
                                            @error('voice_call')
                                            <div class="text-sm text-red-400">{{ $message }}</div>
                                            @enderror

                                            <label for="videocall"
                                                class="block text-sm font-medium text-gray-700"> Video call </label>
                                            <div class="mt-1">
                                                <input type="number"
                                                    min="0.00"
                                                    max="10000.00"
                                                    step="0.01"
                                                    id="video_call"
                                                    name="video_call"
                                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                            </div>
                                            @error('video_call')
                                            <div class="text-sm text-red-400">{{ $message }}</div>
                                            @enderror

                                            <label for="message"
                                                class="block text-sm font-medium text-gray-700"> message </label>
                                            <div class="mt-1">
                                                <input type="number"
                                                    min="0.00"
                                                    max="10000.00"
                                                    step="0.01"
                                                    id="message"
                                                    name="message"
                                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                            </div>
                                            @error('message')
                                            <div class="text-sm text-red-400">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="tab-pane"
                                            id="list-settings"
                                            role="tabpanel"
                                            aria-labelledby="list-settings-list">

                                            <strong>Job Title:</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit"
                                class="btn btn-primary me-1 mb-1">Submit</button>
                            <a class="btn btn-light-secondary me-1 mb-1"
                                href="{{ route('lawyers.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
@endsection
