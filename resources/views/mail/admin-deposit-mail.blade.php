<x-mail::message>
# {{$deposit->user->username}} Submitted Deposit

Hi Admin,

{{$deposit->user->username}} has submitted a deposit of {{ formatAmount($deposit->amount) }}. Please login the admin to confirm.


Thanks,<br>
{{ site('name') }}
</x-mail::message>
