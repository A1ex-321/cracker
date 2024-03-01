@extends('admin.layouts.app')


@section('content')

<!-- SweetAlert2 CSS -->

<main id="main" class="main">
    <section class="section dashboard" style="margin-left: -260px;
">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-0">
                        <div class="col-sm-6">
                            <h1 class="m-0">Add item</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active"></li>




                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            @include('admin.layouts.message')

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header" style="background-color:
#6e9ee6
;">
                                    <h3 class="card-title">Add Item <small></small></h3>
                                </div>
                                <div class="container">
                                    <form action="{{ route('create-item') }}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}


                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="categorySelect">Select Category<span style="color:red">*</span></label>
                                                <select name="category_id" class="form-control" id="categorySelect" required>
                                                    <option value="" disabled selected>Select a category</option>
                                                    @foreach($category as $category)
                                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>


                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Item Name<span style="color:red"></span><input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name" value="{{ old('name') }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Box <span style="color:red"></span><input type="text" name="box" class="form-control" id="exampleInputEmail1" placeholder="Box" value="{{ old('box') }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Price<span style="color:red"></span></label>
                                                        <input type="text" name="price" class="form-control" id="exampleInputEmail1" placeholder="Price" value="{{ old('price') }}" required>


                                                    </div>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Image<span style="color:red">*</span></label>
                                                <input type="file" name="image" class="form-control" id="exampleInputEmail1" placeholder="Image" value="{{ old('image') }}" required>
                                            </div>


                                            <!-- /.card-body -->
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-info">Submit</button>
                                            </div>
                                    </form>



                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <section class="section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Enabled Items</h5>

                                    <!-- Table with stripped rows -->
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover datatable">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Category</th>
                                                    <th>Name</th>
                                                    <th>Price</th>
                                                    <th>Box</th>
                                                    <th>Image</th>
                                                    <th>Edit & Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $counter = 1; @endphp
                                                @foreach ($item as $value)
                                                <tr>
                                                    <td>{{ $counter++ }}</td>
                                                    <td>{{ $value->category->title}}</td>
                                                    <td>{{ $value->name}}</td>
                                                    <td>{{ $value->price}}</td>
                                                    <td>{{ $value->box}}</td>


                                                    <td><img src="{{ asset('public/images/' . $value->image) }}" alt="Thumb Image" style="max-width: 100px; max-height: 100px;"></td>

                                                    <td>
                                                        <a href="{{url('admin/item/edit/'.$value->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                        <a onclick="return confirm('Are you sure you want to delete?')" href="{{url('admin/item/delete/'.$value->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>

                                        </table>
                                    </div>
                                    <!-- End Table with stripped rows -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main content -->

            <!-- /.content -->
        </div>




        <!-- Your scripts -->
        <!-- ... (previous code) ... -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <!-- ... (other scripts) ... -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>


    </section>
</main>
@endsection




@section('style')
<!-- Include jQuery -->

<!-- Initialize Select2 -->





@endsection