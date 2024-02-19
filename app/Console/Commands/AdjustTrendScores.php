<?php

namespace App\Console\Commands;

use App\Models\Article;
use Illuminate\Console\Command;

class AdjustTrendScores extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:adjust-trend-scores';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Article::each(function (Article $article) {
            $article->updateQuietly([
                'trend_score' => $article->trend_score * 0.97
            ]);
        });
    }
}
