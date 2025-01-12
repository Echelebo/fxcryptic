<x-mail::message>
# Welcome to {{ site('name') }}

Hi {{ $user->name }},

Your account with email {{ $user->email }} has been created successfully.

By signing up for {{ site('name') }}, you're well on your way to effortless trading and amplifying returns.

{{ site('name') }} uses advanced Ai robots trained on extensive trading data and algorithms to analyze market trends and execute profitable trades with high precision. And we'll be there every step of the way to guide you on this journey.

<br>

<hr />

<br>

# How It Works

Step 1: Fund Your Account<br>
Add money to your {{ site('name') }} following our user friendly funding system.

Step 2: Activate Trading Bot<br>
Select from our wide range of AI trading bots and activate a portfolio.

Step 3: Withdraw<br>
Withdraw your capital and profits to your external wallet at anytime.


<p align="center"><font size="2">If you have any questions, please email us at {{ site('email') }} or chat with a real live human. They can answer questions about your account or help you with your trading steps.</font></p>



Thanks,<br>
{{ site('name') }}
</x-mail::message>
