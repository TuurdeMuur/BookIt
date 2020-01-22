
{

  const init = () => {
    showPacman();
    showStick();
  };

  const showPacman = () => {
    const $pac = document.querySelector('.pacman');
    if ($pac) {
      $pac.addEventListener('click', function() {
        $pac.src = '../assets/gifs/pacman_1.gif';
        $pac.width = '200';
      });
    }
  };

  const showStick = () => {
    const $stick = document.querySelector('.joystick-gif');
    if ($stick) {
      $stick.addEventListener('click', function() {
        $stick.src = '../assets/gifs/joystick.gif';
      });
    }

  };

  init();
}
