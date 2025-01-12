<x-mail::message>
# {{$withdrawal->user->username}} Submitted Withdrawal

Hi Admin,

{{$withdrawal->user->username}} has submitted a withdrawal request. Please login the admin to confirm.


Thanks,<br>
{{ site('name') }}
</x-mail::message>
