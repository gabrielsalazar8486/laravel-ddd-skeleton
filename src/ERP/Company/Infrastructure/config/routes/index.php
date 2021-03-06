<?php

use Illuminate\Support\Facades\Route;
use Medine\Apps\ERP\Backend\Controller\Company\CompanyBreadcrumbsPostController;
use Medine\Apps\ERP\Backend\Controller\Company\CompanyPostController;
use Medine\Apps\ERP\Backend\Controller\Company\CompanyPutController;
use Medine\ERP\Company\Infrastructure\Controller\CompaniesGetController;
use Medine\ERP\Company\Infrastructure\Controller\CompanyGetController;

Route::middleware('auth:api')->group(function () {
    Route::post('/company', CompanyPostController::class);
    Route::post('/company/breadcrumbs', CompanyBreadcrumbsPostController::class);
    Route::put('/company/{id}', CompanyPutController::class);
    Route::get('/company/{id}', CompanyGetController::class);
    Route::get('/company', CompaniesGetController::class);
});
