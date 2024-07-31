<x-layout>
    @livewire('navbar')

    <div class="flex justify-evenly selection items-center my-28 ">
        <div>
            <div class="w-[576px] h-[585px] flex justify-center items-center border-4 rounded-t-full border-gray-200">
                <div
                    class="w-[443px] h-[451px]  border-4 flex justify-center items-center rounded-t-full border-gray-200">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/3/32/Kit_harrington_by_sachyn_mital_%28cropped_2%29.jpg"
                        class="w-[443px] h-[442px] rounded-t-full" alt="">
                </div>

            </div>
        </div>



        <div>
            <p class="font-sevillana text-[6rem] ">Who is Youssef <span class="text-orange-500">?</span></p>
            <p class="text-xl ms-5 w-[600px] group ">Youssef is a Junior <span class="text-orange-500">UI/UX</span>
                designer and <span class="text-orange-500">full-stack web
                    developer</span> from Alexandria, Egypt. <br>
                <span class="group-hover:text-orange-500"> Currently accepting clients and full time
                    opportunities.</span>
            </p>

            <p class="text-xl ms-5 mt-10 w-[600px]">I’ve graduated high school [<span class="text-orange-500">WE
                    ATS</span>].
                WE is an applied technology school which its curriculum is all about technology,
                being creative and acquire the soft skills needed in the jop market to be First choice after every job
                interview</p>

            <p class="text-xl ms-5 mt-10 w-[600px]">Youssef is passionate in learning new tech, video games and making
                music [Rnb beats]</p>
        </div>
    </div>

@livewire('contact-form')


</x-layout>