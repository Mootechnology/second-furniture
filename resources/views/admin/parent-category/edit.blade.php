<x-layout.master>
    <x-slot name="header">
        <x-layout.header />
    </x-slot>
    <x-slot name="left_side_nav">
        <x-layout.left_side_nav />
    </x-slot>
    <x-slot name="content">
        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <form action="{{ route('parent.category.update', $parentCategory->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="p-5">
                    @if (Session::has('error'))
                    <div class="alert alert-danger">{{ Session::get('error') }}</div>
                    @endif
                    <div class="card mb-xl-8 mb-5" style="user-select: auto;">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5" style="user-select: auto;">
                            <h3 class="card-title align-items-start flex-column" style="user-select: auto;">
                                <span class="card-label fw-bold fs-3 mb-1" style="user-select: auto;">Edit Parent
                                    Category</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-3" style="user-select: auto;">
                            <!--begin::Table container-->
                            <div class="modal-body">
                                <!--begin::Label-->
                                <!--end::Label-->
                                <div class="row">
                                            <x-cento-dash-input type="text" value="{{$parentCategory['name']}}" name="name" label="Name" placeholder="Name"
                                                :message="$errors->first('name')" />
                                        </div>
                            </div>
                            <div class="row">
                                        <x-textarea type='text' value="{{$parentCategory['description']}}"  name="description" label="Description" class="col-12"
                                            placeholder="Enter Description" :message="$errors->first('description')" />
                                    </div>
                                    <div class="col-6">
                                        <x-textarea type='text' name="description" value="{{$parentCategory['description']}}"  label="Description" class="col-12"
                                            placeholder="{{$parentCategory['description']}}" :message="$errors->first('description')" />
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        @error('description')
                                        <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                            <div class="modal-footer mt-5 gap-2">
                                <button type="submit" class="btn btn-success">
                                    Edit Parent Category
                                </button>
                                <a class="btn btn-light-danger" href={{ route('parent.category.index') }}> Cancel </a>
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Body-->
                    </div>
                </div>
            </form>
        </div>
        <!--end:::Main-->
    </x-slot>
    <x-slot name="footer">
        <x-layout.footer />
    </x-slot>
</x-layout.master>
