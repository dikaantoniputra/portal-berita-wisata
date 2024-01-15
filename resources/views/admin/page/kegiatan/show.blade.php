@extends('admin.layout.master')

@section('title')
Tambah Buku Pelajaran
@endsection

@push('after-style')
<link href="{{ asset('') }}assets/libs/quill/quill.core.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('') }}assets/libs/quill/quill.bubble.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('') }}assets/libs/quill/quill.snow.css" rel="stylesheet" type="text/css" />
@endpush

@section('content')



    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body task-detail">
                            
                            <div class="d-flex mb-3">
                                <img class="flex-shrink-0 me-3 rounded-circle avatar-md" alt="64x64" src="{{ asset($kegiatan->gambar) }}">
                                <div class="flex-grow-1">
                                    <h4 class="media-heading mt-0">{{ $kegiatan->user->name }}</h4>
                                    <span class="badge bg-danger">kegiatan</span>
                                </div>
                            </div>

                            <h4>{{ $kegiatan->company->name }}</h4>

                          
                            <p class="text-muted">
                                {!! $kegiatan->deskripsi !!}
                            </p>

                            <div class="row task-dates mb-0 mt-2">
                                <div class="col-lg-6">
                                    <h5 class="font-600 m-b-5"> Pembuatan</h5>
                                    <p>{{ $kegiatan->created_at }}</p>
                                </div>

                                <div class="col-lg-6">
                                    <h5 class="font-600 m-b-5">Update </h5>
                                    <p> {{ $kegiatan->updated_at }}</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>


                            <div class="attached-files mt-3">
                                <h5>Attached Files </h5>
                                <ul class="list-inline files-list">
                                    @foreach ($fileMateri as $foto)
                                    <li class="list-inline-item file-box">
                                       <img src="{{ asset($foto->lokasi_file) }}" class="img-fluid img-thumbnail" alt="attached-img" width="80">
                                        
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="text-end">
                                            
                                            <button type="button"
                                                    class="btn btn-light waves-effect" onclick="goBack()">Kembali
                                            </button>
                                            <script>
                                                function goBack() {
                                                history.back();
                                                }
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                </div><!-- end col -->

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>

                            {{-- <h4 class="header-title mt-0 mb-3">Comments (6)</h4> --}}

                            <div>

                                @foreach ($commen as $komen)
                                <div class="d-flex mb-3">
                                 
                                    <div class="flex-grow-1">
                                        <h5 class="mt-0">{{ $komen->name }}</h5>
                                        <p class="font-13 text-muted mb-0">
                                            <a href="" class="text-primary">{{ $komen->email }}</a>
                                            {{ $komen->content }}
                                        </p>
                                        <a href="{{ route('deleteCommentKegiatan', ['id' => $komen->id]) }}" class="text-danger font-13">Hapus</a>
                                    </div>
                                </div>
                                @endforeach
                               

                               
                            </div>
                        </div>
                    </div>
                   
                </div><!-- end col -->
            </div>
            <!-- end row -->        
            
        </div> <!-- container -->

    </div> <!-- content -->

    <!-- Footer Start -->



@endsection

@push('after-script')


<!-- Plugins js -->

<script src="{{ asset('') }}assets/libs/quill/quill.min.js"></script>

<!-- Init js-->
<script src="{{ asset('') }}assets/js/pages/form-quilljs.init.js"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>


<script> 



</script>
@endpush

