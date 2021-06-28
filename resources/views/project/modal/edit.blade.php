<!-- Project Edit Modal -->
<div class="modal fade" id="projectEditModal" tabindex="-1" role="dialog" aria-labelledby="projectEditModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-size-40" role="document">
        <div class="modal-content">
            <form method="POST" action="{{ url('/projects/edit') }}">
            @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="projectEditModalTitle">Edit Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                                <label for="edit-name" class="col-md-3 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-8">
                                    <input required placeholder="ชื่อโปรเจค" id="edit-name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="edit-customer" class="col-md-3 col-form-label text-md-right">{{ __('Customer') }}</label>
                                <div class="col-md-8">
                                    <select required id="edit-customer" name="customer" class="form-control">
                                        <option value="" disabled selected>-- เลือกลูกค้า --</option>
                                        @foreach($customers as $customer)
                                            <option value="{{ $customer->id }}">{{ $customer->name }} : {{ $customer->company_info }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="edit-doc" class="col-md-3 col-form-label text-md-right">{{ __('DocDate') }}</label>

                                <div class="col-md-8">
                                    <div class="input-group-over position-realtive z-index-1 bg-white">
                                        <input required type="text" name="docdate" value="" class="form-control bg-transparent datepicker edit-doc" 
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
                                <label for="edit-start" class="col-md-3 col-form-label text-md-right">{{ __('StartDate') }}</label>

                                <div class="col-md-8">
                                    <div class="input-group-over position-realtive z-index-1 bg-white">
                                        <input required type="text" name="startdate" value="" class="form-control bg-transparent datepicker edit-start" 
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
                                <label for="edit-end" class="col-md-3 col-form-label text-md-right">{{ __('EndDate') }}</label>

                                <div class="col-md-8">
                                    <div class="input-group-over position-realtive z-index-1 bg-white">
                                        <input required type="text" name="enddate" value="" class="form-control bg-transparent datepicker edit-end" 
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
                                <label for="edit-description" class="col-md-3 col-form-label text-md-right">{{ __('Description') }}</label>

                                <div class="col-md-8">
                                    <textarea placeholder="รายละเอียดอื่นๆ" id="edit-description" class="form-control" name="description" rows="3"></textarea>
                                </div>
                            </div>

                            <input type="hidden" id="edit-project-id" name="project_id" value="">

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">บันทึกการแก้ไข</button>
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">ยกเลิก</button>
                </div>
            </form>
        </div>
    </div>
</div>