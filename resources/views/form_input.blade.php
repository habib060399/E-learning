@extends('admin.layout')

@section('c')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Forms</a></li>
        <li class="breadcrumb-item active" aria-current="page">Advanced Elements</li>
    </ol>
</nav>

<div class="row">
  <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Validation</h4>              
                <form id="signupForm">
                    <div class="mb-3">
                        <label for="name" class="form-label">Judul Materi</label>
                        <input id="name" class="form-control" name="judul" type="text">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label"></label>
                        <input id="email" class="form-control" name="" type="text">
                    </div>
                    <div class="mb-3">
                      
                        <label for="defaultconfig-4" class="col-form-label">Isi Materi</label>
                      
                      
                        <textarea name="konten" id="maxlength-textarea" class="form-control ckeditor" id="defaultconfig-4" maxlength="100" rows="8" placeholder="This textarea has a limit of 100 chars."></textarea>
                      
                    </div>
  <div class="mb-3">
    <div class="form-check">
      <label class="form-check-label" for="termsCheck">
        Agree to <a href="#"> terms and conditions </a>
      </label>
      <input type="checkbox" class="form-check-input" name="terms_agree" id="termsCheck">
    </div>
  </div>
                    <input class="btn btn-primary" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
@endsection