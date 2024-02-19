<div>
    @foreach ($articles as $article)
        <div>
            <a href="{{ route('articles.show', $article) }}">{{ $article->title }}</a> {{ $article->trend_score }}
        </div>
    @endforeach
</div>
