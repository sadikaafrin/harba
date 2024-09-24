@extends('backend.app')
@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h3 class="mb-0">Why Choose Our Properties</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('whychoose_our_property.update') }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="why-choose-title">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        id="why-choose-title" name="title"
                                        value="{{ old('title', $data->title ?? '') }}" />
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h3 class="mb-0">Support Section</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('support_section.update') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="support-title">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        id="support-title" name="title"
                                        value="{{ old('title', $supportData->title ?? '') }}" />
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="support-subtitle">Description</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('sub_title') is-invalid @enderror"
                                        id="support-subtitle" name="sub_title"
                                        value="{{ old('sub_title', $supportData->sub_title ?? '') }}" />
                                    @error('sub_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h3 class="mb-0">Admin Section</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin_section.update') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="support-title">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        id="support-title" name="title"
                                        value="{{ old('title', $adminSection->title ?? '') }}" />
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="support-subtitle">Description</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('sub_title') is-invalid @enderror"
                                        id="support-subtitle" name="sub_title"
                                        value="{{ old('sub_title', $adminSection->sub_title ?? '') }}" />
                                    @error('sub_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h3 class="mb-0">Mobile Friendly</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('mobile_friendly.update') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="support-title">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        id="support-title" name="title"
                                        value="{{ old('title', $mobileFriendly->title ?? '') }}" />
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="support-subtitle">Description</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('sub_title') is-invalid @enderror"
                                        id="support-subtitle" name="sub_title"
                                        value="{{ old('sub_title', $mobileFriendly->sub_title ?? '') }}" />
                                    @error('sub_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h3 class="mb-0">Website Overview</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('message.update') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="support-title">Description</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        id="support-title" name="title"
                                        value="{{ old('title', $message->title ?? '') }}" />
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="support-title">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="support-title" name="name"
                                        value="{{ old('name', $message->name ?? '') }}" />
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="designation">Description</label>
                                <div class="col-sm-10">
                                    <input type="text"
                                        class="form-control @error('expert_designation') is-invalid @enderror"
                                        id="designation" name="expert_designation"
                                        value="{{ old('expert_designation', $message->expert_designation ?? '') }}" />
                                    @error('expert_designation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h3 class="mb-0">Website Overview</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('message.update') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="support-title">Description</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        id="support-title" name="title"
                                        value="{{ old('title', $message->title ?? '') }}" />
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="support-title">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="support-title" name="name"
                                        value="{{ old('name', $message->name ?? '') }}" />
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="designation">Description</label>
                                <div class="col-sm-10">
                                    <input type="text"
                                        class="form-control @error('expert_designation') is-invalid @enderror"
                                        id="designation" name="expert_designation"
                                        value="{{ old('expert_designation', $message->expert_designation ?? '') }}" />
                                    @error('expert_designation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-phone">Image</label>
                                <div class="col-sm-10">
                                    <input type="file" class="dropify @error('image') is-invalid @enderror"
                                        name="image" id="image"
                                        data-default-file="{{ isset($message->image) && !empty($message->image) ? asset($message->image) : '' }}" />
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>

    <!-- / Content -->
@endsection
