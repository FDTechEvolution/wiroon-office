<!-- Customer Add Modal -->
<div class="modal fade" id="customerAddModal" tabindex="-1" role="dialog" aria-labelledby="customerAddModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-size-60" role="document">
        <div class="modal-content">
            <form method="POST" action="{{ url('/customers') }}" enctype="multipart/form-data">
            @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="customerAddModalTitle">Add Customer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input required placeholder="ชื่อลูกค้า" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="company_info" class="col-md-4 col-form-label text-md-right">{{ __('Company Info') }}</label>

                        <div class="col-md-6">
                            <textarea placeholder="รายละเอียดบริษัทของลูกค้า" id="company_info" class="form-control" name="company_info" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile') }}</label>

                        <div class="col-md-6">
                            <input required placeholder="หมายเลขโทรศัพท์" id="mobile" type="text" class="form-control" name="mobile" value="{{ old('mobile') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                        <div class="col-md-6">
                            <textarea placeholder="รายละเอียดอื่นๆ" id="description" class="form-control" name="description" rows="3"></textarea>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">เพิ่มลูกค้า</button>
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">ยกเลิก</button>
                </div>
            </form>
        </div>
    </div>
</div>