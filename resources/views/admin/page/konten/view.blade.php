@extends('admin.layout.master')

@section('title')
    kelahiran AKTE LAHIR
@endsection
@push('after-style')



@endpush
@section('content')


    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-md-4">
                                    <div class="mt-3 mt-md-0">
                                        <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#custom-modal"><i class="mdi mdi-plus-circle me-1"></i> Add Foto</button>
                                    </div>
                                </div><!-- end col-->
                                
                            </div> <!-- end row -->
                        </div>
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row -->        
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="text-center card-body">
                           
                            <div>
                               @foreach ($foto as $susunan )
                               <img src="{{ asset($susunan->gambar) }}" class="img-preview img-fluid col-sm-5" width="100" />
                               @endforeach
                                <p class="text-muted font-13 mb-3">
                                  Foto Susunan Organisasi Desa
                                </p>

                            </div>
                        </div>
                    </div>
                    

                </div> <!-- end col -->

               
            </div>
            <!-- end row -->

         
            
        </div> <!-- container -->

    </div> <!-- content -->


@endsection

@include('admin.page.konten.form')


@push('after-script')

@endpush
