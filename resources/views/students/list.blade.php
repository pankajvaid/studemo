@extends('admin.layouts.default')
{{-- Page title --}}
@section('title')
Product Manager::CRM
@parent
@stop
{{-- page level styles --}}
@section('header_styles')
<link href="{{ asset('assets/css/pages/form2.css') }}" rel="stylesheet"/>
<link href="{{ asset('assets/css/pages/form3.css') }}" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" />
<link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet"/>
@stop
{{-- Page content --}}
@section('content')
<section class="content-header">
   <h1>Product Manager</h1>
   <ol class="breadcrumb">
      <li>
         <a href="javascript::void">
         <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
         Dashboard
         </a>
      </li>
      <li>Product Manager</li>
      <li class="active">Product</li>
   </ol>
</section>
<!-- Main content -->
<section class="content paddingleft_right15">
   <div class="row">
      <div class="panel panel-primary ">
         <div class="panel-heading clearfix">
            <h4 class="panel-title pull-left"> <i class="livicon" data-name="users" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
               Product List
            </h4>
         @if(App\Models\Permission::checkPermission("product.add"))
            <div class="pull-right">
               <a href="{{route('product.add')}}" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-plus"></span> Add New Product</a>
            </div>
         @endif   
         </div>
         <div class="panel-body">
            <table class="table table-bordered " id="table1">
               <thead>
                  <tr class="filters">
                     <th>ID</th>
                     <th>Product Name</th>
                     <th>SKU Code</th>
                     <th>Measurement Value</th>
                     <th>Created Date</th>
                     <th>Actions</th>
                  </tr>
               </thead>
               <tbody>
               </tbody>
            </table>
         </div>
      </div>
   </div>
   <!-- row-->
</section>
@stop
{{-- page level scripts --}}
@section('footer_scripts')
<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/assets/js/admin/product.js') }}"></script>
<div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content"></div>
   </div>
</div>
<script>
   var datatbleurl= "{!! route('product.list.data') !!}";
</script>
@stop