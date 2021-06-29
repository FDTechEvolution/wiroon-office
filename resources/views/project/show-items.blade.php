<tr class="py-0 my-0">
    <td colspan="7" class="py-0 my-0">
        <div class="collapse pt-0 pb-4 border-right bw--3 border-secondary bg-light" id="collapseProject_{{ $key }}">
            <table id="project-items-table" class="table table-align-middle border-bottom-0  width-90-center">
                <thead class="bg-secondary py-0">
                    <tr class="text-light fs--13">
                        <th class="w--30 hidden-lg-down text-center">
                            #
                        </th>
                        <th>
                            <span class="px-2 p-0-xs">รายการ</span>
                        </th>
                        <th class="w--100 hidden-lg-down text-center">ประเภท</th>
                        <th class="w--160 hidden-lg-down text-center">ผู้ให้บริการ</th>
                        <th class="w--100 hidden-lg-down text-center">ราคา(฿)</th>
                        <th class="w--220 hidden-lg-down text-center">รายละเอียด</th>
                        <th class="w--80 hidden-lg-down text-center"></th>
                    </tr>
                </thead>

                <tbody id="item_list">
                    @foreach($project->items as $index => $item)
                    <tr id="item_id_{{ $index }}" class="fs--12">
                        <td class="text-center py-2">{{ $index + 1 }}</td>
                        <td class="py-2">{{ $item->name }}</td>
                        <td class="text-center py-2">{{ $item->type }}</td>
                        <td class="text-center py-2">{{ $item->provider->name }}</td>
                        <td class="text-center py-2">{{ number_format($item->amount) }}</td>
                        <td class="text-center py-2">@if($item->description != '') {{ $item->description }} @else - @endif</td>
                        <td class="text-center py-2">

                            <a class="text-truncate mr-3" href="#!" id="edit-project-item-btn_{{ $index }}" title="แก้ไขโปรเจค" data-toggle="modal" data-target="#projectEditItemModal"
                                onClick="setDataItemEdit({{ $item->id }}, '{{ $item->name }}', '{{ $item->type }}', {{ $item->provider->id }}, {{ $item->amount }}, '{{ $item->description }}')"
                            >
                                <i class="fi fi-pencil text-success"></i>
                            </a>

                            <a	href="#!" 
                                class="text-truncate js-ajax-confirm" 
                                data-href="/projects/delete-item/{{ $item->id }}"
                                data-ajax-confirm-body="ยืนยันการลบรายการไอเทม {{ $item->name }} ?"

                                data-ajax-confirm-method="GET" 

                                data-ajax-confirm-btn-yes-class="btn-sm btn-danger" 
                                data-ajax-confirm-btn-yes-text="ลบข้อมูล" 
                                data-ajax-confirm-btn-yes-icon="fi fi-check" 

                                data-ajax-confirm-btn-no-class="btn-sm btn-light" 
                                data-ajax-confirm-btn-no-text="ยกเลิก" 
                                data-ajax-confirm-btn-no-icon="fi fi-close"
                            >
                                <i class="fi fi-thrash text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                
                    <tr class="fs--12 bg-light border-bottom-0">
                        <td colspan="7" class="text-right py-2 border-bottom-0">
                            <button type="button" class="btn btn-primary btn-vv-sm" data-toggle="modal" data-target="#projectAddItemModal" onClick="getProjectName({{ $key }}, {{ $project->id }})">เพิ่มรายการ</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </td>
</tr>