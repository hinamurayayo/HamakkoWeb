<?php App::setLocale(config('app.http_status_code_locale')); ?>

@extends('errors.layouts.common')

@section('title', __('http_status_code.404.title'))

@section('heading', __('http_status_code.404.heading'))

@section('description', __('http_status_code.404.description'))
