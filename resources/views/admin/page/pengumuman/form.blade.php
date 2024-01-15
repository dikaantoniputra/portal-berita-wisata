<div class="col-xl-12">
    <div class="card">
        <div class="card-body">

            <h4 class="header-title">Desa Ngarum Form Penginputan Pengumuman</h4>
            <p class="sub-header">Masukan Data Pengumuman Secara Benar</p>

            <form class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">Judul Pengumuman</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="judul" value="{{ $pengumuman->judul ?? '' }}" required />
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                

            

                <div class="mb-3">
                <h4 class="header-title">deskripsi</h4>
                <textarea class="form-control" id="editor" name="deskripsi"
                rows="5">{{ $pengumuman->deskripsi ?? '' }}</textarea>
               
                </div>


              

                @if (!empty($pengumuman))
                <img src="{{ asset($pengumuman->gambar) }}" class="img-preview img-fluid col-sm-5" width="100" />
                @else
                <img class="img-preview img-fluid col-sm-5">
                @endif
              
                <div class="mb-3">
                    <label for="validationCustom05" class="form-label">Logo ukuran maks 1MB</label>
                    <input type="file" class="form-control" id="validationCustom05" placeholder="Zip" name="gambar"  />
                    <div class="invalid-feedback">
                        Please provide a valid zip.
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Foto Pendukung ukuran maks 1MB</label>
                    <input class="form-control" type="file" name="file_pengumumen[]" id="formFileMultiple" multiple />
                </div>

                <div class="mt-3">
                    <h6>Data File Pengumuman:</h6>
                    <ul>
                        {{-- @foreach ($fileMateri as $file)
                        <li>
                            <a href="{{ route('download.file', ['filename' => $file->nama_file]) }}">{{ $file->nama_file }}</a>
                            <button onclick="deleteFile('{{ $file->id }}')" class="border-0 bg-transparent"><i class="text-danger" data-feather="delete"></i></button>
                        </li>
                    @endforeach --}}
                    @if (isset($fileMateri) && !$fileMateri->isEmpty())
                        <ul>
                            @foreach ($fileMateri as $file)
                                <li>
                                   
                                    <button onclick="deleteFile('{{ $file->id }}')" class="border-0 bg-transparent">{{ $file->nama_file }}<i class="text-danger" data-feather="delete"></i></button>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>Tidak ada file yang tersedia.</p>
                    @endif

                    
                    
                    </ul>
                </div>

                
                <button class="btn btn-primary" type="submit">Submit form</button>
            </form>


        </div> <!-- end card-body -->
    </div> <!-- end card-->
</div> <!-- end col -->