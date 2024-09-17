@extends('layout')

@section('content')
    <section class="py-40 background-grey">
        <div class="container">
            <div class="w-7/12">
                <div class="mb-8">
                    <h1 class="flex flex-col items-start">
                        {!! getLabel('header_title') !!}
                    </h1>
                    <p class="text-white">
                        {!! getLabel('header_text') !!}
                    </p>
                </div>
                <div class="flex flex-row items-center gap-8">
                    <x-button type="secondary" text="{!! getLabel('header_cta_work') !!}" />
                    <x-button type="primary" text="{!! getLabel('header_cta_hire') !!}" />
                </div>
            </div>
        </div>
    </section>

    <section class="bg-grey-dark">
        <div class="container py-16">
            <div class="flex flex-col items-center pb-28">
                <h2 class="h2">About me</h2>
                <div class="h-[2px] w-[90px] bg-yellow"></div>
            </div>
            <div class="py-12 pl-12 background-grey">
                <div class="w-6/12">
                    <h3 class="h3">My name is <span class="text-yellow">Steven Harris</span></h3>
                    <p class="mb-8">
                        Ah, honey, your first novel. Weight has nothing to do with it. George McFly? Oh, he's kinda cute and all, but, well, I think a man should be strong, so he could stand up for himself, and protect the woman he loves. Don't you? I over slept, look I need your help. I have to ask Lorraine out but I don't know how to do it. I have to ask Lorraine out but I don't know how to do it. The flux capacitor.
                    </p>
                    <ul class="list-disc mb-10 [&_li]:flex [&_li]:flex-row [&_li]:items-center [&_li]:mb-6">
                        @for ($i = 0; $i <= 5; $i++)
                            <li class="last-of-type:mb-0">
                                <div class="h-4 w-4 bg-yellow rounded-full mr-3"></div>
                                <p class="font-bebas text-2xl text-white w-1/4">Date of birth</p>
                                <p>: November 14</p>
                            </li>
                        @endfor
                    </ul>
                    <div class="text-center">
                        <x-button type="primary" text="Download CV" />
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection