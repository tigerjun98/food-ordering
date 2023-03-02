<table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0"
       style="width:100%; background-color:#ffffff;border-collapse:separate !important; border-spacing:0;color:#242128; margin:0; padding:30px; padding-top: 0px; padding-bottom: 15px;"
       class="{{ $class ?? '' }}"
       heigth="auto"
>
    <tbody>
    @if(isset($title))
        <x-admin.component.prints.modules.title :title="$title" />
    @endif
    {{ $body ?? '' }}
    </tbody>
</table>
