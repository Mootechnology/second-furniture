<x-layout.master>
    <x-slot name="header">
        @section('css')

        @endsection
        <x-layout.header />
    </x-slot>
    <x-slot name="left_side_nav">
        <x-layout.left_side_nav />
    </x-slot>
    <x-slot name="content">
        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="p-5">
                    @if (Session::has('error'))
                    <div class="alert alert-danger">{{ Session::get('error') }}</div>
                    @endif
                    @if (Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @endif
                    <div class="card mb-xl-8 mb-5" style="user-select: auto;">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5" style="user-select: auto;">
                            <h3 class="card-title align-items-start flex-column" style="user-select: auto;">
                                <span class="card-label fw-bold fs-3 mb-1" style="user-select: auto;">Add New
                                    Product</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-3" style="user-select: auto;">
                            <!--begin::Table container-->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-6">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6"> Single Main Image</label>
                                        @include('admin.media.dropdown')
                                    </div>
                                    <div class="col-6">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">Other Image</label>
                                        @include('admin.media.multi_dropzone')

                                    </div>

                                    <div class="col-12">
                                        <x-cento-dash-input type="text" name="name" label="Name" placeholder="Name" :message="$errors->first('name')" />
                                    </div>
                                    <div class="col-6">
                                        <x-cento-dash-input type="number" name="price" label="price" placeholder="price" :message="$errors->first('price')" required />
                                    </div>
                                    <div class="col-6">
                                        <x-cento-dash-input type="number" name="discounted_price" label="Discounted Price" placeholder="Discounted Price" :message="$errors->first('discounted_price')" />
                                    </div>


                                    <div class="col-12">
                                        <label class="col-lg-12 col-form-label required fw-bold fs-6" for="Description"> Description</label>
                                        <x-textarea type='text' name="description" class="col-12 " value=" " placeholder="Enter Description" :message="$errors->first('description')" />
                                    </div>
                                    <br>


                                    <div class="col-12">
                                        <label class="col-lg-12 col-form-label required fw-bold fs-6" for="Key Feature">Key Feature</label>
                                        <x-textarea type='text' name="features" class="col-12 " value=" " placeholder="Enter Features" :message="$errors->first('features')" />
                                    </div>
                                    <table id="sizes" class="table table-striped">
                                        <tr class="p-3">
                                            <th class="p-2 text-bold">Size</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="col-6">
                                                    <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" name="size[100][name]" id="" placeholder="Size">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-6">
                                                    <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" name="size[100][price] " id="" placeholder="Price">
                                                </div>
                                            </td>
                                            <td style="width:200px;"><button class="btn btn-primary AddSize" type="button">Add</button></td>
                                        </tr>
                                    </table>

                                    <div class="col-6">
                                        <label class="col-lg-12 col-form-label required fw-bold fs-6"> Select Parent Category
                                        </label>
                                        <select name="parent_category_id" class="form-select form-select-solid is-valid" data-allow-clear="true" data-control="select2" id="parent">
                                            <option value="" selected disabled>Select Category</option>
                                            @foreach ($parentCategories as $item)
                                            <option value="{{ $item['id'] }}"> {{ $item['name'] }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    <div class="col-6">
                                        <label class="col-lg-12 col-form-label required fw-bold fs-6"> Select Child Category
                                        </label>
                                        <x-cento-dash-input type="select" id="child-dropdown" name="child_category_id" label="" :options="$childCategories" :message="$errors->first('child_category_id')" />
                                    </div>

                                    <div class="col-6">
                                        <x-cento-dash-input type="text" nullable name="sku" label="SKU (Unique Product No.)" placeholder="Produfct No. should be unique" :message="$errors->first('sku')" />
                                    </div>
                                    <div class="col-6">
                                        <x-cento-dash-input type="number" name="product_length" label="Product Length" placeholder="product_length" :message="$errors->first('product_length')" />
                                    </div>
                                    <div class="col-6">
                                        <x-cento-dash-input type="number" name="product_weight" label="Product Weight" placeholder="product_weight" :message="$errors->first('product_weight')" />
                                    </div>
                                    <div class="col-6">
                                        <x-cento-dash-input type="number" name="product_height" label="Product Height" placeholder="product_height" :message="$errors->first('product_height')" />
                                    </div>
                                    <div class="col-6">
                                        <x-cento-dash-input type="number" name="product_width" label="Product Width" placeholder="product_width" :message="$errors->first('product_width')" />
                                    </div>
                                    <!--begin::Col-->
                                    <div class="mb-12">
                                        <label for="\color" class="form-label">Colors</label>
                                        <select class="form-select form-select-solid is-valid" name="color[]" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" multiple>
                                            @foreach($color as $color)
                                            <option></option>
                                            <option value="{{$color->id}}">{{$color->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('color')
                                    <div class="error text-danger">{{ $message }}</div>
                                    @enderror
                                    <!--end::Col-->

                                    <!-- <div class="col-3">


                                        <select id="size" class="form-control form-control-sm"  name="size[]" multiple >


                                        </select>

                                        </div> -->
                                    <div class="col-sm-3 my-4">
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" name="availability" />
                                            <span class="form-check-label fw-semibold text-muted">Availability</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer mt-5 gap-2">
                                <x-cento-dash-input type="submit" label="Add Product" />
                                <a class="btn btn-danger" href={{ route('product.index') }}> Cancel </a>
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--begin::Body-->
                    </div>
                </div>
            </form>
        </div>
        <!--end:::Main-->

        @section('js')
        <script>
            var i = 100;
            $('body').delegate('.AddSize', 'click', function() {

                var html = '<tr id="DeleteSize' + i + '">\n\
                                        <td > <div class="col-6">\n\
                                        <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" name="size[' + i + '][name]" id="' + i + '" value="" placeholder="Size"> </div>\n\
                                         </td>\n\
                                        <td><div class="col-6">\n\
                                         <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" name="size[' + i + '][price]" id="" placeholder="Price"> </div></td>\n\
                                        <td><button id="' + i + '" class="btn btn-danger DeleteSize"   type="button">Delete</button></td>\n\
                                      </tr>';
                i++;
                $('#sizes').append(html);


            });
            $('body').delegate('.DeleteSize', 'click', function() {
                var id = $(this).attr('id');
                $('#DeleteSize' + id).remove();
            });



            $(document).ready(function() {
                $('#parent').on('change', function() {
                    var parentid = $(this).val();
                    if (parentid) {
                        $.ajax({
                            url: '/getsize/' + parentid,
                            type: "GET",
                            data: {
                                "_token": "{{ csrf_token() }}"
                            },
                            dataType: "json",
                            success: function(data) {
                                if (data) {
                                    console.log(size);
                                    $('#size').empty();
                                    $('#size').append('<option hidden>Choose Size</option>');
                                    $.each(data, function(key, size) {
                                        $('select[name="size[]"]').append('<option value="' + size.id + '">' + size.dimension + '</option>');
                                        $('#size').multiselect('rebuild');

                                    });
                                } else {
                                    $('#size').empty();
                                }
                            }
                        });
                    } else {
                        $('#size').empty();
                    }
                });
            });
        </script>

        <script>
            $(function() {
                //
                $('.col-12 textarea').summernote({
                    height: '200px',
                    tabsize: 2

                });


            });
        </script>


        <!-- DropZone Js -->


        @endsection
    </x-slot>
    <x-slot name="footer">
        <x-layout.footer />
    </x-slot>
</x-layout.master>
