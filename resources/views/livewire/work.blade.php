<x-layout>

    @livewire('navbar')

    <p class="text-5xl font-sevillana ms-44 mt-10">Websites</p>

<div class="flex flex-col items-center">
    
    <div class="flex  gap-5 w-[80%] justify-between my-10">
        
        <div class="bg-transparent border-4   w-1/3 h-[600px] border-gray-200 shadow-md hover:border-orange-500 transition-colors duration-300">
            <img src="{{asset('assets/Desktop-1.png')}}" alt="Image" class="w-full  object-cover " class="border-b-4">
        <div class="p-6 ">
            <h2 class="text-gray-200 font-bold text-xl mb-2">First Landing page</h2>
            <p class="text-gray-500">Developing this page presented a valuable opportunity to apply my coding skills to a tangible project. The two-day timeframe provided a focused challenge that allowed for the development of problem-solving and time management abilities. </p>
            <div class="flex  justify-center my-10">
        <a href="#" target="_blank" class=" mx-5 font-sevillana text-orange-500 text-xl border-[4px] rounded-md p-2 transition-all ease-in-out duration-500 hover:rounded-none hover:border-orange-500 hover:text-gray-200  border-gray-200 ">More Details</a>

    </div>
        </div>
    </div>
    <div class="bg-transparent border-4 w-1/3 h-[600px] border-gray-200 shadow-md hover:border-orange-500 transition-colors duration-300">
        <img src="{{asset('assets/cinemaCover.png')}}" alt="Image" class="w-full  object-cover ">
        <div class="p-6">
            <h2 class="text-gray-200 font-bold text-xl mb-2">Cinema Hub</h2>
            <p class="text-gray-500">Dive into a world of cinematic excitement as we bring you the latest buzzworthy movies, captivating TV shows, and rising star actors. Stay ahead of the curve and explore what everyone's talking about.</p>
            <div class="flex justify-center  my-16">
        <a href="#" target="_blank" class=" mx-5 font-sevillana text-orange-500 text-xl border-[4px] rounded-md p-2 transition-all ease-in-out duration-500 hover:rounded-none hover:border-orange-500 hover:text-gray-200  border-gray-200 ">More Details</a>

    </div>
        </div>
    </div>
    <div class="bg-transparent border-4 w-1/3 h-[600px] border-gray-200 shadow-md hover:border-orange-500 transition-colors duration-300">
        <img src="{{asset('assets/seccover.png')}}" alt="Image" class="w-full  object-cover ">
        <div class="p-6">
            <h2 class="text-gray-200 font-bold text-xl mb-2">Berimbolo Security</h2>
            <p class="text-gray-500">Berimbolo Security is a home and small business security company.
            This website is one task of Pearson tasks we had in our school </p>
            <div class="flex justify-center  my-[88px]">
        <a href="#" target="_blank" class=" mx-5 font-sevillana text-orange-500 text-xl border-[4px] rounded-md p-2 transition-all ease-in-out duration-500 hover:rounded-none hover:border-orange-500 hover:text-gray-200  border-gray-200 ">More Details</a>

    </div>
        </div>
    </div> 

 
    
</div>
    
    <div class="flex   w-[80%] justify-between ">
        
        <div class="bg-transparent border-4 w-[392px] h-[600px] border-gray-200 shadow-md hover:border-orange-500 transition-colors duration-300">
            <img src="{{asset('assets/johnsnowCover.png')}}" alt="Image" class="w-full  object-cover ">
        <div class="p-6">
            <h2 class="text-gray-200 font-bold text-xl mb-2">Personal Portfolio</h2>
            <p class="text-gray-500">This website is an example of my work in designing and developing personal websites.</p>
            <div class="flex justify-center  my-[130px]">
        <a href="#" target="_blank" class=" mx-5 font-sevillana text-orange-500 text-xl border-[4px] rounded-md p-2 transition-all ease-in-out duration-500 hover:rounded-none hover:border-orange-500 hover:text-gray-200  border-gray-200 ">More Details</a>

    </div>
        </div>
    </div>
   
  
 
    
</div>
</div>
<div class="mt-10">

    @livewire('contact-form')
</div>

</x-layout>