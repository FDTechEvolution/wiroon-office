<!-- Project Add Modal -->
<div class="modal fade" id="projectAddModal" tabindex="-1" role="dialog" aria-labelledby="projectAddModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-size-80" role="document">
        <div class="modal-content">
            <form method="POST" action="{{ url('/projects') }}">
            @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="projectAddModalTitle">เพิ่มโปรเจคงานใหม่</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-md-6 border-right">
                            <h5>โปรเจคงาน</h5>
                            <div class="form-group row">
                                <label for="name" class="col-md-3 col-form-label text-md-right lh--16">{{ __('Name') }}<br/><span class="fs--12">ชื่อโปรเจค</span></label>

                                <div class="col-md-8">
                                    <input required placeholder="ชื่อโปรเจค" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="customer" class="col-md-3 col-form-label text-md-right lh--16">{{ __('Customer') }}<br/><span class="fs--12">ลูกค้า</span></label>
                                <div class="col-md-8">
                                    <select required id="customer" name="customer" class="form-control">
                                        <option value="" disabled selected>-- เลือกลูกค้า --</option>
                                        @foreach($customers as $customer)
                                            <option value="{{ $customer->id }}">{{ $customer->name }} : {{ $customer->company_info }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="doc" class="col-md-3 col-form-label text-md-right lh--16">{{ __('DocDate') }}<br/><span class="fs--12">วันที่เริ่มใช้บริการ</span></label>

                                <div class="col-md-8">
                                    <div class="input-group-over position-realtive z-index-1 bg-white">
                                        <input required type="text" id="doc" name="docdate" class="form-control bg-transparent datepicker" 
                                                data-today-highlight="true" 
                                                data-layout-rounded="true" 
                                                data-title="วันที่เริ่มใช้บริการ" 
                                                data-show-weeks="true" 
                                                data-today-highlight="true" 
                                                data-today-btn="true" 
                                                data-autoclose="true" 
                                                data-format="DD/MM/YYYY"
                                                data-quick-locale='{
                                                    "days": ["อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัสบดี", "ศุกร์", "เสาร์"],
                                                    "daysShort": ["อา.", "จ.", "อ.", "พ.", "พฤ.", "ศ.", "ส."],
                                                    "daysMin": ["อา.", "จ.", "อ.", "พ.", "พฤ.", "ศ.", "ส."],
                                                    "months": ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"],
                                                    "monthsShort": ["ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค."],
                                                    "today": "วันนี้",
                                                    "clear": "ล้างค่า",
                                                    "titleFormat": "MM yyyy"}'>

                                        <span class="fi fi-calendar fs--20 ml-4 mr-4 z-index-n1 text-muted"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="start" class="col-md-3 col-form-label text-md-right lh--16">{{ __('StartDate') }}<br/><span class="fs--12">วันเริ่มรอบบิล</span></label>

                                <div class="col-md-8">
                                    <div class="input-group-over position-realtive z-index-1 bg-white">
                                        <input required type="text" id="start" name="startdate" class="form-control bg-transparent datepicker" 
                                                data-today-highlight="true" 
                                                data-layout-rounded="true" 
                                                data-title="วันเริ่มรอบบิล" 
                                                data-show-weeks="true" 
                                                data-today-highlight="true" 
                                                data-today-btn="true" 
                                                data-autoclose="true" 
                                                data-format="DD/MM/YYYY"
                                                data-quick-locale='{
                                                    "days": ["อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัสบดี", "ศุกร์", "เสาร์"],
                                                    "daysShort": ["อา.", "จ.", "อ.", "พ.", "พฤ.", "ศ.", "ส."],
                                                    "daysMin": ["อา.", "จ.", "อ.", "พ.", "พฤ.", "ศ.", "ส."],
                                                    "months": ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"],
                                                    "monthsShort": ["ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค."],
                                                    "today": "วันนี้",
                                                    "clear": "ล้างค่า",
                                                    "titleFormat": "MM yyyy"}'>

                                        <span class="fi fi-calendar fs--20 ml-4 mr-4 z-index-n1 text-muted"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="end" class="col-md-3 col-form-label text-md-right lh--16">{{ __('EndDate') }}<br/><span class="fs--12">วันหมดอายุรอบบิล</span></label>

                                <div class="col-md-8">
                                    <div class="input-group-over position-realtive z-index-1 bg-white">
                                        <input required type="text" id="end" name="enddate" class="form-control bg-transparent datepicker" 
                                                data-today-highlight="true" 
                                                data-layout-rounded="true" 
                                                data-title="วันหมดอายุรอบบิล" 
                                                data-show-weeks="true" 
                                                data-today-highlight="true" 
                                                data-today-btn="true" 
                                                data-autoclose="true" 
                                                data-format="DD/MM/YYYY"
                                                data-quick-locale='{
                                                    "days": ["อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัสบดี", "ศุกร์", "เสาร์"],
                                                    "daysShort": ["อา.", "จ.", "อ.", "พ.", "พฤ.", "ศ.", "ส."],
                                                    "daysMin": ["อา.", "จ.", "อ.", "พ.", "พฤ.", "ศ.", "ส."],
                                                    "months": ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"],
                                                    "monthsShort": ["ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค."],
                                                    "today": "วันนี้",
                                                    "clear": "ล้างค่า",
                                                    "titleFormat": "MM yyyy"}'>

                                        <span class="fi fi-calendar fs--20 ml-4 mr-4 z-index-n1 text-muted"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-3 col-form-label text-md-right lh--16">{{ __('Description') }}<br/><span class="fs--12">รายละเอียดเพิ่มเติม</span></label>

                                <div class="col-md-8">
                                    <textarea placeholder="รายละเอียดอื่นๆ (ถ้ามี)" id="description" class="form-control" name="description" rows="3"></textarea>
                                </div>
                            </div>

                            <input type="hidden" id="project-item" name="project_item" value="">

                        </div>
                        <div class="col-12 col-md-6">
                            <h5>รายการเพิ่มเติม <button type="button" class="btn btn-primary btn-sm btn-vv-sm ml-2" onClick="createNewItem()">+ เพิ่มรายการ</button></h5>
                            <div id="create-project-item" class="mt-2 bg-light card" style="display: none;">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="item-name" class="col-md-3 col-form-label text-md-right lh--16">{{ __('Name') }}<br/><span class="fs--12">ชื่อรายการ</span></label>

                                        <div class="col-md-8">
                                            <input placeholder="ชื่อรายการ Project Item" id="item-name" type="text" class="form-control" name="item_name" value="{{ old('item-name') }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="item-type" class="col-md-3 col-form-label text-md-right lh--16">{{ __('Type') }}<br/><span class="fs--12">ประเภทรายการ</span></label>

                                        <div class="col-md-8">
                                            <select id="item-type" name="item_type" class="form-control">
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
                                            <select id="item-provider" name="item_provider" class="form-control">
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
                                            <input placeholder="ราคา Project Item" id="item-amount" type="number" class="form-control" name="item_amount" value="{{ old('item-amount') }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="item-description" class="col-md-3 col-form-label text-md-right lh--16">{{ __('Description') }}<br/><span class="fs--12">รายละเอียดเพิ่มเติม</span></label>

                                        <div class="col-md-8">
                                            <textarea placeholder="รายละเอียดอื่นๆ (ถ้ามี)" id="item-description" class="form-control" name="item_description" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-12 text-right">
                                            <button type="button" class="btn btn-primary btn-sm btn-v-sm" onClick="addNewItem()">เพิ่มไอเทม</button>
                                            <button type="button" class="btn btn-secondary btn-sm btn-v-sm" onClick="cancelNewItem()">ยกเลิก</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="project-item-list" style="display: block;">
                                <div class="row">
                                    <div class="col-12">
                                        <ul id="item-list"></ul>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-11 text-right">
                                        ราคาโปรเจค : <span id="project-amount">0</span> ฿
                                    </div>
                                </div>
                                <span id="test-item"></span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">เพิ่มโปรเจค</button>
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">ยกเลิก</button>
                </div>
            </form>
        </div>
    </div>
</div>