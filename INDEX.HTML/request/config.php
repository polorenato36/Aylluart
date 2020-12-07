<?php


-------------------------------------------------------------------------
Routes
-----------------------------------------------------------------------



Route::get('/','HomeController@Nuevo');
Route::get('/dashboard','DashboardController@Nuevo');
Route::resource('/expense_reports','ExpenseReportController');
Route::get('/expense_report/{id}/confirmDelete','ExpenseReportController@ConfirmDelete');