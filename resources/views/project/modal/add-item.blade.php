<!-- Project Add Modal -->
<div class="modal fade" id="projectAddItemModal" tabindex="-1" role="dialog" aria-labelledby="projectAddItemModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-size-40" role="document">
        <div class="modal-content pb-4">
            <form method="POST" action="{{ url('/projects/add-item') }}">
            @csrf
                <div class="modal-header">
                    <h5>เพิ่มรายการไอเทม <span id="project-new-item-name"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div id="create-project-item-new" class="mt-2">
                                <div class="form-group row">
                                    <label for="item-name" class="col-md-3 col-form-label text-md-right lh--16">{{ __('Name') }}<br/><span class="fs--12">ชื่อรายการ</span></label>

                                    <div class="col-md-8">
                                        <input required placeholder="ชื่อรายการ Project Item" id="item-name" type="text" class="form-control" name="item_name" value="{{ old('item-name') }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="item-type" class="col-md-3 col-form-label text-md-right lh--16">{{ __('Type') }}<br/><span class="fs--12">ประเภทรายการ</span></label>

                                    <div class="col-md-8">
                                        <select required id="item-type" name="item_type" class="form-control">
                                            <option value="" disabled selected>-- เลือกประเภทของบริการ --</option>
                                            <option value="domain">Domain</option>
                                            <option value="server">Server</option>
                                            <option value="hosting">Hosting</option>
                                            <option value="email">Email</option>
                                            <option value="design">Design</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="item-provider" class="col-md-3 col-form-label text-md-right lh--16">{{ __('Provider') }}<br/><span class="fs--12">ผู้ให้บริการ</span></label>

                                    <div class="col-md-8">
                                        <select required id="item-provider" name="item_provider" class="form-control">
                                            <option value="" disabled selected>-- เลือกผู้ให้บริการ --</option>
                                            @foreach($providers as $provider)
                                                <option value="{{ $provider->id }}">{{ $provider->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="item-amount" class="col-md-3 col-form-label text-md-right lh--16">{{ __('Amount') }}<br/><span class="fs--12">ราคา</span></label>

                                    <div class="col-md-8">
                                        <input required placeholder="ราคา Project Item" id="item-amount" type="number" class="form-control" name="item_amount" value="{{ old('item-amount') }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="item-description" class="col-md-3 col-form-label text-md-right lh--16">{{ __('Description') }}<br/><span class="fs--12">รายละเอียดเพิ่มเติม</span></label>

                                    <div class="col-md-8">
                                        <textarea placeholder="รายละเอียดอื่นๆ (ถ้ามี)" id="item-description" class="form-control" name="item_description" rows="3"></textarea>
                                    </div>
                                </div>

                                <input type="hidden" id="project-id_new-item" name="project_id" value="">

                                <div class="form-group row mb-0">
                                    <div class="col-12 text-right">
                                        <button type="submit" class="btn btn-primary btn-sm btn-v-sm">เพิ่มไอเทม</button>
                                        <button type="button" class="btn btn-secondary btn-sm btn-v-sm" data-dismiss="modal" aria-label="Close">ยกเลิก</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>