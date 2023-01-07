@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="alert alert-secondary mx-4"
        role="alert">
        <span class="text-white">


        </span>
    </div>
<div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="products.create    ">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Alert</li>
                                </ol>
                            </nav>
                        </div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">All Users</h5>
                        </div>
                    </div>
                    <a href="{{ route('products.create') }}"
                        class="btn bg-gradient-primary btn-sm mb-0"
                        type="button">+&nbsp; New User</a>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            @foreach ($products as $product)
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID
                                    </th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Photo
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Name
                                    </th>

                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Email
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Phone
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Creation Date
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tr>
                                <td class="text-xs font-weight-bold mb-0">{{ $product->id }}</td>

                                <td class="text-xs font-weight-bold mb-0"><img src="{{$product->getFirstMediaUrl('avatar', 'thumb')}}" / width="120px" class="avatar avatar-sm me-3"></td>
                                <td class="text-xs font-weight-bold mb-0">{{ $product->name }}</td>
                                <td class="text-xs font-weight-bold mb-0">{{ $product->email }}</td>
                                <td class="text-xs font-weight-bold mb-0">{{ $product->phone }}</td>
                                <td class="text-secondary text-xs font-weight-bold">{{ $product->created_at }}</td>
                                <td>
                                    <form action="{{ route('products.destroy',$product->id) }}"
                                        method="POST">
                                <td class="text-center">
                                    <a href="{{ route('products.edit',$product->id) }}"
                                        class="mx-3"
                                        data-bs-toggle="tooltip"
                                        data-bs-original-title="Edit user">
                                        <i class="fas fa-user-edit text-secondary"></i>
                                    </a>
                                    <button type="submit"
                                        class="cursor-pointer fas fa-trash text-secondary"></button>
                                </td>
                                {{-- <a class="btn btn-info"
                                    href="{{ route('products.show',$product->id) }}">Show</a> --}}
                                @csrf
                                @method('DELETE')
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
