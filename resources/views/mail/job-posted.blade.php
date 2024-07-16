<h2>
  {{ $job->title }}
</h2>

<p>
Congratulations! Your job has been posted.
</p>

<p>
<a href="{{ url('jobs/' . $job->id) }}">View Job</a>
</p>
