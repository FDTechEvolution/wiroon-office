<!-- Provider Edit Modal -->
<div class="modal fade" id="providerEditModal" tabindex="-1" role="dialog" aria-labelledby="providerEditModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-size-60" role="document">
        <div class="modal-content">
            <form method="POST" action="{{ url('/providers/edit') }}" enctype="multipart/form-data">
            @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="providerEditModalTitle">Edit Provider <span id="provider-name"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="name-input" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input required placeholder="ชื่อผู้ให้บริการ" id="name-input" type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="type-input" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>

                        <div class="col-md-6">
                            <select required id="type-input" name="type" class="form-control">
                                <option value="" disabled>-- เลือกประเภทของบริการ --</option>
                                <option value="domain">Domain</option>
                                <option value="server">Server</option>
                                <option value="hosting">Hosting</option>
                                <option value="email">Email</option>
                                <option value="design">Design</option>
                                <option value="support">Support</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="description-input" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                        <div class="col-md-6">
                            <textarea placeholder="รายละเอียดอื่นๆ" id="description-input" class="form-control" name="description" rows="3"></textarea>
                        </div>
                    </div>

                    <input type="hidden" name="provider_id" id="provider-id" value="">

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">เพิ่มผู้ให้บริการ</button>
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">ยกเลิก</button>
                </div>
            </form>
        </div>
    </div>
</div>