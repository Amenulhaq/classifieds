            @include('classifieds::classified.partial.header')

            <section class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            @include('classifieds::classified.partial.aside')
                        </div>
                        <div class="col-md-9 ">
                            <div class="area">
                                <div class="item">
                                    <div class="feature">
                                        <img class="img-responsive center-block" src="{!!url($classified->defaultImage('images' , 'xl'))!!}" alt="{{$classified->title}}">
                                    </div>
                                    <div class="content">
                                        <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="id">
                    {!! trans('classifieds::classified.label.id') !!}
                </label><br />
                    {!! $classified['id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="parentcategory_id">
                    {!! trans('classifieds::classified.label.parentcategory_id') !!}
                </label><br />
                    {!! $classified['parentcategory_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="category_id">
                    {!! trans('classifieds::classified.label.category_id') !!}
                </label><br />
                    {!! $classified['category_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="country_id">
                    {!! trans('classifieds::classified.label.country_id') !!}
                </label><br />
                    {!! $classified['country_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="state_id">
                    {!! trans('classifieds::classified.label.state_id') !!}
                </label><br />
                    {!! $classified['state_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="district_id">
                    {!! trans('classifieds::classified.label.district_id') !!}
                </label><br />
                    {!! $classified['district_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="area_id">
                    {!! trans('classifieds::classified.label.area_id') !!}
                </label><br />
                    {!! $classified['area_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="location_id">
                    {!! trans('classifieds::classified.label.location_id') !!}
                </label><br />
                    {!! $classified['location_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="user_id">
                    {!! trans('classifieds::classified.label.user_id') !!}
                </label><br />
                    {!! $classified['user_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="user_type">
                    {!! trans('classifieds::classified.label.user_type') !!}
                </label><br />
                    {!! $classified['user_type'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="title">
                    {!! trans('classifieds::classified.label.title') !!}
                </label><br />
                    {!! $classified['title'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="description">
                    {!! trans('classifieds::classified.label.description') !!}
                </label><br />
                    {!! $classified['description'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="ad_status">
                    {!! trans('classifieds::classified.label.ad_status') !!}
                </label><br />
                    {!! $classified['ad_status'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="Features">
                    {!! trans('classifieds::classified.label.Features') !!}
                </label><br />
                    {!! $classified['Features'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="Details">
                    {!! trans('classifieds::classified.label.Details') !!}
                </label><br />
                    {!! $classified['Details'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="price">
                    {!! trans('classifieds::classified.label.price') !!}
                </label><br />
                    {!! $classified['price'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="expire_date">
                    {!! trans('classifieds::classified.label.expire_date') !!}
                </label><br />
                    {!! $classified['expire_date'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="payment_mode">
                    {!! trans('classifieds::classified.label.payment_mode') !!}
                </label><br />
                    {!! $classified['payment_mode'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="email">
                    {!! trans('classifieds::classified.label.email') !!}
                </label><br />
                    {!! $classified['email'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="images">
                    {!! trans('classifieds::classified.label.images') !!}
                </label><br />
                    {!! $classified['images'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="viewcount">
                    {!! trans('classifieds::classified.label.viewcount') !!}
                </label><br />
                    {!! $classified['viewcount'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="slug">
                    {!! trans('classifieds::classified.label.slug') !!}
                </label><br />
                    {!! $classified['slug'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="status">
                    {!! trans('classifieds::classified.label.status') !!}
                </label><br />
                    {!! $classified['status'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="upload_folder">
                    {!! trans('classifieds::classified.label.upload_folder') !!}
                </label><br />
                    {!! $classified['upload_folder'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="created_at">
                    {!! trans('classifieds::classified.label.created_at') !!}
                </label><br />
                    {!! $classified['created_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="updated_at">
                    {!! trans('classifieds::classified.label.updated_at') !!}
                </label><br />
                    {!! $classified['updated_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="deleted_at">
                    {!! trans('classifieds::classified.label.deleted_at') !!}
                </label><br />
                    {!! $classified['deleted_at'] !!}
            </div>
        </div>
    </div>

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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



