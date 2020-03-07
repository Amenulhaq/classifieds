    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('classifieds::classified.name') !!}</a></li>
            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#classifieds-classified-entry' data-href='{{guard_url('classifieds/classified/create')}}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }}</button>
                @if($classified->id )
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#classifieds-classified-entry' data-href='{{ guard_url('classifieds/classified') }}/{{$classified->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#classifieds-classified-entry' data-datatable='#classifieds-classified-list' data-href='{{ guard_url('classifieds/classified') }}/{{$classified->getRouteKey()}}' >
                <i class="fa fa-times-circle"></i> {{ trans('app.delete') }}
                </button>
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('classifieds-classified-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('classifieds/classified'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('classifieds::classified.name') !!}  [{!! $classified->name !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('classifieds::admin.classified.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>