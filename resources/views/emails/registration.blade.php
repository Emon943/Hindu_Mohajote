@component('mail::message')
# স্বাগতম, {{ $name }}

আপনার রেজিস্ট্রেশন সম্পন্ন হয়েছে।

- Registration No: **{{ $registration_no }}**
@if($plainPassword)
- Temporary Password: **{{ $plainPassword }}**
@endif

@component('mail::button', ['url' => url('/member-login')])
Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent