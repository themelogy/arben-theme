<div class="row">
    <fieldset>
        <legend>Gösterim Ayarları</legend>
        <div class="col-md-12 form-inline">
            <div class="form-group" style="margin-right: 10px;">
                <label>
                    {!! Form::checkbox("settings[treatments]", 1, old('settings.treatments', isset($page->settings->treatments) ? $page->settings->treatments : null), ['class'=>'flat-blue']) !!}
                    &nbsp; Hizmetlerde Göster
                </label>
            </div>
            <div class="form-group" style="margin-right: 10px;">
                <label>
                    {!! Form::checkbox("settings[new_treatment]", 1, old('settings.new_treatment', isset($page->settings->new_treatment) ? $page->settings->new_treatment : null), ['class'=>'flat-blue']) !!}
                    &nbsp; Yeni Hizmetlerde Göster
                </label>
            </div>
            <div class="form-group" style="margin-right: 10px;">
                <label>
                    {!! Form::checkbox("settings[popular]", 1, old('settings.popular', isset($page->settings->popular) ? $page->settings->popular : null), ['class'=>'flat-blue']) !!}
                    &nbsp; Popüler Hizmetlerde Göster
                </label>
            </div>
        </div>

    </fieldset>
</div>