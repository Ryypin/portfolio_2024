<section class="py-28 md:py-40 background-grey">
    <div class="container">
        <div class="md:w-7/12">
            <div class="mb-8">
                <h1 class="flex flex-col items-start mb-5">
                    {!! getLabel('header_title') !!}
                </h1>
                <p class="text-white">
                    {!! getLabel('header_text') !!}
                </p>
            </div>
            <div class="flex flex-row items-center gap-8">
                <x-button type="secondary" text="{!! getLabel('header_cta_work') !!}" link="#projectsSection" />
                <x-button type="primary" text="{!! getLabel('header_cta_hire') !!}" />
            </div>
        </div>
    </div>
</section>