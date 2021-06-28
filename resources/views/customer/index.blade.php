@extends('layouts.coreLayout')

@section('title', 'Customer')

@section('content')
<div class="row gutters-sm">

    <!-- inbox list -->
    <div class="col-12">

        <!-- portlet -->
        <div class="portlet">
            
            <!-- portlet : header -->
            <div class="portlet-header border-bottom">

                <div class="float-end">
                    <button type="button" class="btn btn-sm btn-primary btn-pill px-2 py-1 fs--15 mt--n3" data-toggle="modal" data-target="#customerAddModal">
                        + Add New Customer
                    </button>
                </div>

                <span class="d-block text-muted text-truncate font-weight-medium pt-1">
                    All Customer
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
                                    <th class="w--300 hidden-lg-down">COMPANY</th>
                                    <th class="w--150 hidden-lg-down text-center">MOBILE</th>
                                    <th class="w--150 hidden-lg-down text-center">CREATE</th>
                                    <th class="w--300 hidden-lg-down">DESCRIPTION</th>
                                    <th class="w--60">&nbsp;</th>
                                </tr>
                            </thead>

                            <tbody id="item_list">
                                @foreach ($customers as $key => $customer)

                                    <!-- customer -->
                                    <tr id="customer_id_{{ $key }}" class="text-dark">

                                        <td class="hidden-lg-down text-center">
                                            {{ $key + 1 }}.
                                        </td>

                                        <td style="line-height: 17px;">

                                            <p class="mb-0 text-dark" id="customer_name"><strong>{{ $customer->name }}</strong></p>

                                            <!-- MOBILE ONLY -->
                                            <div class="fs--13 d-block d-xl-none">
                                                <div class="fs--13 d-block d-xl-none">
                                                    <strong>COMPANY :</strong> {{ $customer->company_info }}
                                                </div>
                                                <div class="fs--13 d-block d-xl-none">
                                                    <strong>MOBILE :</strong> {{ $customer->mobile }}
                                                </div>
                                                <div class="fs--13 d-block d-xl-none">
                                                    <strong>CREATE :</strong> {{ $customer->created_at->format('d/m/Y') }}
                                                </div>
                                                <div class="fs--13 d-block d-xl-none">
                                                    <strong>DESC :</strong> {{ $customer->description }}
                                                </div>
                                            </div>
                                            <!-- /MOBILE ONLY -->

                                        </td>

                                        <td class="hidden-lg-down" id="customer_company">
                                            {{ $customer->company_info }}
                                        </td>

                                        <td class="hidden-lg-down text-center" id="customer_mobile">
                                            {{ $customer->mobile }}
                                        </td>

                                        <td class="hidden-lg-down text-center">
                                            {{ $customer->created_at->format('d/m/Y') }}
                                        </td>

                                        <td class="hidden-lg-down" id="customer_description">
                                            {{ $customer->description }}
                                        </td>

                                        <td class="text-align-end d-flex">

                                            <a class="text-truncate mr-4" href="#!" title="แก้ไข" data-toggle="modal" data-target="#customerEditModal"
                                                onClick="setDataEditCustomer({{ $customer->id }})"
                                            >
                                                <i class="fi fi-pencil"></i>
                                            </a>

                                            <a	 href="#!" 
                                                class="text-truncate js-ajax-confirm" 
                                                data-href="/customers/delete/{{ $customer->id }}"
                                                data-ajax-confirm-body="ยืนยันการลบลูกค้า {{ $customer->name }} ?"

                                                data-ajax-confirm-mode="ajax" 
                                                data-ajax-confirm-method="GET" 

                                                data-ajax-confirm-btn-yes-class="btn-sm btn-danger" 
                                                data-ajax-confirm-btn-yes-text="ลบข้อมูล" 
                                                data-ajax-confirm-btn-yes-icon="fi fi-check" 

                                                data-ajax-confirm-btn-no-class="btn-sm btn-light" 
                                                data-ajax-confirm-btn-no-text="ยกเลิก" 
                                                data-ajax-confirm-btn-no-icon="fi fi-close"

                                                data-ajax-confirm-success-target="#customer_id_{{ $key }}" 
                                                data-ajax-confirm-success-target-action="remove">
                                                <i class="fi fi-thrash text-danger"></i>
                                            </a>

                                        </td>

                                    </tr>
                                    <!-- /customer -->
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

                                    <li class="{{ $customers->onFirstPage() ? 'page-item btn-pill disabled' : 'page-item btn-pill' }}">
                                        <a class="page-link" href="{{ $customers->previousPageUrl() }}" tabindex="-1" aria-disabled="true">ก่อนหน้า</a>
                                    </li>
                                    
                                    <li class="page-item active" aria-current="page">
                                        {{ $customers->links() }}
                                    </li>
                                    
                                    <li class="{{ $customers->currentPage() == $customers->lastPage() ? 'page-item disabled' : 'page-item' }}">
                                        <a class="page-link" href="{{ $customers->nextPageUrl() }}">ถัดไป</a>
                                    </li>

                                </ul>

                                <div class="justify-content-end justify-content-center justify-content-md-end text-right">
                                    <small>หน้า : {{ $customers->currentPage() }} / {{ $customers->lastPage() }}</small>
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
    @include('customer.modal.add')
    @include('customer.modal.edit')
@endsection

@section('script')
    <script src="{{ asset('js/app/customer.js') }}"></script>
@endsection