@extends('admin.layouts.app')


@section('content')

<style>
    /* Add your custom styles for the modal and input text boxes here */
    #feedback-modal .modal-dialog {
        max-width: 800px;
        /* Set your desired modal width */
    }

    .modal-body input[type="text"],
    .modal-body input[type="email"] {
        width: 100%;
        /* Set your desired input text box width */
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> item</title>

    <!-- Include jQuery -->





    <!-- Include TinyMCE from CDN -->
    <!-- <script src="https://cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script> -->
    <!-- <script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script> -->


    <!-- Include Select2 from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
</head>
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
                            <h1 class="m-0">Edit record</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">

                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->



            <!-- Placeholder for the toast -->
            <!-- Placeholder for the toast -->






            <!-- Your existing HTML code -->


            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title"> Edit data <small></small></h3>
                                </div>
                                <div class="container">
                                    <form action="{{ route('item-update', ['id' => $getRecord->id])}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}


                                        <div class="card-body">




                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="categorySelect">Select Category<span style="color:red">*</span></label>
                                                    <select name="category_id" class="form-control" id="categorySelect" required>
                                                        <option value="" disabled>Select a category</option>
                                                        @foreach($category as $category)
                                                        <option value="{{ $category->id }}" @if($getRecord->category_id == $category->id) selected @endif>{{ $category->title }}</option>
                                                        @endforeach
                                                    </select>

                                                </div>


                                                <div class="form-row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Item Name<span style="color:red"></span><input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name" value="{{ $getRecord->name }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Box <span style="color:red"></span><input type="text" name="box" class="form-control" id="exampleInputEmail1" placeholder="Box" value="{{ $getRecord->box }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Price<span style="color:red"></span></label>
                                                            <input type="text" name="price" class="form-control" id="exampleInputEmail1" placeholder="Price" value="{{ $getRecord->price }}" required>


                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"> Image<span style="color:red">*</span></label>
                                                    <input type="file" name="image" class="form-control" id="exampleInputEmail1" placeholder="Image" value="">
                                                </div>
                                                <img src="{{ asset('public/images/' . $getRecord->image) }}" alt="Thumb Image" style="max-width: 100px; max-height: 100px;">


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
            <!-- Main content -->

            <!-- /.content -->
        </div>




        <!-- Your scripts -->
        <!-- ... (previous code) ... -->

        <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>


        <!-- Include jQuery library -->
        <!-- Include jQuery library -->
        <scrip>
            <!-- Include jQuery library -->





            </script>

            <!-- Your JavaScript code -->



            <!-- Include jQuery library -->
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

            <!-- Your JavaScript code -->

    </section>
</main>
@endsection




@section('style')
<!-- Include jQuery -->

<!-- Initialize Select2 -->