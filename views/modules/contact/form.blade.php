{!! Form::open(['route' => 'contact.send', 'class' => 'contact', 'method'=>'post']) !!}
{!! Form::hidden('from', Request::path()) !!}
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <div class="input-group @if($errors->has('first_name')) has-error @endif">
                    {!! Form::text('first_name', old('first_name'), ['placeholder'=>trans('contact::contacts.form.first_name'), 'class'=>'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <div class="input-group @if($errors->has('last_name')) has-error @endif">
                    {!! Form::text('last_name', old('last_name'), ['placeholder'=>trans('contact::contacts.form.last_name'), 'class'=>'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <div class="input-group @if($errors->has('email')) has-error @endif">
                    {!! Form::text('email', old('email'), ['placeholder'=>trans('contact::contacts.form.email'), 'class'=>'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <div class="input-group @if($errors->has('phone')) has-error @endif">
                    {!! Form::text('phone', old('phone'), ['placeholder'=>trans('contact::contacts.form.phone'), 'class'=>'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <div class="input-group @if($errors->has('enquiry')) has-error @endif">
                    {!! Form::textarea('enquiry', old('enquiry'), ['placeholder'=>trans('contact::contacts.form.enquiry'), 'class'=>'form-control', 'rows'=>'4']) !!}
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    {!! Captcha::display() !!}
                    <div class="@if ($errors->has('g-recaptcha-response')) has-error @endif">
                        <span class="help-block red-text"><small>{!! $errors->first('g-recaptcha-response') !!}</small></span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <button type="submit" name="submit" class="site-button">{{ trans('contact::contacts.form.submit') }}</button>
                </div>
            </div>
        </div>
    </div>
{!! Form::close() !!}

@push('js-inline')
    {!! Captcha::script() !!}
@endpush