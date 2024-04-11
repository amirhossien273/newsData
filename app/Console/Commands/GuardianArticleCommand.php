<?php

namespace App\Console\Commands;

use App\Services\Article\InsertDataArticleService;
use App\Services\Article\WebSite\GuardianApiArticleService;
use Illuminate\Console\Command;

class GuardianArticleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:guardian-article-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(InsertDataArticleService $insertDataArticleService, GuardianApiArticleService $guardianApiArticleService)
    {
        $insertDataArticleService->handel($guardianApiArticleService);
    }
}
