<div class="col-xl-12">
    <div class="card">
        <div class="card-body">

            <h4 class="header-title">Desa Ngarum Form Data Diri Perusahaan</h4>
            <p class="sub-header">Masukan Data Diri Perusahan Secara Benar</p>

            <form class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">UseName</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="username" value="{{ $user->username ?? '' }}" required />
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">Password</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="password" value="{{ $user->password ?? '' }}" required />
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                

            

       
                
                <button class="btn btn-primary" type="submit">Submit form</button>
            </form>


        </div> <!-- end card-body -->
    </div> <!-- end card-->
</div> <!-- end col -->