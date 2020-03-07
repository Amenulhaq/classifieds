<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file-text-o"></i> {!! trans('classifieds::classified.name') !!} <small> {!! trans('app.manage') !!} {!! trans('classifieds::classified.names') !!}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('classifieds::classified.names') !!}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div id='classifieds-classified-entry'>
    </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                    <li class="{!!(request('status') == '')?'active':'';!!}"><a href="{!!guard_url('classifieds/classified')!!}">{!! trans('classifieds::classified.names') !!}</a></li>
                    <li class="{!!(request('status') == 'archive')?'active':'';!!}"><a href="{!!guard_url('classifieds/classified?status=archive')!!}">Archived</a></li>
                    <li class="{!!(request('status') == 'deleted')?'active':'';!!}"><a href="{!!guard_url('classifieds/classified?status=deleted')!!}">Trashed</a></li>
                    <li class="pull-right">
                    <span class="actions">
                    <!--   
                    <a  class="btn btn-xs btn-purple"  href="{!!guard_url('classifieds/classified/reports')!!}"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-sm hidden-xs"> Reports</span></a>
                    @include('classifieds::admin.classified.partial.actions')
                    -->
                    @include('classifieds::admin.classified.partial.filter')
                    @include('classifieds::admin.classified.partial.column')
                    </span> 
                </li>
            </ul>
            <div class="tab-content">
                <table id="classifieds-classified-list" class="table table-striped data-table">
                    <thead class="list_head">
                        <th style="text-align: right;" width="1%"><a class="btn-reset-filter" href="#Reset" style="display:none; color:#fff;"><i class="fa fa-filter"></i></a> <input type="checkbox" id="classifieds-classified-check-all"></th>
                        <th data-field="parentcategory_id">{!! trans('classifieds::classified.label.parentcategory_id')!!}</th>
                    <th data-field="category_id">{!! trans('classifieds::classified.label.category_id')!!}</th>
                    <th data-field="country_id">{!! trans('classifieds::classified.label.country_id')!!}</th>
                    <th data-field="state_id">{!! trans('classifieds::classified.label.state_id')!!}</th>
                    <th data-field="district_id">{!! trans('classifieds::classified.label.district_id')!!}</th>
                    <th data-field="area_id">{!! trans('classifieds::classified.label.area_id')!!}</th>
                    <th data-field="title">{!! trans('classifieds::classified.label.title')!!}</th>
                    </thead>
                </table>
            </div>
        </div>
    </section>
</div>

<script type="text/javascript">

var oTable;
var oSearch;
$(document).ready(function(){
    app.load('#classifieds-classified-entry', '{!!guard_url('classifieds/classified/0')!!}');
    oTable = $('#classifieds-classified-list').dataTable( {
        'columnDefs': [{
            'targets': 0,
            'searchable': false,
            'orderable': false,
            'className': 'dt-body-center',
            'render': function (data, type, full, meta){
                return '<input type="checkbox" name="id[]" value="' + data.id + '">';
            }
        }], 
        
        "responsive" : true,
        "order": [[1, 'asc']],
        "bProcessing": true,
        "sDom": 'R<>rt<ilp><"clear">',
        "bServerSide": true,
        "sAjaxSource": '{!! guard_url('classifieds/classified') !!}',
        "fnServerData" : function ( sSource, aoData, fnCallback ) {

            $.each(oSearch, function(key, val){
                aoData.push( { 'name' : key, 'value' : val } );
            });
            app.dataTable(aoData);
            $.ajax({
                'dataType'  : 'json',
                'data'      : aoData,
                'type'      : 'GET',
                'url'       : sSource,
                'success'   : fnCallback
            });
        },

        "columns": [
            {data :'id'},
            {data :'parentcategory_id'},
            {data :'category_id'},
            {data :'country_id'},
            {data :'state_id'},
            {data :'district_id'},
            {data :'area_id'},
            {data :'title'},
        ],
        "pageLength": 25
    });

    $('#classifieds-classified-list tbody').on( 'click', 'tr td:not(:first-child)', function (e) {
        e.preventDefault();

        oTable.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
        var d = $('#classifieds-classified-list').DataTable().row( this ).data();
        $('#classifieds-classified-entry').load('{!!guard_url('classifieds/classified')!!}' + '/' + d.id);
    });

    $('#classifieds-classified-list tbody').on( 'change', "input[name^='id[]']", function (e) {
        e.preventDefault();

        aIds = [];
        $(".child").remove();
        $(this).parent().parent().removeClass('parent'); 
        $("input[name^='id[]']:checked").each(function(){
            aIds.push($(this).val());
        });
    });

    $("#classifieds-classified-check-all").on( 'change', function (e) {
        e.preventDefault();
        aIds = [];
        if ($(this).prop('checked')) {
            $("input[name^='id[]']").each(function(){
                $(this).prop('checked',true);
                aIds.push($(this).val());
            });

            return;
        }else{
            $("input[name^='id[]']").prop('checked',false);
        }
        
    });


    $(".reset_filter").click(function (e) {
        e.preventDefault();
        $("#form-search")[ 0 ].reset();
        $('#form-search input,#form-search select').each( function () {
          oTable.search( this.value ).draw();
        });
        $('#classifieds-classified-list .reset_filter').css('display', 'none');

    });


    // Add event listener for opening and closing details
    $('#classifieds-classified-list tbody').on('click', 'td.details-control', function (e) {
        e.preventDefault();
        var tr = $(this).closest('tr');
        var row = table.row( tr );
 
        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        } else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    });

});
</script>