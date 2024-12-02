<section id="projectsSection" class="background-grey">
    <div class="container py-16">
        <div class="flex flex-col items-center pb-8">
            <h2 class="h2">Portfolio</h2>
            <div class="h-[2px] w-[90px] bg-yellow"></div>
        </div>
        <div class="background-grey flex flex-row items-start gap-14">
            <div class="grid md:grid-cols-2 xl:grid-cols-3 grid-rows-6 md:grid-rows-2 gap-6 w-full">
                @foreach($projects as $project)
                    <a href={{ getLabel('project_url_'.$project->id) }}>
                        <div class="bg-white h-[280px] overflow-hidden relative projectCard">
                            <div class="relative z-10 p-8 bg-grey-dark bg-opacity-95 cursor-pointer opacity-0 h-full duration-200 projectInfos">
                                <h3 class="h3">
                                    {{ getLabel('project_title_'.$project->id) }}
                                </h3>
                                <p class="text-yellow font-bold">
                                    {{ getLabel('project_code_'.$project->id) }}
                                </p>
                                <p>
                                    {{ getLabel('project_text_'.$project->id) }}
                                </p>
                            </div>
                            {{-- {{ $project->nom }} --}}
                            <div class="absolute top-0 left-0 right-0">
                                <img class="" src="{{ asset('img/'.$project->nom.'.png') }}" alt="">
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>