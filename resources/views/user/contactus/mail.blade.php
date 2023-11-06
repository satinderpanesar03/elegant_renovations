<x-mail::message>
Dear Admin

You got a contact us form enquiry {{$data['name']}} ~ {{$data['email']}}.

<p>{{$data['message']}}</p><br>


Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
