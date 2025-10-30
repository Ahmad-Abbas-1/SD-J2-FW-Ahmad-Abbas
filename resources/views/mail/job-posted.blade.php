<h2>{{ $job->title }} </h2>
<p>
    Congrats! Your job listing has been posted successfully.
</p>

<p>
    <a href="{{ url('/jobs/' . $job->id) }}">
        View Job Listing
    </a>
</p>