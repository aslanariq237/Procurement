@extends('admin.admin')

@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="col-12 col-xl-12 grid-margin stretch-card">
              <div class="card overflow-hidden">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
                    <h6 class="card-title mb-0">Data AR</h6>
                    <div class="dropdown">
                      <a type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                      </div>
                    </div>
                  </div>
                  <div class="row align-items-start">
                    <div class="col-md-7">
                      <p class="text-muted tx-13 mb-3 mb-md-0">AR is HERE.</p>
                    </div>
                    <div class="col-md-5 d-flex justify-content-md-end">
                      <div class="btn-group mb-3 mb-md-0" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-outline-primary">Today</button>
                        <button type="button" class="btn btn-outline-primary d-none d-md-block">Week</button>
                        <button type="button" class="btn btn-primary">Month</button>
                        <button type="button" class="btn btn-outline-primary">Year</button>
                      </div>
                    </div>
                  </div>
                  <div id="revenueChart" ></div>
                </div>
              </div>
            </div>
          </div> <!-- row -->
    </div>
@endsection