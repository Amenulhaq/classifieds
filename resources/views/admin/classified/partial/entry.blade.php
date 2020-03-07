            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('parentcategory_id')
                       -> label(trans('classifieds::classified.label.parentcategory_id'))
                       -> placeholder(trans('classifieds::classified.placeholder.parentcategory_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('category_id')
                       -> label(trans('classifieds::classified.label.category_id'))
                       -> placeholder(trans('classifieds::classified.placeholder.category_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('country_id')
                       -> label(trans('classifieds::classified.label.country_id'))
                       -> placeholder(trans('classifieds::classified.placeholder.country_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('state_id')
                       -> label(trans('classifieds::classified.label.state_id'))
                       -> placeholder(trans('classifieds::classified.placeholder.state_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('district_id')
                       -> label(trans('classifieds::classified.label.district_id'))
                       -> placeholder(trans('classifieds::classified.placeholder.district_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('area_id')
                       -> label(trans('classifieds::classified.label.area_id'))
                       -> placeholder(trans('classifieds::classified.placeholder.area_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('location_id')
                       -> label(trans('classifieds::classified.label.location_id'))
                       -> placeholder(trans('classifieds::classified.placeholder.location_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('title')
                       -> label(trans('classifieds::classified.label.title'))
                       -> placeholder(trans('classifieds::classified.placeholder.title'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('description')
                       -> label(trans('classifieds::classified.label.description'))
                       -> placeholder(trans('classifieds::classified.placeholder.description'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::select('ad_status')
                    -> options(trans('classifieds::classified.options.ad_status'))
                    -> label(trans('classifieds::classified.label.ad_status'))
                    -> placeholder(trans('classifieds::classified.placeholder.ad_status'))!!}
               </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('Features')
                       -> label(trans('classifieds::classified.label.Features'))
                       -> placeholder(trans('classifieds::classified.placeholder.Features'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('Details')
                       -> label(trans('classifieds::classified.label.Details'))
                       -> placeholder(trans('classifieds::classified.placeholder.Details'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::decimal('price')
                       -> label(trans('classifieds::classified.label.price'))
                       -> placeholder(trans('classifieds::classified.placeholder.price'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   <div class='form-group'>
                     <label for='expire_date' class='control-label'>{!!trans('classifieds::classified.label.expire_date')!!}</label>
                     <div class='input-group pickdate'>
                        {!! Form::text('expire_date')
                        -> placeholder(trans('classifieds::classified.placeholder.expire_date'))
                        ->raw()!!}
                       <span class='input-group-addon'><i class='fa fa-calendar'></i></span>
                     </div>
                   </div>
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('payment_mode')
                       -> label(trans('classifieds::classified.label.payment_mode'))
                       -> placeholder(trans('classifieds::classified.placeholder.payment_mode'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::email('email')
                       -> label(trans('classifieds::classified.label.email'))
                       -> placeholder(trans('classifieds::classified.placeholder.email'))!!}
                </div>

                <div class='col-md-12 col-sm-12'>
                    <div class="form-group">
                        <label for="images" class="control-label col-lg-12 col-sm-12 text-left">
                         {{trans('classifieds::classified.label.images') }}
                         </label>
                        <div class='col-lg-3 col-sm-12'>
                            {!! $classified->files('images', 10)
                            ->mime(config('filer.image_extensions'))
                            ->url($classified->getUploadUrl('images'))
                            ->dropzone()!!}
                        </div>
                        <div class='col-lg-7 col-sm-12'>
                            {!! $classified->files('images')
                             ->editor()!!}
                        </div>
                    </div>
                </div>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('viewcount')
                       -> label(trans('classifieds::classified.label.viewcount'))
                       -> placeholder(trans('classifieds::classified.placeholder.viewcount'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::select('status')
                    -> options(trans('classifieds::classified.options.status'))
                    -> label(trans('classifieds::classified.label.status'))
                    -> placeholder(trans('classifieds::classified.placeholder.status'))!!}
               </div>

                <div class='col-md-12 col-sm-12'>
                    <div class="form-group">
                        <label for="file" class="control-label col-lg-12 col-sm-12 text-left"> {{trans('classifieds::classified.label.upload_folder') }}
                        </label>
                        <div class='col-lg-3 col-sm-12'>
                            {!! $classified->files('file')
                            ->mime(config('filer.allowed_extensions'))
                            ->url($classified->getUploadUrl('file'))
                            ->dropzone()!!}
                        </div>
                        <div class='col-lg-7 col-sm-12'>
                            {!! $classified
                            ->files('file')
                            ->editor()!!}
                        </div>
                    </div>
                </div>
            </div>