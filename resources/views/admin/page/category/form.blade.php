<div class="col-xl-12">
    <div class="card">
        <div class="card-body">

            <h4 class="header-title">Pariwisata Form Kategori </h4>
            <p class="sub-header">Masukan Data Kategori Kegiatan Secara Benar</p>

            <form class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">Nama Kategori Kegiatan</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="name" value="{{ $categoryKegiatan->name ?? '' }}" required />
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                
                
                
                <button class="btn btn-primary" type="submit">Submit form</button>
            </form>


        </div> <!-- end card-body -->
    </div> <!-- end card-->
</div> <!-- end col -->