@extends('layouts.coreLayout')

@section('title', 'Providers')

@section('content')
<div class="row gutters-sm">

    <!-- inbox list -->
    <div class="col-12">


        <!-- portlet -->
        <div class="portlet">
            
            <!-- portlet : header -->
            <div class="portlet-header border-bottom">

                <div class="float-end">

                    <button type="button" class="btn btn-sm btn-primary btn-pill px-2 py-1 fs--15 mt--n3" data-toggle="modal" data-target="#providerAddModal">
                        + Add New Provider
                    </button>

                </div>

                <span class="d-block text-muted text-truncate font-weight-medium pt-1">
                    All Provider
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
                                        <span class="px-2 p-0-xs">
                                            NAME
                                        </span>
                                    </th>
                                    <th class="w--200 hidden-lg-down text-center">TYPE</th>
                                    <th class="w--200 hidden-lg-down text-center">CREATE</th>
                                    <th class="w--300 hidden-lg-down text-center">DESCRIPTION</th>
                                    <th class="w--60">&nbsp;</th>
                                </tr>
                            </thead>

                            <tbody id="item_list">
                                @foreach ($providers as $key => $provider)

                                    <!-- provider -->
                                    <tr id="provider_id_{{ $key }}" class="text-dark">

                                        <td class="hidden-lg-down text-center">
                                            {{ $key + 1 }}
                                        </td>

                                        <td style="line-height: 17px;">

                                            <p class="mb-0 text-dark" id="provider-name"><strong>{{ $provider->name }}</strong></p>

                                            <!-- MOBILE ONLY -->
                                            <div class="fs--13 d-block d-xl-none">
                                                <div class="fs--13 d-block d-xl-none">
                                                    <strong>TYPE :</strong> {{ $provider->type }}
                                                </div>
                                                <div class="fs--13 d-block d-xl-none">
                                                    <strong>CREATE :</strong> {{ $provider->created_at->format('d/m/Y') }}
                                                </div>
                                                <div class="fs--13 d-block d-xl-none">
                                                    <strong>DESC :</strong> {{ $provider->description }}
                                                </div>
                                            </div>
                                            <!-- /MOBILE ONLY -->

                                        </td>

                                        <td class="hidden-lg-down text-center" id="provider-type">
                                            {{ $provider->type }}
                                        </td>

                                        <td class="hidden-lg-down text-center">
                                            {{ $provider->created_at->format('d/m/Y') }}
                                        </td>

                                        <td class="hidden-lg-down text-center" id="provider-description">
                                            {{ $provider->description }}
                                        </td>

                                        <td class="text-align-en d-flex">

                                            <a class="text-truncate mr-4" href="#!" title="แก้ไข" data-toggle="modal" data-target="#providerEditModal"
                                                onClick="setDataEditProvider({{ $provider->id }}, {{ $key }})"
                                            >
                                                <i class="fi fi-pencil"></i>
                                            </a>

                                            <a	 href="#!" 
                                                class="text-truncate js-ajax-confirm" 
                                                data-href="/providers/delete/{{ $provider->id }}"
                                                data-ajax-confirm-body="ยืนยันการลบผู้ให้บริการ {{ $provider->name }} ?"

                                                data-ajax-confirm-mode="ajax" 
                                                data-ajax-confirm-method="GET" 

                                                data-ajax-confirm-btn-yes-class="btn-sm btn-danger" 
                                                data-ajax-confirm-btn-yes-text="ลบข้อมูล" 
                                                data-ajax-confirm-btn-yes-icon="fi fi-check" 

                                                data-ajax-confirm-btn-no-class="btn-sm btn-light" 
                                                data-ajax-confirm-btn-no-text="ยกเลิก" 
                                                data-ajax-confirm-btn-no-icon="fi fi-close"

                                                data-ajax-confirm-success-target="#provider_id_{{ $key }}" 
                                                data-ajax-confirm-success-target-action="remove">
                                                <i class="fi fi-thrash text-danger"></i>
                                            </a>

                                        </td>

                                    </tr>
                                    <!-- /provider -->
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

                                    <li class="{{ $providers->onFirstPage() ? 'page-item btn-pill disabled' : 'page-item btn-pill' }}">
                                        <a class="page-link" href="{{ $providers->previousPageUrl() }}" tabindex="-1" aria-disabled="true">ก่อนหน้า</a>
                                    </li>
                                    
                                    <li class="page-item active" aria-current="page">
                                        {{ $providers->links() }}
                                    </li>
                                    
                                    <li class="{{ $providers->currentPage() == $providers->lastPage() ? 'page-item disabled' : 'page-item' }}">
                                        <a class="page-link" href="{{ $providers->nextPageUrl() }}">ถัดไป</a>
                                    </li>

                                </ul>

                                <div class="justify-content-end justify-content-center justify-content-md-end text-right">
                                    <small>หน้า : {{ $providers->currentPage() }} / {{ $providers->lastPage() }}</small>
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
@endsection

@section('modal')
    @include('provider.modal.add')
    @include('provider.modal.edit')
@endsection

@section('script')
    <script src="{{ asset('js/app/provider.js') }}"></script>
@endsection