<?php

namespace App\Livewire;

use Livewire\Component;

class Pilihlagu extends Component
{
    public $namalagu;
    public $playing;
    public $playing2;
    public $playing3;
    public $playing4;
    public $playing5;
    public $playing6;
    public $playing7;
    public $playing8;
    public $playing9;
    public $playing10;
    public $playing11;

    public function putarlagu1()

    {
        // Kode Anda untuk memutar lagu

        $this->namalagu='lagu/music.mp3';
        $this->playing = true;
    }

    public function stop()
    {
        // Kode Anda untuk menghentikan lagu
        $this->reset();
        $this->playing = false;

    }
    public function putarlagu2()

    {
        // Kode Anda untuk memutar lagu

        $this->namalagu='lagu/music2.mp3';
        $this->playing2 = true;
    }

    public function stop2()
    {
        // Kode Anda untuk menghentikan lagu
        $this->reset();
        $this->playing2 = false;

    }
    public function putarlagu3()

    {
        // Kode Anda untuk memutar lagu

        $this->namalagu='lagu/music3.mp3';
        $this->playing3 = true;
    }

    public function stop3()
    {
        // Kode Anda untuk menghentikan lagu
        $this->reset();
        $this->playing3 = false;

    }
    public function putarlagu4()

    {
        // Kode Anda untuk memutar lagu

        $this->namalagu='lagu/music4.mp3';
        $this->playing4 = true;
    }

    public function stop4()
    {
        // Kode Anda untuk menghentikan lagu
        $this->reset();
        $this->playing4 = false;

    }

    public function putarlagu5()

    {
        // Kode Anda untuk memutar lagu

        $this->namalagu='lagu/music5.mp3';
        $this->playing5 = true;
    }

    public function stop5()
    {
        // Kode Anda untuk menghentikan lagu
        $this->reset();
        $this->playing4 = false;

    }

    public function putarlagu6()

    {
        // Kode Anda untuk memutar lagu

        $this->namalagu='lagu/music6.mp3';
        $this->playing6 = true;
    }

    public function stop6()
    {
        // Kode Anda untuk menghentikan lagu
        $this->reset();
        $this->playing6 = false;

    }

    public function putarlagu7()

    {
        // Kode Anda untuk memutar lagu

        $this->namalagu='lagu/music7.mp3';
        $this->playing7 = true;
    }

    public function stop7()
    {
        // Kode Anda untuk menghentikan lagu
        $this->reset();
        $this->playing7 = false;

    }

    public function putarlagu8()

    {
        // Kode Anda untuk memutar lagu

        $this->namalagu='lagu/music8.mp3';
        $this->playing8 = true;
    }

    public function stop8()
    {
        // Kode Anda untuk menghentikan lagu
        $this->reset();
        $this->playing8 = false;

    }

    public function putarlagu9()

    {
        // Kode Anda untuk memutar lagu

        $this->namalagu='lagu/music9.mp3';
        $this->playing9 = true;
    }

    public function stop9()
    {
        // Kode Anda untuk menghentikan lagu
        $this->reset();
        $this->playing9 = false;

    }

    public function putarlagu10()

    {
        // Kode Anda untuk memutar lagu

        $this->namalagu='lagu/music10.m4a';
        $this->playing10 = true;
    }

    public function stop10()
    {
        // Kode Anda untuk menghentikan lagu
        $this->reset();
        $this->playing10 = false;

    }
    public function putarlagu11()

    {
        // Kode Anda untuk memutar lagu

        $this->namalagu='lagu/music11.mp3';
        $this->playing11 = true;
    }

    public function stop11()
    {
        // Kode Anda untuk menghentikan lagu
        $this->reset();
        $this->playing11 = false;

    }

    public function render()
    {
        return view('livewire.pilihlagu');
    }
}
