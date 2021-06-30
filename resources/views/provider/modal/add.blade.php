<!-- Provider Add Modal -->
<div class="modal fade" id="providerAddModal" tabindex="-1" role="dialog" aria-labelledby="providerAddModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-size-60" role="document">
        <div class="modal-content">
            <form method="POST" action="{{ url('/providers') }}" enctype="multipart/form-data">
            @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="providerAddModalTitle">Add Provider</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input required placeholder="ชื่อผู้ให้บริการ" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>

                        <div class="col-md-6">
                            <select required id="type" name="type" class="form-control">
                                <option value="" disabled selected>-- เลือกประเภทของบริการ --</option>
                                <option value="domain">Domain</option>
                                <option value="server">Server</option>
                                <option value="hosting">Hosting</option>
                                <option value="email">Email</option>
                                <option value="design">Design</option>
                                <option value="support">support</option>
                            </select>
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
                    <button type="submit" class="btn btn-primary btn-sm">เพิ่มผู้ให้บริการ</button>
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">ยกเลิก</button>
                </div>
            </form>
        </div>
    </div>
</div>