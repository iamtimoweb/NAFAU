@component('mail::message')
## Name: {{$firstname}} {{$lastname}}
## Subject: {{$subject}}

## Message:
{{$message}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
