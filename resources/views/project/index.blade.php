@extends('layouts.coreLayout')

@section('title', 'Project')

@section('content')
<div class="row gutters-sm">

    <!-- inbox list -->
    <div class="col-12">


        <!-- portlet -->
        <div class="portlet">
            
            <!-- portlet : header -->
            <div class="portlet-header border-bottom">

                <div class="float-end">

                    <button type="button" class="btn btn-sm btn-primary btn-pill px-2 py-1 fs--15 mt--n3" data-toggle="modal" data-target="#projectAddModal">
                        + เพิ่มโปรเจค
                    </button>

                </div>

                <span class="d-block text-muted text-truncate font-weight-medium pt-1">
                    รายการโปรเจคทั้งหมด
                </span>
            </div>
            <!-- /portlet : header -->


            <!-- portlet : body -->
            <div class="portlet-body pt-0">

                <form novalidate class="bs-validate" id="form_id" method="post" action="#!">
                @csrf
                    <input type="hidden" id="action" name="action" value=""><!-- value populated by js -->

                    <div class="table-responsive">

                        <table class="table table-align-middle border-bottom mb-6">

                            <thead>
                                <tr class="text-muted fs--13">
                                    <th class="w--30 hidden-lg-down text-center">
                                        #
                                    </th>
                                    <th>
                                        <span class="px-2 p-0-xs">ชื่อโปรเจค</span>
                                    </th>
                                    <th class="w--220 hidden-lg-down">ลูกค้า</th>
                                    <th class="w--220 hidden-lg-down">วันที่ใช้บริการ</th>
                                    <th class="w--120 hidden-lg-down text-center">ราคา(฿)</th>
                                    <th class="w--100 hidden-lg-down text-center">สถานะ</th>
                                    <th class="w--120">&nbsp;</th>
                                </tr>
                            </thead>

                            <tbody id="item_list">
                                @foreach ($projects as $key => $project)

                                    <!-- project -->
                                    <tr id="project_id_{{ $key }}" class="text-dark">

                                        <td class="hidden-lg-down text-center">
                                            {{ $key + 1 }}.
                                        </td>

                                        <td style="line-height: 17px;">

                                            <strong id="prokect-name">{{ $project->name }}</strong>
                                            <p class="fs--12 mb-0 text-secondary">รายละเอียด : @if($project->descriotion != '') {{ $project->descriotion }} @else - @endif</p>

                                            <!-- MOBILE ONLY -->
                                            <div class="fs--13 d-block d-xl-none">
                                                <div class="fs--13 d-block d-xl-none">
                                                    <strong>DOC :</strong> {{ date('d-m-Y', strtotime($project->docdate)) }}
                                                </div>
                                                <div class="fs--13 d-block d-xl-none">
                                                    <strong>START :</strong> {{ date('d-m-Y', strtotime($project->startdate)) }}
                                                </div>
                                                <div class="fs--13 d-block d-xl-none">
                                                    <strong>END :</strong> {{ date('d-m-Y', strtotime($project->enddate)) }}
                                                </div>
                                                <div class="fs--13 d-block d-xl-none">
                                                    <strong>AMOUNT :</strong> {{ number_format($project->totalamt) }}
                                                </div>
                                                <div class="fs--13 d-block d-xl-none">
                                                    <strong>STATUS :</strong> {{ $project->status }}
                                                </div>
                                            </div>
                                            <!-- /MOBILE ONLY -->

                                        </td>

                                        <td class="hidden-lg-down" id="project-doc">
                                            {{ $project->customer->name }}
                                            <p class="fs--12 mb-0 text-secondary">info : {{ $project->customer->company_info }}</p>
                                        </td>

                                        <td class="hidden-lg-down" id="project-doc">
                                            <p class="fs--12 mb-0">
                                                วันที่เริ่มใช้บริการ : <span class="text-dark">{{ date('d-m-Y', strtotime($project->docdate)) }}</span>
                                            </p>
                                            <p class="fs--12 mb-0">
                                                วันเริ่มรอบบิล : <span class="text-primary">{{ date('d-m-Y', strtotime($project->startdate)) }}</span>
                                            </p>
                                            <p class="fs--12 mb-0">
                                                วันหมดอายุรอบบิล : <span class="text-danger">{{ date('d-m-Y', strtotime($project->enddate)) }}</span>
                                            </p>
                                        </td>

                                        <td class="hidden-lg-down text-center" id="project-amt">
                                            {{ number_format($project->totalamt) }}
                                        </td>

                                        <td class="hidden-lg-down text-center" id="project-status">
                                            @if($project->status == 'INACTIVE')
                                                <small class="badge badge-danger font-weight-normal fs--10">{{ $project->status }}</small>
                                            @elseif($project->status == 'ACTIVE')
                                                <small class="badge badge-success font-weight-normal fs--10">{{ $project->status }}</small>
                                            @else
                                                <small class="badge badge-secondary font-weight-normal fs--10">{{ $project->status }}</small>
                                            @endif
                                        </td>

                                        <td class="text-align-en d-flex">
                                        
                                            <a class="text-truncate mr-3" href="#!" title="แก้ไขโปรเจค" data-toggle="modal" data-target="#projectEditModal"
                                                id="edit-project-btn_{{ $key }}" 
                                                data-id="{{ $project->id }}" 
                                                data-name="{{ $project->name }}" 
                                                data-customer="{{ $project->customer->id }}" 
                                                data-docdate="{{ $project->docdate }}" 
                                                data-startdate="{{ $project->startdate }}" 
                                                data-enddate="{{ $project->enddate }}" 
                                                data-description="{{ $project->description }}"
                                                onClick="setDataEditProject({{ $key }})"
                                            >
                                                <i class="fi fi-pencil text-success"></i>
                                            </a>

                                            <a class="text-truncate mr-3" title="รายการไอเทม" data-toggle="collapse" href="#collapseProject_{{ $key }}" role="button" aria-expanded="false" aria-controls="collapseProject_{{ $key }}">
                                                <i class="fi fi-task-list"></i>
                                            </a>

                                            <div class="dropdown">

                                                <a href="#" class="mr-0" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                                    <span class="group-icon">
                                                        <i class="fi fi-dots-vertical-full text-dark"></i>
                                                        <i class="fi fi-close text-danger"></i>
                                                    </span>
                                                </a>


                                                <div class="dropdown-menu dropdown-menu-clean dropdown-click-ignore max-w-220">
                                                    @if($project->status != 'ACTIVE')
                                                        <a class="dropdown-item text-truncate" href="projects/status/active/{{ $project->id }}">
                                                            <i class="fi fi-check text-success"></i>
                                                            Set Active
                                                        </a>
                                                    @endif

                                                    @if($project->status != 'INACTIVE')
                                                        <a class="dropdown-item text-truncate" href="projects/status/inactive/{{ $project->id }}">
                                                            <i class="fi fi-close text-danger"></i>
                                                            Set Inactive
                                                        </a>
                                                    @endif

                                                    @if($project->status != 'HOLD')
                                                        <a class="dropdown-item text-truncate" href="projects/status/hold/{{ $project->id }}">
                                                            <i class="fi fi-locked text-secondary"></i>
                                                            Set Hold
                                                        </a>
                                                    @endif

                                                </div>

                                            </div>

                                        </td>
                                        @include('project.show-items')
                                    </tr>
                                    <!-- /project -->
                                @endforeach
                            </tbody>

                        </table>

                    </div>



                    <!-- options and pagination -->
                    <div class="row text-center-xs">

                        <div class="hidden-lg-down col-12 col-xl-6">

                        </div>

                        <div class="col-12 col-xl-6">
                            <!-- pagination -->
                            <nav aria-label="pagination">
                                <ul class="pagination pagination-pill justify-content-end justify-content-center justify-content-md-end">

                                    <li class="{{ $projects->onFirstPage() ? 'page-item btn-pill disabled' : 'page-item btn-pill' }}">
                                        <a class="page-link" href="{{ $projects->previousPageUrl() }}" tabindex="-1" aria-disabled="true">ก่อนหน้า</a>
                                    </li>
                                    
                                    <li class="page-item active" aria-current="page">
                                        {{ $projects->links() }}
                                    </li>
                                    
                                    <li class="{{ $projects->currentPage() == $projects->lastPage() ? 'page-item disabled' : 'page-item' }}">
                                        <a class="page-link" href="{{ $projects->nextPageUrl() }}">ถัดไป</a>
                                    </li>

                                </ul>

                                <div class="justify-content-end justify-content-center justify-content-md-end text-right">
                                    <small>หน้า : {{ $projects->currentPage() }} / {{ $projects->lastPage() }}</small>
                                </div>
                            </nav>
                            <!-- pagination -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style scoped>
    table.table-align-middle td {
        vertical-align: top;
    }
</style>
@endsection

@section('modal')
    @include('project.modal.add')
    @include('project.modal.edit')
    @include('project.modal.add-item')
@endsection

@section('script')
    <script src="{{ asset('js/app/project.js') }}"></script>
@endsection