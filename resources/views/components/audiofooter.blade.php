{{-- <link rel="stylesheet" href="{{ asset('path/to/font-awesome/css/all.min.css') }}"> --}}
<div id="audiosticky" class="invisible fixed bottom-0 w-full z-40 h-16 bg-[#0a1f63] flex flex-row gap-1 justify-center items-center transition-all duration-500">
    <button id="buttonplay2"><svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 384 512">
            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <style>
                svg {
                    fill: #ffffff
                }
            </style>
            <path
                d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
        </svg></button>

    <button id="buttonpause2" class="hidden"><svg xmlns="http://www.w3.org/2000/svg" height="2em"
            viewBox="0 0 320 512">
            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <style>
                svg {
                    fill: #ffffff
                }
            </style>
            <path
                d="M48 64C21.5 64 0 85.5 0 112V400c0 26.5 21.5 48 48 48H80c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H48zm192 0c-26.5 0-48 21.5-48 48V400c0 26.5 21.5 48 48 48h32c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H240z" />
        </svg></button>

    <audio id="player">
        {{-- <source src='https://i.klikhost.com/8188/;' /> --}}
        <source src="https://icecast.umn.ac.id/live" />
        {{-- <source src="{{ asset('assets/audio/tes.mp3') }}" /> --}}
    </audio>
    <div class="p-4 max-w-md w-full hidden md:block">
        <div class="flex items-center justify-center">
            <span class="text-sm text-white" id="currentTime">0:00</span>
            <input type="range" id="progressBar" min="0" max="100" value="0"
                class="slider mx-4 w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer">
            {{-- <span class="text-sm text-white" id="duration">0:00</span> --}}
        </div>
    </div>

    {{-- Volume Control Section --}}
    <div class="flex items-center absolute end-5 md:static">
        <div class="flex items-center gap-2">
            <button id="volumeIcon" class="text-white">
                <!-- Font Awesome volume icon -->
                <i class="fas fa-volume-up"></i>
            </button>
            <!-- Updated: Wrap volume controls in a container div -->
            <div id="volumeControls" class="hidden flex items-center">
                <input type="range" id="volume"
                    class="w-16 h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer" min="0"
                    max="100" value="50">
                <span id="volumeValue" class="text-gray-300 ml-2">50%</span>
            </div>
        </div>
    </div>
</div>
<script>
    var button = document.getElementById("buttonplay");
    var button2 = document.getElementById("buttonpause");
    var button3 = document.getElementById("buttonplay2");
    var button4 = document.getElementById("buttonpause2");
    var player = document.getElementById("player");

    const playButton = document.getElementById('buttonplay2');
    const pauseButton = document.getElementById('buttonpause2');
    const progressBar = document.getElementById('progressBar');
    const currentTimeDisplay = document.getElementById('currentTime');
    const durationDisplay = document.getElementById('duration');

    // Prevent dragging/seeking by disabling pointer events or setting it to read-only
    if (progressBar) {
        progressBar.addEventListener('mousedown', (e) => e.preventDefault());
        progressBar.addEventListener('touchstart', (e) => e.preventDefault());
        progressBar.disabled = false; // Optional: visually disabled
    }

    if (button3) button3.addEventListener("click", togglePlayPause);
    if (button4) button4.addEventListener("click", togglePlayPause);

    if (playButton) playButton.addEventListener('click', togglePlayPause);

    if (pauseButton) {
        pauseButton.addEventListener('click', () => {
            if (player) {
                player.pause();
                if (playButton) playButton.classList.remove('hidden');
                pauseButton.classList.add('hidden');
            }
        });
    }

    if (player) {
        player.addEventListener('timeupdate', () => {
            updateProgressBar();
            const currentTime = player.currentTime;
            if (currentTimeDisplay) currentTimeDisplay.textContent = formatTime(currentTime);
        });

        player.addEventListener('loadedmetadata', () => {
            if (durationDisplay) durationDisplay.textContent = formatTime(player.duration);
        });
    }

    function togglePlayPause() {
        if (!player) return;

        if (player.paused) {
            player.play();
            if (button) button.classList.add('hidden');
            if (button2) button2.classList.remove('hidden');
            if (button3) button3.classList.add('hidden');
            if (button4) button4.classList.remove('hidden');
        } else {
            player.pause();
            if (button2) button2.classList.add('hidden');
            if (button) button.classList.remove('hidden');
            if (button4) button4.classList.add('hidden');
            if (button3) button3.classList.remove('hidden');
        }
    }

    function updateProgressBar() {
        if (!progressBar || !player) return;
        const progressPercentage = (player.currentTime / player.duration) * 100;
        progressBar.value = progressPercentage;
    }

    function formatTime(time) {
        const minutes = Math.floor(time / 60);
        const seconds = Math.floor(time % 60);
        return `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
    }
</script>



<!-- Volume control JS -->
<script>
    document.addEventListener('DOMContentLoaded', function() {

        var volumeControl = document.getElementById('volume');
        var volumeValue = document.getElementById('volumeValue');
        var volumeIcon = document.getElementById('volumeIcon');
        var audioPlayer = document.getElementById('player');
        var volumeControls = document.getElementById('volumeControls');


        var previousVolume = 50;


        audioPlayer.volume = previousVolume / 100;
        volumeControl.value = previousVolume;

        function updateVolume() {
            var volume = volumeControl.value;
            volumeValue.textContent = volume + '%';
            audioPlayer.volume = volume / 100;


            if (volume === '0') {
                volumeIcon.innerHTML = '<i class="fas fa-volume-mute"></i>';
            } else if (volume <= '50') {
                volumeIcon.innerHTML = '<i class="fas fa-volume-down"></i>';
            } else {
                volumeIcon.innerHTML = '<i class="fas fa-volume-up"></i>';
            }
        }


        function toggleVolumeControls() {
            volumeControls.classList.toggle('hidden');
        }


        volumeIcon.addEventListener('click', function() {

            // if (audioPlayer.volume > 0) {

            //     previousVolume = volumeControl.value;
            //     audioPlayer.volume = 0;
            //     volumeControl.value = 0;
            // } else {

            //     audioPlayer.volume = previousVolume / 100;
            //     volumeControl.value = previousVolume;
            // }

            updateVolume();

            toggleVolumeControls();
        });

        volumeControl.addEventListener('input', updateVolume);
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const volumeInput = document.getElementById('volume');
        const volumeValue = document.getElementById('volumeValue');

        volumeInput.addEventListener('input', function() {
            const currentVolume = volumeInput.value;
            volumeValue.textContent = `${currentVolume}%`;

            // Additional actions can be performed here, such as updating the actual volume in your application.
            // For now, we'll just log the volume value.
            // console.log(currentVolume);
        });
    });
</script>
<script>
    window.addEventListener('scroll', function() {
        var header = document.getElementById('audiosticky');
        if (window.scrollY > 2) {
            header.classList.remove('invisible');
        } else {
            header.classList.add('invisible');
        }
    });
</script>