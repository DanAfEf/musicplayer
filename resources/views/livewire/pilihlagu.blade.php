<div>
    <div style="text-align: center;">
        <div class="card" style="background: none; border:none;">
            <div class="card-header"
                style="background: none; border: none; font-family:fantasy; font-size: 25px; color:  white;">
                Tory Lanez - She make it clap (Freestyle)</div>
            <div class="card-body"><img src="img/image1.jpg" width="150px"></div>
            <div class="card-body2">
                @if(!$playing)
                <button wire:click="putarlagu1"
                    style="background: none; border: none; font-family:cursive;"><img src="img/useless logo.png" height="40px" width="40px"></button>
                @endif

                @if($playing)
                <button wire:click="stop" style="background: none; border: none; font-family:cursive;"><img src="img/uselesspart2 logo.png" height="40px" width="40px"></button>
                @endif
            </div>
        </div>

        <div class="card"
    style="background: none; border:none;  font-family:fantasy; font-size: 25px;">
    <div class="card-header" style="background: none; border: none; font-family:fantasy; font-size: 25px; color: white;">FIFTY FIFTY - Cupid</div>
    <div class="card-body"><img src="img/image2.webp" width="150px"></div>
    <div class="card-body2">
        @if(!$playing2)
        <button wire:click="putarlagu2"
            style="background: none; border: none; font-family:cursive;"><img src="img/useless logo.png" height="40px" width="40px"></button>
        @endif

        @if($playing2)
        <button wire:click="stop" style="background: none; border: none; font-family:cursive;"><img src="img/uselesspart2 logo.png" height="40px" width="40px"></button>
        @endif
    </div>
</div>
{{-- BATAS --}}
        <div class="card" style="background: none; border:none;">
            <div class="card-header"
                style="background: none; border: none;  font-family:fantasy; font-size: 25px; color: white;">
                PLAYBOI CARTI_BANDO (PROD. YUGEN X TA2CUTE) YUGEN;幽玄</div>
            <div class="card-body"><img src="img/image3.jpg" width="150px"></div>
            <div class="card-body2">
                    @if(!$playing3)
        <button wire:click="putarlagu3"
            style="background: none; border: none; font-family:cursive;"><img src="img/useless logo.png" height="40px" width="40px"></button>
        @endif

        @if($playing3)
        <button wire:click="stop" style="background: none; border: none; font-family:cursive;"><img src="img/uselesspart2 logo.png" height="40px" width="40px"></button>
        @endif
        </div>
{{-- BATAS --}}
        <div class="card" style="background: none; border:none;">
            <div class="card-header"
                style="background: none; border: none;  font-family:fantasy; font-size: 25px; color: white;">
                Pompeii | Bastille - Topic</div>
            <div class="card-body"><img src="img/image4.png" width="150px"></div>
            <div class="card-body2">
                @if(!$playing4)
                <button wire:click="putarlagu4"
                    style="background: none; border: none; font-family:cursive;"><img src="img/useless logo.png" height="40px" width="40px"></button>
                @endif

                @if($playing4)
                <button wire:click="stop" style="background: none; border: none; font-family:cursive;"><img src="img/uselesspart2 logo.png" height="40px" width="40px"></button>
                @endif
            </div>
        </div>
{{-- BATAS --}}
        <div class="card" style="background: none; border:none;">
            <div class="card-header"
                style="background: none; border: none;  font-family:fantasy; font-size: 25px; color: white;">
                Golden Hour | JVKE-Topic</div>
            <div class="card-body"><img src="img/image5.jpeg" width="150px"></div>
            <div class="card-body2">
                @if(!$playing5)
                <button wire:click="putarlagu5"
                    style="background: none; border: none; font-family:cursive; color:white;"><img src="img/useless logo.png" height="40px" width="40px"></button>
                @endif

                @if($playing5)
                <button wire:click="stop" style="background: none; border: none; font-family:cursive; color:red;"><img src="img/uselesspart2 logo.png" height="40px" width="40px"></button>
                @endif
{{-- BATAS --}}
            <div class="card" style="background: none; border:none;">
                <div class="card-header"
                    style="background: none; border: none;  font-family:fantasy; font-size: 25px; color: white;">
                    Crush | Cigarette After Sex</div>
                <div class="card-body"><img src="img/image6.png" width="150px"></div>
                <div class="card-body2">    \
                    @if(!$playing6)
                    <button wire:click="putarlagu6"
                        style="background: none; border: none; font-family:cursive; color:white;"><img src="img/useless logo.png" height="40px" width="40px"></button>
                    @endif

                    @if($playing6)
                    <button wire:click="stop" style="background: none; border: none; font-family:cursive; color:red;"><img src="img/uselesspart2 logo.png" height="40px" width="40px"></button>
                    @endif
{{-- BATAS --}}
                <div class="card" style="background: none; border:none;">
                    <div class="card-header"
                        style="background: none; border: none;  font-family:fantasy; font-size: 25px; color: white;">
                        I Wanna Be Yours | Artic Monkeys</div>
                    <div class="card-body"><img src="img/image7.jpg" width="150px"></div>
                    <div class="card-body2">
                        @if(!$playing7)
                        <button wire:click="putarlagu7"
                            style="background: none; border: none; font-family:cursive; color:white;"><img src="img/useless logo.png" height="40px" width="40px"></button>
                        @endif

                        @if($playing7)
                        <button wire:click="stop" style="background: none; border: none; font-family:cursive; color:red;"><img src="img/uselesspart2 logo.png" height="40px" width="40px"></button>
                        @endif
{{-- BATAS --}}
                    <div class="card" style="background: none; border:none;">
                        <div class="card-header"
                            style="background: none; border: none;  font-family:fantasy; font-size: 25px; color: white;">
                            Chasing Pavements | Adele</div>
                        <div class="card-body"><img src="img/image8.png" width="150px"></div>
                        <div class="card-body2">
                            @if(!$playing8)
                            <button wire:click="putarlagu8"
                                style="background: none; border: none; font-family:cursive; color:white;"><img src="img/useless logo.png" height="40px" width="40px"></button>
                            @endif

                            @if($playing8)
                            <button wire:click="stop" style="background: none; border: none; font-family:cursive; color:red;"><img src="img/uselesspart2 logo.png" height="40px" width="40px"></button>
                            @endif
{{-- BATAS --}}
                        <div class="card" style="background: none; border:none;">
                            <div class="card-header"
                                style="background: none; border: none;  font-family:fantasy; font-size: 25px; color: white;">
                                Love In The Dark | Adele</div>
                            <div class="card-body"><img src="img/image11.png" width="150px"></div>
                            <div class="card-body2">
                                @if(!$playing9)
                                <button wire:click="putarlagu9"
                                    style="background: none; border: none; font-family:cursive; color:white;"><img src="img/useless logo.png" height="40px" width="40px"></button>
                                @endif

                                @if($playing9)
                                <button wire:click="stop" style="background: none; border: none; font-family:cursive; color:red;"><img src="img/uselesspart2 logo.png" height="40px" width="40px"></button>
                                @endif
{{-- BATAS --}}
                            <div class="card" style="background: none; border:none;">
                                <div class="card-header"
                                    style="background: none; border: none;  font-family:fantasy; font-size: 25px; color: white;">
                                    Apocalypse | Cigarette After Sex</div>
                                <div class="card-body"><img src="img/image10.png" width="150px"></div>
                                <div class="card-body2">
                                    @if(!$playing10)
                                    <button wire:click="putarlagu10"
                                        style="background: none; border: none; font-family:cursive; color:white;"><img src="img/useless logo.png" height="40px" width="40px"></button>
                                    @endif

                                    @if($playing10)
                                    <button wire:click="stop" style="background: none; border: none; font-family:cursive; color:red;"><img src="img/uselesspart2 logo.png" height="40px" width="40px"></button>
                                    @endif
{{-- BATAS --}}
                                    <div class="card" style="background: none; border:none;">
                                        <div class="card-header"
                                            style="background: none; border: none;  font-family:fantasy; font-size: 25px; color: white;">
                                            Super Shy | New Jeans</div>
                                        <div class="card-body"><img src="img/image9.png" width="150px"></div>
                                        <div class="card-body2">
                                            @if(!$playing11)
                                            <button wire:click="putarlagu11"
                                                style="background: none; border: none; font-family:cursive; color:white;"><img src="img/useless logo.png" height="40px" width="40px"></button>
                                            @endif

                                            @if($playing11)
                                            <button wire:click="stop" style="background: none; border: none; font-family:cursive; color:red;"><img src="img/uselesspart2 logo.png" height="40px" width="40px"></button>
                                            @endif
                                @isset($namalagu)
                                    <audio autoplay>
                                        <source src="{{ asset($namalagu) }}" type="audio/ogg">
                                    </audio>
                                @endisset
                            </div>
                        </div>
                    </div>
