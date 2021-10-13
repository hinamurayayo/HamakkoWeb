<?php App::setLocale(config('app.http_status_code_locale')); ?>

@extends('errors.layouts.common')

@section('title', __('http_status_code.503.title'))

@section('heading', __('http_status_code.503.heading'))

@section('description', __('http_status_code.503.description'))
