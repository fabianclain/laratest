<x-layout>
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Create a Gig
            </h2>
            <p class="mb-4">Post a gig to find a developer</p>
        </header>

        <form method="POST" action="/listings" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="company" class="inline-block text-lg mb-2">Company Name</label>
                <input type="text" value="{{old('company')}}" class="border border-gray-200 rounded p-2 w-full" name="company" />
            </div>
            @error('company')
            <div class=".p.text-red-500">{{$message}}</div< @enderror <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Job Title</label>
                <input type="text" value="{{old('title')}}" class="border border-gray-200 rounded p-2 w-full" name="title" placeholder="Example: Senior Laravel Developer" />
            </div>
            @error('title')
            <div class=".p.text-red-500">{{$message}}</div< @enderror <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">Job Location</label>
                <input type="text" value="{{old('location')}}" class="border border-gray-200 rounded p-2 w-full" name="location" placeholder="Example: Remote, Boston MA, etc" />
            </div>
            @error('location')
            <div class=".p.text-red-500">{{$message}}</div< @enderror <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Contact Email</label>
                <input type="text" value="{{old('email')}}" class="border border-gray-200 rounded p-2 w-full" name="email" />
            </div>
            @error('email')
            <div class=".p.text-red-500">{{$message}}</div< @enderror <div class="mb-6">
                <label for="website" class="inline-block text-lg mb-2">
                    Website/Application URL
                </label>
                <input type="text" value="{{old('website')}}" class="border border-gray-200 rounded p-2 w-full" name="website" />
            </div>
            <!-- @error('website')
            <div class=".p.text-red-500" >{{$message}}</div<  
            @enderror -->

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (Comma Separated)
                </label>
                <input type="text" value="{{old('tags')}}" class="border border-gray-200 rounded p-2 w-full" name="tags" placeholder="Example: Laravel, Backend, Postgres, etc" />
            </div>
            @error('tags')
            <div class=".p.text-red-500">{{$message}}</div< @enderror <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Company Logo
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />

                @error('logo')
                <div class=".p.text-red-500">{{$message}}</div< @enderror </div>


                    <div class="mb-6">
                        <label for="description" class="inline-block text-lg mb-2">
                            Job Description
                        </label>
                        <textarea value="{{old('description')}}" class="border border-gray-200 rounded p-2 w-full" name="description" rows="10" placeholder="Include tasks, requirements, salary, etc"></textarea>
                    </div>

                    <div class="mb-6">
                        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                            Create Gig
                        </button>

                        <a href="/" class="text-black ml-4"> Back </a>
                    </div>
        </form>
    </x-card>

</x-layout>