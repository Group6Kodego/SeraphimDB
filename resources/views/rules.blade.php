<x-app>
    @include('partials._welcomenav')
    <!-- Jumbotron -->
    <body class="bg-gray-200 font-sans leading-normal tracking-normal">
    

        <div class="container px-4 md:px-0 max-w-6xl mx-auto mt-8">
            
            <div class="pt-15 w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
              
            <!--Lead Card-->
            <div class="mt-10 flex h-full bg-white rounded overflow-hidden shadow-lg">
              <div class="flex flex-wrap no-underline">
          
                <div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
                  <header class="w-full container mx-auto">
                    <div class="flex flex-col items-center py-10">
                        <div class="mx-auto font-bold text-amber-600 uppercase text-5xl">
                            Rules and Regulations
                        </div>
                        <p class="flex text-center pt-5 p-5 text-amber-500 mb-8 md:pb-0">
                          We take pride in providing our good quality services that make their stay enjoy every moments.
                        </p>
                        <br>
                        <br>
                        <x-header></x-header>
                        
                        <h4 class="flex text-center pt-5 p-5 text-gray-600 mb-8 md:pb-0">Health and Safety: The hotel should ensure that the workplace is safe and healthy for employees. This includes providing proper training, protective equipment, and maintaining cleanliness.</h4>
  
                        
                        <h4 class="flex text-center pt-5 p-5 text-gray-600 mb-8 md:pb-0">Anti-discrimination: Discrimination of any kind should not be tolerated in the workplace, and employees should be treated fairly and equally.</h4>
                        <h4 class="flex text-center pt-5 p-5 text-gray-600 mb-8 md:pb-0">Anti-harassment: The hotel should have a strict policy against any form of harassment in the workplace, including sexual harassment.</h4>
                        <h4 class="flex text-center pt-5 p-5 text-gray-600 mb-8 md:pb-0">Employee benefits: The hotel should provide appropriate employee benefits, such as health insurance, paid vacation time, and sick leave.</h4>
                        <h4 class="flex text-center pt-5 p-5 text-gray-600 mb-8 md:pb-0">Compensation: Employees should be fairly compensated for their work, and the hotel should comply with minimum wage and overtime laws.</h4>
                        <h4 class="flex text-center pt-5 p-5 text-gray-600 mb-8 md:pb-0">Labor laws: The hotel should comply with all relevant labor laws and regulations, including those related to work hours, breaks, and leave.</h4>
                        <h4 class="flex text-center pt-5 p-5 text-gray-600 mb-8 md:pb-0">Privacy: The hotel should respect employee privacy, including personal information and communication.</h4>
                        <h4 class="flex text-center pt-5 p-5 text-gray-600 mb-8 md:pb-0">Training and development: The hotel should provide opportunities for employees to develop their skills and advance in their careers.</h4>
                        <x-header></x-header>
                        <p class="flex text-center pt-5 p-5 text-amber-500 mb-8 md:pb-0">
                            These are just a few of the many rules and regulations that hotels should follow to ensure a safe, fair, and respectful workplace for their employees. It is important for hotel management to stay up-to-date with local regulations and laws to avoid any legal issues.
                          </p>
                        
                       
                    </div>
                </header>
                </div>
              </div>
            </div>
            <!--/Lead Card-->
    
    
            <!--Posts Container-->
            <div class="flex flex-wrap justify-between pt-12 -mx-6">
    
    
            
    
        
        
        <section class="mx-auto justify-center mt-2 py-10 bg-gray-100">
          
                   </div>
                </div>
             </section>
             {{-- ----------------------------------------------------------------------------- --}}
        
          </div>
      <script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
      <script src="https://unpkg.com/tippy.js@4"></script>
      <script>
        //Init tooltips
        tippy('.avatar')
      </script>
    </body>
    </html>
    
    <!-- Jumbotron -->
    @include('partials._footer')
    
    
    
    </x-app>