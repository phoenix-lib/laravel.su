@extends('layouts.master')

@php
/**
 * @var \App\Entity\Version $version
 * @var \App\Entity\Documentation $page
 * @var \App\Entity\Documentation $menu
 */
@endphp

@section('title'){{ $page->title }} (Laravel {{ $version->name }})@stop
@section('description')Русская документация Laravel {{ $version->name }} - {{ $page->title }}@stop
@section('keywords'){{ $page->getKeywordsString() }}@stop

@push('header')
    @include('partials.version-selector', [
        'version' => $version
    ])
@endpush

@section('content')
    <section class="container documentation">
        <aside class="documentation-menu">
            {!! $menu !!}
        </aside>

        <article class="documentation-content">
            @include('page.docs.partials.translation-status', [
                'page' => $page
            ])

            <div class="px-4 pb-4">
                <div class="docs_content">
                    {!! $page !!}
                </div>
            </div>
        </article>
    </section>
@endsection