<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex m-2 p-2">
            <a href="{{ url('user-management') }}"
                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Users Index</a>
        </div>
        <div class="m-2 p-2 bg-slate-100 rounded">
            <div class="card-body">
                <form role="form text-left"
                    method="POST"
                    action="/user-management">
                    @csrf
                    <div class="mb-3">
                        <input type="text"
                            class="form-control"
                            placeholder="Name"
                            name="name"
                            id="name"
                            aria-label="Name"
                            aria-describedby="name"
                            value="{{ old('name') }}">
                        @error('name')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="email"
                            class="form-control"
                            placeholder="Email"
                            name="email"
                            id="email"
                            aria-label="Email"
                            aria-describedby="email-addon"
                            value="{{ old('email') }}">
                        @error('email')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                   <div class="form-group row">
                    <label for="password"
                        class="col-md-4 col-form-label text-md-right">Password</label>
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
                </div>

                <div class="form-group row">
                    <label for="password"
                        class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                    <div class="col-md-6">
                        <input id="password"
                            type="password"
                            class="form-control @error('password') is-invalid @enderror"
                            name="password_confirmation"
                            required
                            autocomplete="current-password">
                    </div>
                </div>
                <div class="mb-3">
                    <input type="number"
                        class="form-control"
                        placeholder="phone"
                        name="phone"
                        id="phone"
                        aria-label="phone"
                        aria-describedby="phone"
                        value="{{ old('phone') }}">
                    @error('phone')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="sm:col-span-6">
                    <label for="image"
                        class="block text-sm font-medium text-gray-700"> Image </label>
                    <div class="mt-1">
                        <input type="file"
                            id="image"
                            name="image"
                            class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                    @error('image')
                    <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
                </div>
                    <div class="text-center">
                        <button type="submit"
                            class="btn bg-gradient-dark w-100 my-4 mb-2">Sign up</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
