<h1 class="title">Average Post Rating</h1>
<p>
    @if ($averageRating > 0)
        {{ $averageRating }} / 5 (From a total of {{ $totalRatings }})
    @else
        No ratings yet, be the first!
    @endif
</p>
