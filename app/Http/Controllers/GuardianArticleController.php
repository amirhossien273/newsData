<?php

namespace App\Http\Controllers;

use App\Services\Article\InsertDataArticleService;
use App\Services\Article\WebSite\GuardianApiArticleService;

class GuardianArticleController extends Controller
{
    public function __invoke(InsertDataArticleService $insertDataArticleService, GuardianApiArticleService $guardianApiArticleService)
    {

        $insertDataArticleService->handel($guardianApiArticleService);
        return redirect()->back()->with("success", "Insert Articles Successfuly!");

    }
}
