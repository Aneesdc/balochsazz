<x-mail::message>
# hello my name is muhammad anees

<h3>Name: {{$data['name']}}</h3>
<h3>Email: {{$data['email']}}</h3>
<h3>Message: {{$data['message']}}</h3>

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
