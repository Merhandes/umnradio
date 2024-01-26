
const player = document.getElementById('player');
const playButton = document.getElementById('buttonplay2');
const pauseButton = document.getElementById('buttonpause2');
const progressBar = document.getElementById('progressBar');
const currentTimeDisplay = document.getElementById('currentTime');
const durationDisplay = document.getElementById('duration');

playButton.addEventListener('click', () => {

    if (player.paused && player.readyState >= 2) {
        player.play();
        playButton.classList.add('hidden');
        pauseButton.classList.remove('hidden');
    }
});

pauseButton.addEventListener('click', () => {
    player.pause();
    playButton.classList.remove('hidden');
    pauseButton.classList.add('hidden');
});

player.addEventListener('timeupdate', updateProgressBar());

player.addEventListener('loadedmetadata', () => {
    const duration = player.duration();
    durationDisplay.textContent = formatTime(duration);
});

progressBar.addEventListener('input', () => {
    const seekTime = player.duration * (progressBar.value / 100);
    player.currentTime = seekTime;
});

function updateProgressBar() {
    const currentTime = player.currentTime;
    const formattedCurrentTime = formatTime(currentTime);
    currentTimeDisplay.textContent = formattedCurrentTime;

    const progressPercentage = (currentTime / player.duration) * 100;
    progressBar.value = progressPercentage;
}

function formatTime(time) {
    const minutes = Math.floor(time / 60);
    const seconds = Math.floor(time % 60);
    return `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
}
