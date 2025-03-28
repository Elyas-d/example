<h2>{{ $job->title }}</h2>
<p>congrats your job is now posted on our website.</p>
<x-button href="{{ url('/job'.$job->id)}}">view your website</x-button>