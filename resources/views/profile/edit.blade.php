<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Profile
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <main class="container" style="background-color: #fff;">
                        <section id="contact-us">
                            @include('includes.flash-message')
                            {{-- contact form --}}
                            <div class="contact-form">
                                <form action="{{ route('profile.update') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                     {{-- name --}}
                                     <label for="name"><span>Name</span></label>
                                     <input type="text" id="name" name="name" maxlength="255" value="{{ old('name',$profile->name) }}" />
                                     {{-- name validation --}}
                                     @error('name')
                                         <p style="color: red; margin-bottom: 25px">{{ $message }}</p>
                                     @enderror
 
                                    {{-- Bio --}}
                                    <label for="bio"><span>Bio (maxlength 255 character)</span></label>
                                    <textarea style="margin-bottom: 0px" id="bio" name="bio" oninput="countCharacters()"maxlength="255">{{ old('bio', $profile->bio) }}</textarea>
                                    <p id="characterCount">0 characters</p>
                                    {{-- Bio validation --}}
                                    @error('bio')
                                        <p style="color: red; margin-bottom: 25px">{{ $message }}</p>
                                    @enderror
                                    {{-- Image --}}
                                    <label for="image"><span>Image</span></label>
                                    <img class="w-10 h-10 rounded-full" src="{{ asset('storage/'.$profile->profile_picture_path) }}" alt="Rounded avatar">
                                    <input type="file" id="profilePicture" name="profilePicture" />
                                    {{-- profilePicture validation --}}
                                    @error('profilePicture')
                                        <p style="color: red; margin-bottom: 25px">{{ $message }}</p>
                                    @enderror
                                    {{-- Button --}}
                                    <input type="submit" value="Submit" />
                                </form>
                            </div>
                        </section>
                    </main>
                </div>
            </div>
        </div>
    </div>
    <script>
        function countCharacters() {
            var bio = document.getElementById('bio').value;
            var count = bio.length;
            var characterCount = document.getElementById('characterCount');
            characterCount.innerHTML = count + ' characters';

            if (count > 220) {
                characterCount.style.color = 'red';
            } else {
                characterCount.style.color = ''; // Remove text color style
            }
        }
    </script>
</x-app-layout>
