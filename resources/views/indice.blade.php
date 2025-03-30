<x-layout>


       
<div class="row justify-content-center mt-5 bg-custom">
    <div class="row justify-content-center align-items-start w-100 py-5 overlay">
        @foreach ( $characters as $character )
            <div class="col-12 col-md-4 col-lg-3 mb-4">
                <x-card 
                    characterName="{{ $character['name'] }}"  
                    characterSurname="{{ $character['surname'] }}"                       
                    characterStory="{{ $character['story'] }}" 
                    characterPhoto="{{ $character['photo'] }}" 
                    characterId="{{ $character['id'] }}">
                </x-card>
            </div>
        @endforeach
    </div>
</div>

</x-layout>
