@extends('admin.layout.master')

@section('content')
  <!-- Start Content-->
  <div class="container-fluid">

    <div class="row">

        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                
                    <h4 class="header-title mt-0 mb-4">Jumlah Pengumuman</h4>

                    <div class="widget-chart-1">
                        <div class="widget-chart-box-1 float-start" dir="ltr">
                            <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#f05050 "
                                   data-bgColor="#F9B9B9" value=" {{ $pengumuman ?? '0' }}"
                                   data-skin="tron" data-angleOffset="180" data-readOnly=true
                                   data-thickness=".15"/>
                        </div>

                        <div class="widget-detail-1 text-end">
                            <h2 class="fw-normal pt-2 mb-1">  {{ $pengumuman ?? '0' }} </h2>
                            <p class="text-muted mb-1">Jumlah Pengumuman</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="header-title mt-0 mb-3">Total Analisis Kegiatan</h4>

                    <div class="widget-box-2">
                        <div class="widget-detail-2 text-end">
                            <span class="badge bg-success rounded-pill float-start mt-3">{{ $Kegiatan ?? '0' }}% <i class="mdi mdi-trending-up"></i> </span>
                            <h2 class="fw-normal mb-1"> {{ $Kegiatan ?? '0' }} </h2>
                            <p class="text-muted mb-3">Kegiatan Total</p>
                        </div>
                        <div class="progress progress-bar-alt-success progress-sm">
                            <div class="progress-bar bg-success" role="progressbar"
                                    aria-valuenow="77" aria-valuemin="{{ $Kegiatan ?? '0' }}" aria-valuemax="100"
                                    style="width: 77%;">
                                <span class="visually-hidden">{{ $Kegiatan ?? '0' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
             

                    <h4 class="header-title mt-0 mb-4">Kategori Kegiatan</h4>

                    <div class="widget-chart-1">
                        <div class="widget-chart-box-1 float-start" dir="ltr">
                            <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#ffbd4a"
                                    data-bgColor="#FFE6BA" value="{{ $CategoryKegiatan ?? '0' }}"
                                    data-skin="tron" data-angleOffset="180" data-readOnly=true
                                    data-thickness=".15"/>
                        </div>
                        <div class="widget-detail-1 text-end">
                            <h2 class="fw-normal pt-2 mb-1"> {{ $CategoryKegiatan ?? '0' }} </h2>
                            <p class="text-muted mb-1">Update today</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="header-title mt-0 mb-3">Admin Dashbord</h4>

                    <div class="widget-box-2">
                        <div class="widget-detail-2 text-end">
                            <span class="badge bg-pink rounded-pill float-start mt-3">{{ $User }}% <i class="mdi mdi-trending-up"></i> </span>
                            <h2 class="fw-normal mb-1"> {{ $User ?? '0' }} </h2>
                            <p class="text-muted mb-3">Update today</p>
                        </div>
                        <div class="progress progress-bar-alt-pink progress-sm">
                            <div class="progress-bar bg-pink" role="progressbar"
                                    aria-valuenow="{{ $User ?? '0' }}" aria-valuemin="0" aria-valuemax="100"
                                    style="width: 77%;">
                                <span class="visually-hidden">{{ $User ?? '0' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div><!-- end col -->

    </div>



    <!-- end row -->       
    
</div> <!-- container-fluid -->
@endsection