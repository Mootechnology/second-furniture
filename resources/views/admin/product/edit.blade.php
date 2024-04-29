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
            <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="p-5">
                    @if (Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                    @endif
                    <div class="card mb-xl-8 mb-5" style="user-select: auto;">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5" style="user-select: auto;">
                            <h3 class="card-title align-items-start flex-column" style="user-select: auto;">
                                <span class="card-label fw-bold fs-3 mb-1" style="user-select: auto;">Edit Existing
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
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">Main Image</label>
                                        @include('admin.media.dropdown', [
                                            'file' => $product,
                                            'collection_name' => 'product.image',
                                        ])
                                    </div>
                                    <div class="col-6">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">Other
                                            Images</label>
                                        @include('admin.media.multi-dropzone', [
                                            'file' => $product,
                                            'collection_name' => 'product.other.image',
                                        ])
                                    </div>
                                    <div class="col-12">
                                        <x-cento-dash-input type="text" name="name" label="Name"
                                            placeholder="Name" value="{{ $product['name'] }}" :message="$errors->first('name')" />
                                    </div>
                                    <div class="col-6">
                                        <x-cento-dash-input type="number" name="price" label="price"
                                            placeholder="price" value="{{ $product['price'] }}" :message="$errors->first('price')" />
                                    </div>
                                    <div class="col-6">
                                        <x-cento-dash-input type="number" value="{{ $product['discounted_price'] }}"
                                            name="discounted_price" label="Discounted Price"
                                            placeholder="Discounted Price" :message="$errors->first('discounted_price')" />
                                    </div>
                                    <div class="col-6">
                                        <x-textarea type='text' name="description" label="Description" class="col-12"
                                            placeholder="Enter Description" value="{{ $product['description'] }}"
                                            :message="$errors->first('description')" />
                                    </div>
                                    <div class="col-6">
                                        <x-textarea type='text' name="features" value="{{ $product['features'] }}"
                                            label="Key Features" class="col-12" placeholder="Enter Features"
                                            :message="$errors->first('features')" />
                                    </div>
                                    <table class="table table-striped">
                                        <tr class="p-3">
                                            <th class="p-2 text-bold">Size</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                        <tbody id="sizes">
                                            <tr>
                                                <td>
                                                    <div class="col-6">
                                                        <input type="text"
                                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                            name="size[100][name]" id="" placeholder="Size">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-6">
                                                        <input type="text"
                                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                            name="size[100][price] " id="" placeholder="Price">
                                                    </div>
                                                </td>
                                                <td style="width:200px;"><button class="btn btn-primary AddSize"
                                                        type="button">Add</button></td>
                                            </tr>
                                            @php
                                                $i_s = 1;

                                            @endphp
                                            @foreach ($size as $siz)
                                                <tr id="DeleteSize{{ $i_s }}">
                                                    <td>
                                                        <div class="col-6">
                                                            <input type="text" value="{{ $siz->name }}"
                                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                name="size[{{ $i_s }}][name]" id=""
                                                                placeholder="Size">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-6">
                                                            <input type="text" value="{{ $siz->price }}"
                                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                name="size[{{ $i_s }}][price] " id=""
                                                                placeholder="Price">
                                                        </div>
                                                    </td>
                                                    <td style="width:200px;"><button class="btn btn-danger  DeleteSize"
                                                            id="{{ $i_s }}" type="button">Dlete</button></td>
                                                </tr>
                                                @php
                                                    $i_s++;
                                                @endphp
                                            @endforeach

                                        </tbody>

                                    </table>
                                    <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">Parent
                                            Category</label>
                                        <select name='parent_category_id' class="form-select form-select-solid"
                                            data-control="select2" id="parent">
                                            @foreach ($parentCategories as $parentCategory)
                                                <option value="{{ $parentCategory['id'] }}">
                                                    {{ $parentCategory->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('parent_category_id')
                                        <div class="error text-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="col-6">
                                        <x-cento-dash-input type="select" name="child_category_id"
                                            label="Child Category" :options="$childCategories" :message="$errors->first('child_category_id')" />
                                    </div>

                                    <div class="col-6">
                                        <x-cento-dash-input type="number" name="sku"
                                            value="{{ $product['sku'] }}" label="SKU (Unique Product No.)"
                                            placeholder="Product No. should be unique" :message="$errors->first('sku')" />
                                    </div>
                                    <div class="col-6">
                                        <x-cento-dash-input type="number" name="product_length"
                                            value="{{ $product['product_length'] }}" label="Product Length"
                                            placeholder="product_length" :message="$errors->first('product_length')" />
                                    </div>
                                    <div class="col-6">
                                        <x-cento-dash-input type="number" name="product_weight"
                                            value="{{ $product['product_weight'] }}" label="Product Weight"
                                            placeholder="product_weight" :message="$errors->first('product_weight')" />
                                    </div>
                                    <div class="col-6">
                                        <x-cento-dash-input type="number" name="product_height"
                                            label="Product Height" value="{{ $product['product_height'] }}"
                                            placeholder="product_height" :message="$errors->first('product_height')" />
                                    </div>
                                    <div class="col-6">
                                        <x-cento-dash-input type="number" name="product_width" label="Product Width"
                                            placeholder="product_width" value="{{ $product['product_width'] }}"
                                            :message="$errors->first('product_width')" />
                                    </div>
                                    <!--begin::Col-->
                                    <div class="mb-12">
                                        <label for="" class="form-label">Roles</label>
                                        <select class="form-select form-select-solid is-valid" name="color[]"
                                            data-control="select2" data-placeholder="Select an option"
                                            data-allow-clear="true" multiple="multiple">
                                            @foreach ($color as $color)
                                                <option value="{{ $color->id }}"
                                                    {{ in_array($color->id, $product->color) ? 'selected' : '' }}>
                                                    {{ $color->name }}
                                                </option>
                                            @endforeach

                                        </select>
                                    </div>
                                    @error('color')
                                        <div class="error text-danger">{{ $message }}</div>
                                    @enderror
                                    <!--end::Col-->

                                    <div class="col-sm-3 my-4">
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox"
                                                {{ $product['availability'] == 'on' ? 'checked' : '' }} name="availability"
                                                value="" />
                                            <span class="form-check-label fw-semibold text-muted">Availability</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer mt-5 gap-2">
                                <button type="submit" class="btn btn-success">
                                    Update Product
                                </button>
                                <a class="btn btn-light-danger" href={{ route('product.index') }}> Cancel </a>
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Body-->
                    </div>
                </div>
            </form>
        </div>
        <!--end:::Main-->

        @section('js')
            <script>
                var i = 100;
                $('body').delegate('.AddSize', 'click', function() {

                    var html = '<tr id="DeleteSize' + i +
                        '">\n\
                                                    <td > <div class="col-6">\n\
                                                    <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" name="size[' + i +
                        '][name]" id="' + i +
                        '" value="" placeholder="Size"> </div>\n\
                                                     </td>\n\
                                                    <td><div class="col-6">\n\
                                                     <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" name="size[' +
                        i + '][price]" id="" placeholder="Price"> </div></td>\n\
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
                                            $('select[name="size[]"]').append(
                                                '<option value="' + size.id + '">' + size
                                                .dimension + '</option>');
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
                    // Summernote
                    $('.col-12 textarea').summernote({
                        height: '200px',
                        tabsize: 2

                    });
                    $('#color').multiselect({
                        nonSelectedText: 'Select Colors'
                    });
                    $('#size').multiselect({
                        nonSelectedText: 'Select Size'
                    });
                });
            </script>

            <script>
                $(function() {
                    // Summernote
                    $('.col-12 textarea').summernote({
                        height: '200px',
                        tabsize: 2

                    });
                    $('#color').multiselect({
                        nonSelectedText: 'Select Colors'
                    });
                    $('#size').multiselect({
                        nonSelectedText: 'Select Size'
                    });
                });
            </script>
        @endsection
    </x-slot>
    <x-slot name="footer">
        <x-layout.footer />
    </x-slot>
</x-layout.master>
