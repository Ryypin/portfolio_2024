<section class="bg-grey-dark">
    <div class="container py-16">
        <div class="flex flex-col items-center pb-14 md:pb-28">
            <h2 class="h2">{!! getLabel('about_title') !!}</h2>
            <div class="h-[2px] w-[90px] bg-yellow"></div>
        </div>
        <div class="py-12 px-6 md:pl-12 background-grey flex flex-col md:flex-row items-start gap-14">
            <div class="md:w-7/12 mb-24">
                <h3 class="h3 mb-5">{!! getLabel('about_subtitle') !!}</h3>
                <p class="mb-8">
                    {!! getLabel('about_text') !!}
                </p>
                <ul class="list-disc mb-10 [&_li]:flex [&_li]:flex-row [&_li]:items-center [&_li]:mb-6">
                    @for ($i = 1; $i <= 5; $i++)
                        <li class="last-of-type:mb-0">
                            <div class="h-4 w-4 bg-yellow rounded-full mr-3"></div>
                            <p class="font-bebas text-2xl text-white w-1/4">{!! getLabel('datas_title_'.$i) !!}</p>
                            <p>: {!! getLabel('datas_text_'.$i) !!}</p>
                        </li>
                    @endfor
                </ul>
                <div class="text-center">
                    <x-button type="primary" text="Download CV" />
                </div>
            </div>
            <div class="w-8/12 md:w-4/12 mx-auto">
                <div class="relative w-fit">
                    <div class="bg-transparent w-full h-full absolute right-9 top-9 border-[18px] border-yellow"></div>
                    <img class="-mt-28 relative z-5" src="{{ asset('img/face-min.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>