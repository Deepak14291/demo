<x-mail::message>

    Hello, a new user has submitted a contact from on your website.

    Name: {{ $data['name'] }}
    Email: {{ $data['email'] }}
    Message: {{ $data['message'] }}

    Thanks,
    Deepak

</x-mail::message>