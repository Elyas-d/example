<h2>{{ $job->title }}</h2>
<div><p>regarding your job submission </p></div>
<p>congrats your job is now posted on our website.</p>

<x-button href="{{ url('/job'.$job->id)}}">view your website</x-button>
<footer><p>2025</p></footer>