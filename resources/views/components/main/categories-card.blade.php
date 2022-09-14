 @props([
    'link' => '#',
    'title' => 'Title',
])
 <li
     class="col-span-1 grid items-center overflow-hidden justify-center hover:shadow-md rounded-xl shadow-sm  p-3 bg-white ">
     {{ $icon }}
     <div class="mt-4 flex justify-center space-x-2 items-center text-indigo-700">
         <h3 class="text-md font-medium ">
             {{ $title }}
         </h3>
         <svg xmlns="http://www.w3.org/2000/svg"
             fill="none"
             viewBox="0 0 24 24"
             stroke-width="1.5"
             stroke="currentColor"
             class="w-5 h-5">
             <path stroke-linecap="round"
                 stroke-linejoin="round"
                 d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
         </svg>
     </div>
 </li>
