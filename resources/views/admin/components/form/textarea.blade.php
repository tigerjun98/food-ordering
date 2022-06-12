<label class="form-group has-float-label {{isset($style) ? $style : ''}}">
    <label>{{$label ?? ''}}</label>
    <textarea class="form-control" rows="2" name="{{$name}}"  {{isset($required) ? '' : 'required' }} {{isset($disabled) ? 'disabled' : '' }}>@if(isset($value) && $value){{$value}}@elseif(isset($data) && $data){{$data[$name]}}@endif</textarea>
    <small>{{$small ?? ''}}</small>
</label>

