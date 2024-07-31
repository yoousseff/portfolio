<x-layout>
    <section id="contact">

        <div class="flex justify-center selection">
            
            <div class="flex justify-between items-start w-[75%]">
                <div>
                    <div>
                        <p class="font-sevillana hover:text-orange-500 text-[5rem]">Get In Touch</p>
                        <p class="w-96 text-xl mt-5">Currently accepting clients and full time opportunities. Feel free to
                            contact me on this form.</p>
                        </div>
                        
                        <div class="mt-20">
                            <p class="font-sevillana hover:text-orange-500 text-[5rem]">Follow me on</p>
                            <div class="flex">
                                <a href="https://www.linkedin.com/in/youssef-alaa-64ba1a2a5/" target="_blank">
                                    <div
                                    class="me-5 border-4 p-6 group hover:border-orange-500  transition-all ease-in-out duration-500">
                                    <x-fab-linkedin-in class="group-hover:text-orange-500" />
                                    
                                </div>
                            </a>
                            <a href="https://github.com/yoousseff" target="_blank">
                                
                                <div
                                class="mx-5 border-4 p-6 group hover:border-orange-500  transition-all ease-in-out duration-500">
                                <x-eva-github class="group-hover:text-orange-500" />
                            </div>
                        </a>
                        
                        <a href="https://www.instagram.com/yoouusseeff_aallaaaa/" target="_blank">
                            
                            <div
                            class="mx-5 border-4 p-6 group hover:border-orange-500  transition-all ease-in-out duration-500">
                            <x-feathericon-instagram class="group-hover:text-orange-500" />
                        </div>
                    </a>

                 

                                  
                </div>
                    <p class="text-gray-500 my-10">&copy; {{date('Y')}} Youssef alaa</p>
    
                </div>

                
                
            </div>
            
            
            <div class="">


                <form action="" >
                    
                    <input type="text" required placeholder="Name" class="bg-transparent focus:outline-none border-b-4 border-gray-200 focus:border-orange-500 py-3 w-[350px] mb-5"> <br>
                    <input type="email" required placeholder="Email" class="bg-transparent focus:outline-none border-b-4 border-gray-200 focus:border-orange-500 py-3 w-[350px] mb-5"> <br>
                    <textarea class="bg-transparent focus:outline-none border-b-4 border-gray-200 focus:border-orange-500 py-3 w-[350px] mb-5" placeholder="How can i help you?"></textarea><br>
                    <button type="submit" class=" font-sevillana text-orange-500 text-2xl border-[4px] rounded-md px-2 py-1 transition-all ease-in-out duration-500 hover:rounded-none hover:border-orange-500 hover:text-gray-200  border-gray-200 ">Submit</button>
                    
                </form>



             
            </div>

                
            </div>
        </div>
        
    </section>
    </x-layout>