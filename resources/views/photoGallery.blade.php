@extends('layout')
@section('content')
    <div class="container-fluid">
        <div class="px-lg-5">
            <!-- Gallery Header -->
            <div class="row py-5">
                <div class="col-lg-12 mx-auto">
                    <div class="text-white p-5 shadow-sm rounded banner">
                        <h1 class="display-4">Gallery</h1>
                    </div>
                </div>
            </div>
            <!-- End -->

            <div class="py-3 text-right">
                <button href="#" class="btn btn-dark px-5 py-3 text-uppercase" type="button" data-toggle="modal"
                    data-target="#newPhoto"> Add New</button>
            </div>
            <div class="row">
                @foreach ($files as $images)
                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow-sm">
                            <img src="{{ Storage::disk('google')->url($images) }}" alt="" class="img-fluid card-img-top">
                            <div class="p-4">
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-2">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i></p>
                                    <button class="btn btn-danger btn-sm px-3 rounded-pill font-weight-normal deleteBtn"
                                        type="button" id="deleteBtn" data-toggle="modal"
                                        data-target="#photoDeleteModal{{ $images }}">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->
                    <!-- Photo Delete Modal  Include-->
                    @include('photoDeleteModal')
                @endforeach
            </div>
            <!--Photo Create Modal Include-->
            @include('photoCreateModal')
        </div>
    </div>
    </div>
@endsection
